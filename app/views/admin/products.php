<!DOCTYPE html>
<html lang="en">

<?php echo include('chop/head.php'); ?>

<body>

<?php echo include('chop/header.php'); ?>

<!-- ======= Sidebar ======= -->
<?php echo include('chop/aside.php'); ?>

<main id="main" class="main" style="background-color:#0b3d0b; color:#d4f0c6;"> <!-- Dark green main -->

    <div class="pagetitle">
        <h1 style="color:#d4f0c6;">Products</h1> <!-- Light green title -->
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card" style="background-color:#082a08;"> <!-- Darker green card -->
                    <div class="card-body">

                        <!-- Table with striped rows -->
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered datatable" style="color:#d4f0c6;"> <!-- Keep datatable -->
                                <thead style="background-color:#0b3d0b; color:#d4f0c6;"> <!-- Dark green header -->
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($prod as $pr): ?>
                                        <tr class="<?= $pr['quantity'] < 5 ? 'bg-danger text-white' : '' ?>"> <!-- Red for low stock -->
                                            <th scope="row"><?= $pr['id'] ?></th>
                                            <td>
                                                <img src="<?= BASE_URL . 'uploads/' . $pr['image'] ?>" alt="product image"
                                                    style="max-width: 70px; cursor: pointer;">
                                            </td>
                                            <td><?= $pr['name'] ?></td>
                                            <td><?= $pr['description'] ?></td>
                                            <td><?= $pr['category'] ?></td>
                                            <td><?= $pr['quantity'] ?></td>
                                            <td>₱<?= $pr['prize'] ?></td>
                                            <td><?= $pr['date'] ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- End Table -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<?php echo include('chop/script.php'); ?>

<!-- Optional: DataTables custom styling -->
<style>
    .dataTables_filter label,
    .dataTables_length label,
    .dataTables_info,
    .dataTables_paginate {
        color: #d4f0c6; /* Light green for text */
    }

    .dataTables_paginate a {
        color: #0b3d0b !important; /* Dark green for pagination links */
        background-color: #d4f0c6;
        border-radius: 4px;
        margin: 0 2px;
    }

    .dataTables_paginate a.current {
        background-color: #0b3d0b !important;
        color: #d4f0c6 !important;
    }

    .dataTables_filter input,
    .dataTables_length select {
        background-color: #082a08;
        color: #d4f0c6;
        border: 1px solid #0b3d0b;
    }
</style>

</body>

</html>
