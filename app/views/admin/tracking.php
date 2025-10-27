<!DOCTYPE html>
<html lang="en">

<?php echo include('chop/head.php'); ?>

<body>
    <?php echo include('chop/header.php'); ?>
    <?php echo include('chop/aside.php'); ?>

    <main id="main" class="main" style="background-color:#0b3d0b; color:#d4f0c6;"> <!-- Forest green theme -->

        <div class="pagetitle">
            <h1 style="color:#d4f0c6;">Purchase Items Tracking</h1>
        </div>

        <!-- PURCHASE ITEMS TABLE -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="background-color:#082a08;">
                        <div class="card-body">
                            <h5 class="card-title" style="color:#d4f0c6;">Purchase Items List</h5>

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered datatable" style="color:#d4f0c6;">
                                    <thead style="background-color:#0b3d0b; color:#d4f0c6;">
                                        <tr>
                                            <th>Id</th>
                                            <th>Item Name</th>
                                            <th>Customer</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Total Price</th>
                                            <th>Status</th>
                                            <th>Order Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($purchase_items as $item): ?>
                                            <tr class="<?= $item['status'] == 'Pending' ? 'bg-danger text-white' : '' ?>">
                                                <td><?= $item['id'] ?></td>
                                                <td><?= $item['Item_name'] ?></td>
                                                <td><?= $item['Customer'] ?></td>
                                                <td><?= $item['quantity'] ?></td>
                                                <td>₱<?= $item['prize'] ?></td>
                                                <td>₱<?= $item['total_price'] ?></td>
                                                <td><?= $item['status'] ?></td>
                                                <td><?= $item['order_at'] ?></td>
                                                <td>
                                                    <a href="/trackEdit/<?= $item['id'] ?>" 
                                                       class="btn btn-outline-light btn-sm">Modify</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- EDIT FORM -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="background-color:#082a08;">
                        <div class="card-body">

                            <div class="pagetitle p-3 rounded" style="background-color:#d4f0c6;">
                                <h1 style="color:#0b3d0b;">Modify Purchase Details</h1>
                            </div>

                            <form action="/trackSubmitEdit/<?= isset($trackEdit['id']) ? $trackEdit['id'] : '' ?>" 
                                  method="post" enctype="multipart/form-data" class="mt-3">

                                <div class="form-floating mb-3">
                                    <input type="text" name="item_name" class="form-control"
                                           style="background-color:#0b3d0b; color:#d4f0c6; border:1px solid #d4f0c6;"
                                           placeholder="Item Name" 
                                           value="<?= isset($trackEdit['Item_name']) ? $trackEdit['Item_name'] : '' ?>" required>
                                    <label style="color:#d4f0c6;">Item Name</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" name="customer" class="form-control"
                                           style="background-color:#0b3d0b; color:#d4f0c6; border:1px solid #d4f0c6;"
                                           placeholder="Customer" 
                                           value="<?= isset($trackEdit['Customer']) ? $trackEdit['Customer'] : '' ?>" required>
                                    <label style="color:#d4f0c6;">Customer</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="number" name="quantity" min="1" class="form-control"
                                           style="background-color:#0b3d0b; color:#d4f0c6; border:1px solid #d4f0c6;"
                                           placeholder="Quantity" 
                                           value="<?= isset($trackEdit['quantity']) ? $trackEdit['quantity'] : '' ?>" required>
                                    <label style="color:#d4f0c6;">Quantity</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="number" step="0.01" name="prize" class="form-control"
                                           style="background-color:#0b3d0b; color:#d4f0c6; border:1px solid #d4f0c6;"
                                           placeholder="Price" 
                                           value="<?= isset($trackEdit['prize']) ? $trackEdit['prize'] : '' ?>" required>
                                    <label style="color:#d4f0c6;">Price</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <select name="status" class="form-select"
                                            style="background-color:#0b3d0b; color:#d4f0c6; border:1px solid #d4f0c6;" required>
                                        <option value="Pending" <?= isset($trackEdit['status']) && $trackEdit['status'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
                                        <option value="Preparing" <?= isset($trackEdit['status']) && $trackEdit['status'] == 'Preparing' ? 'selected' : '' ?>>Preparing</option>
                                        <option value="Out for Delivery" <?= isset($trackEdit['status']) && $trackEdit['status'] == 'Out for Delivery' ? 'selected' : '' ?>>Out for Delivery</option>
                                        <option value="Delivered" <?= isset($trackEdit['status']) && $trackEdit['status'] == 'Delivered' ? 'selected' : '' ?>>Delivered</option>
                                    </select>
                                    <label style="color:#d4f0c6;">Status</label>
                                </div>

                                <div class="form-floating mb-4">
                                    <input type="text" name="customer_id" class="form-control"
                                           style="background-color:#0b3d0b; color:#d4f0c6; border:1px solid #d4f0c6;"
                                           placeholder="Customer ID" 
                                           value="<?= isset($trackEdit['CustomerId']) ? $trackEdit['CustomerId'] : '' ?>" required>
                                    <label style="color:#d4f0c6;">Customer ID</label>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success px-4">Submit</button>
                                    <a href="/tracking" class="btn btn-danger px-4" onclick="resetForm()">Reset</a>
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
        function resetForm() {
            document.querySelector('form').reset();
        }
    </script>

    <!-- DATATABLES CUSTOM STYLE -->
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
