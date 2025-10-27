<!DOCTYPE html>
<html lang="en">

<?php echo include('chop/head.php'); ?>

<body>

<?php echo include('chop/header.php'); ?>

<!-- ======= Sidebar ======= -->
<?php echo include('chop/aside.php'); ?>

<main id="main" class="main" style="background-color:#0b3d0b; color:#d4f0c6;"> <!-- Dark green background -->

    <div class="pagetitle">
        <h1 style="color:#d4f0c6;">Add Products</h1> <!-- Light green text -->
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-8">
                <div class="card" style="background-color:#082a08;"> <!-- Dark green card -->
                    <div class="card-body">
                        <h5 class="card-title" style="color:#d4f0c6;">Product Details</h5>

                        <!-- Floating Labels Form -->
                        <form class="row g-3" action="/save" method="post" enctype="multipart/form-data" id="imageForm">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingName" name="name"
                                           placeholder="Item Name" required
                                           style="background-color:#0b3d0b; color:#d4f0c6; border:1px solid #d4f0c6;">
                                    <label for="floatingName" style="color:#d4f0c6;">Item Name</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="description" placeholder="Description"
                                              id="floatingTextarea" style="height: 100px; background-color:#0b3d0b; color:#d4f0c6; border:1px solid #d4f0c6;"
                                              required></textarea>
                                    <label for="floatingTextarea" style="color:#d4f0c6;">Item Description</label>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="categorySelect" name="category"
                                            style="background-color:#0b3d0b; color:#d4f0c6; border:1px solid #d4f0c6;"
                                            aria-label="Category">
                                        <?php foreach ($cat as $c): ?>
                                            <option value="<?= $c['categories'] ?>"><?= $c['categories'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="categorySelect" style="color:#d4f0c6;">Category</label>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="floatingQuantity" name="quantity"
                                           placeholder="Quantity" required
                                           style="background-color:#0b3d0b; color:#d4f0c6; border:1px solid #d4f0c6;">
                                    <label for="floatingQuantity" style="color:#d4f0c6;">Quantity</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingPrize" name="prize"
                                           placeholder="Price" required
                                           style="background-color:#0b3d0b; color:#d4f0c6; border:1px solid #d4f0c6;">
                                    <label for="floatingPrize" style="color:#d4f0c6;">Price</label>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label for="formFile" class="form-label" style="color:#d4f0c6;">Upload Image</label>
                                <input class="form-control" type="file" id="formFile" name="image"
                                       onchange="previewImage()"
                                       style="background-color:#0b3d0b; color:#d4f0c6; border:1px solid #d4f0c6;">
                            </div>
                            <!-- Image Preview -->
                            <div class="col-md-2" id="imagePreviewContainer" style="display: none;">
                                <img id="imagePreview" alt="Image Preview"
                                     style="max-width: 100%; max-height: 200px; border:1px solid #d4f0c6;">
                            </div>
                            <!-- End Image Preview -->
                            <div class="text-center">
                                <input class="btn btn-success" type="submit" value="Save">
                                <a href="/items" class="btn btn-danger">Reset</a>
                            </div>
                        </form><!-- End Floating Labels Form -->
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card" style="background-color:#082a08;">
                    <div class="card-body" style="height: 380px;">
                        <div class="col-md-10 mx-auto">
                            <h5 class="card-title" style="color:#d4f0c6;">Category</h5>
                            <p style="color:#d4f0c6;">Note: click to delete</p>
                            <div class="mb-4">
                                <h6 style="color:#d4f0c6;">Existing Categories:</h6>

                                <?php foreach ($cat as $c): ?>
                                    <span class="badge bg-dark mr-2 mb-2">
                                        <a href="/delcat/<?= $c['id'] ?>" style="color: #d4f0c6; text-decoration: none;">
                                            <?= $c['categories'] ?>
                                        </a>
                                    </span>
                                <?php endforeach; ?>
                            </div>

                            <form method="post" action="addcat" class="mb-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingName" name="newcat"
                                           placeholder="New Category" required
                                           style="background-color:#0b3d0b; color:#d4f0c6; border:1px solid #d4f0c6;">
                                    <label for="floatingName" style="color:#d4f0c6;">Insert New Category</label>
                                </div>
                                <button class="btn btn-success mt-2" type="submit">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->

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
</script>
</body>
</html>
