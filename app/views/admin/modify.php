<!DOCTYPE html>
<html lang="en">

<?php echo include('chop/head.php'); ?>

<body>

<?php echo include('chop/header.php'); ?>

<!-- ======= Sidebar ======= -->
<?php echo include('chop/aside.php'); ?>

<main id="main" class="main" style="background-color:#0b3d0b; color:#d4f0c6;"> <!-- Dark green background -->

    <div class="pagetitle">
        <h1 style="color:#d4f0c6;">Modify Items</h1>
    </div>

    <!-- ITEM LIST TABLE -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card" style="background-color:#082a08;">
                    <div class="card-body">
                        <h5 class="card-title" style="color:#d4f0c6;">Item List</h5>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered datatable" style="color:#d4f0c6;">
                                <thead style="background-color:#0b3d0b; color:#d4f0c6;">
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($prod as $pr): ?>
                                        <tr class="<?= $pr['quantity'] < 5 ? 'bg-danger text-white' : '' ?>">
                                            <th scope="row"><?= $pr['id'] ?></th>
                                            <td><?= $pr['name'] ?></td>
                                            <td><?= $pr['description'] ?></td>
                                            <td><?= $pr['category'] ?></td>
                                            <td><?= $pr['quantity'] ?></td>
                                            <td>
                                                <img src="<?= BASE_URL . 'uploads/' . $pr['image'] ?>" alt="product image"
                                                     style="max-width: 70px; cursor: pointer;">
                                            </td>
                                            <td>₱<?= $pr['prize'] ?></td>
                                            <td><?= $pr['date'] ?></td>
                                            <td>
                                                <a href="/edit/<?= $pr['id'] ?>" class="btn btn-outline-light btn-sm">Edit</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- MODIFY FORM -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card" style="background-color:#082a08;">
                    <div class="card-body">

                        <div class="pagetitle p-3 rounded" style="background-color:#d4f0c6;">
                            <h1 style="color:#0b3d0b;">Modify Items</h1>
                        </div>

                        <form class="row g-3 mt-3" 
                              action="/<?= (isset($edit['id'])) ? "submitedit/" . $edit['id'] : " " ?>" 
                              method="post" enctype="multipart/form-data" id="imageForm">

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" 
                                           style="background-color:#0b3d0b; color:#d4f0c6; border:1px solid #d4f0c6;"
                                           id="floatingName" name="name" placeholder="Item Name" 
                                           value="<?= (isset($edit['name'])) ? $edit['name'] : "" ?>" required>
                                    <label for="floatingName" style="color:#d4f0c6;">Item Name</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea required class="form-control" 
                                              style="background-color:#0b3d0b; color:#d4f0c6; border:1px solid #d4f0c6; height:100px;"
                                              name="description" id="floatingTextarea"
                                              placeholder="Description"><?= (isset($edit['description'])) ? $edit['description'] : "" ?></textarea>
                                    <label for="floatingTextarea" style="color:#d4f0c6;">Item Description</label>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect" name="category"
                                            style="background-color:#0b3d0b; color:#d4f0c6; border:1px solid #d4f0c6;"
                                            aria-label="State" required>
                                        <option value="">Select</option>
                                        <?php foreach ($cat as $c): ?>
                                            <option value="<?= $c['categories'] ?>" 
                                                <?= (isset($edit['category']) && $edit['category'] == $c['categories']) ? "selected" : "" ?>>
                                                <?= $c['categories'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="floatingSelect" style="color:#d4f0c6;">Category</label>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-floating">
                                    <input min="1" type="number" class="form-control"
                                           style="background-color:#0b3d0b; color:#d4f0c6; border:1px solid #d4f0c6;"
                                           id="floatingQuantity" name="quantity" placeholder="Quantity"
                                           value="<?= (isset($edit['quantity'])) ? $edit['quantity'] : "" ?>" required>
                                    <label for="floatingQuantity" style="color:#d4f0c6;">Quantity</label>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control"
                                           style="background-color:#0b3d0b; color:#d4f0c6; border:1px solid #d4f0c6;"
                                           id="floatingPrize" name="prize" placeholder="Price"
                                           value="<?= (isset($edit['prize'])) ? $edit['prize'] : "" ?>" required>
                                    <label for="floatingPrize" style="color:#d4f0c6;">Price</label>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="formFile" class="form-label" style="color:#d4f0c6;">Upload Image</label>
                                <input class="form-control" type="file" id="formFile" name="image"
                                       style="background-color:#0b3d0b; color:#d4f0c6; border:1px solid #d4f0c6;"
                                       onchange="previewImage()">
                            </div>

                            <!-- Image Preview -->
                            <div class="col-md-12 mt-3" id="imagePreviewContainer" 
                                 style="display: <?= isset($edit['image']) && !empty($edit['image']) ? 'block' : 'none' ?>;">
                                <img id="imagePreview" 
                                     src="<?= isset($edit['image']) ? BASE_URL . 'uploads/' . $edit['image'] : '' ?>" 
                                     alt="Image Preview" 
                                     style="max-width:300px; max-height:300px; border:2px solid #d4f0c6; border-radius:5px;">
                            </div>

                            <!-- Submit Buttons -->
                            <div class="text-center mt-4">
                                <input class="btn btn-success" type="submit" 
                                       value="<?= (isset($edit['id'])) ? "Update" : "Update" ?>">
                                <a href="/modify" class="btn btn-danger" onclick="resetForm()">Reset</a>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<?php echo include('chop/script.php'); ?>

<script>
    function previewImage() {
        var input = document.getElementById('formFile');
        var imagePreview = document.getElementById('imagePreview');
        var imagePreviewContainer = document.getElementById('imagePreviewContainer');

        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                imagePreview.src = e.target.result;
                imagePreviewContainer.style.display = 'block';
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function resetForm() {
        document.getElementById('imageForm').reset();
        document.getElementById('imagePreviewContainer').style.display = 'none';
    }
</script>

<!-- DataTables Custom Styling -->
<style>
    .dataTables_filter label,
    .dataTables_length label,
    .dataTables_info,
    .dataTables_paginate {
        color: #d4f0c6;
    }
    .dataTables_paginate a {
        color: #0b3d0b !important;
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
