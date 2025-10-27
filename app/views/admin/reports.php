<!DOCTYPE html>
<html lang="en">

<?php include('chop/head.php'); ?>

<body>
    <!-- ======= Header ======= -->
    <?php include('chop/header.php'); ?>
    <!-- ======= Sidebar ======= -->
    <?php include('chop/aside.php'); ?>

    <main id="main" class="main" style="background-color:#0b3d0b; color:#d4f0c6;">
        <div class="pagetitle">
            <h1 style="color:#d4f0c6;">Reports</h1> <!-- Light green title -->
        </div>        
        <nav></nav>

        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">
                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card" style="background-color:#082a08; color:#ffffff;">
                                <div class="card-body">
                                    <h5 class="card-title" style="color:#d4f0c6;">Revenue <span style="color:#a8d5a2;">| Today</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color:#0b3d0b; color:#d4f0c6;">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6 style="color:#ffffff; font-weight:bold;">
                                                <?= '₱' . number_format($today, 2) ?>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Weekly Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card" style="background-color:#082a08; color:#ffffff;">
                                <div class="card-body">
                                    <h5 class="card-title" style="color:#d4f0c6;">Revenue <span style="color:#a8d5a2;">| This Week</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color:#0b3d0b; color:#d4f0c6;">
                                            <i class="bi bi-wallet2"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6 style="color:#ffffff; font-weight:bold;">
                                                <?= '₱' . number_format($weekly, 2) ?>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Weekly Revenue Card -->

                        <!-- Monthly Revenue Card -->
                        <div class="col-xxl-4 col-xl-12">
                            <div class="card info-card customers-card" style="background-color:#082a08; color:#ffffff;">
                                <div class="card-body">
                                    <h5 class="card-title" style="color:#d4f0c6;">Revenue <span style="color:#a8d5a2;">| This Month</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color:#0b3d0b; color:#d4f0c6;">
                                            <i class="bi bi-cash-stack"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6 style="color:#ffffff; font-weight:bold;">
                                                <?= '₱' . number_format($monthly, 2) ?>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Monthly Revenue Card -->

                        <!-- Yearly Revenue Card -->
                        <div class="col-xxl-6 col-md-6">
                            <div class="card info-card revenue-card" style="background-color:#082a08; color:#ffffff;">
                                <div class="card-body">
                                    <h5 class="card-title" style="color:#d4f0c6;">Revenue <span style="color:#a8d5a2;">| This Year</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color:#0b3d0b; color:#d4f0c6;">
                                            <i class="bi bi-bar-chart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6 style="color:#ffffff; font-weight:bold;">
                                                <?= '₱' . number_format($yearly, 2) ?>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Yearly Revenue Card -->

                        <!-- Overall Revenue Card -->
                        <div class="col-xxl-6 col-md-6">
                            <div class="card info-card revenue-card" style="background-color:#082a08; color:#ffffff;">
                                <div class="card-body">
                                    <h5 class="card-title" style="color:#d4f0c6;">Revenue <span style="color:#a8d5a2;">| Overall</span></h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color:#0b3d0b; color:#d4f0c6;">
                                            <i class="bi bi-bar-chart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6 style="color:#ffffff; font-weight:bold;">
                                                <?= '₱' . number_format($yearly, 2) ?>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Overall Revenue Card -->

                    </div>

                    <!-- Sales Table -->
                    <div class="card" style="background-color:#082a08; color:#d4f0c6;">
                        <div class="card-body">
                            <h5 class="card-title" style="color:#ffffff;">This Week Sales</h5>

                            <table class="table table-hover table-bordered" style="background-color:#0b3d0b; color:#d4f0c6;">
                                <thead style="background-color:#0b3d0b; color:#d4f0c6;">
                                    <tr>
                                        <th scope="col">Today</th>
                                        <th scope="col">Weekly</th>
                                        <th scope="col">Monthly</th>
                                        <th scope="col">Overall Sales</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="background-color:#082a08; color:#ffffff;">
                                        <td><?= '₱' . number_format($today, 2) ?></td>
                                        <td><?= '₱' . number_format($weekly, 2) ?></td>
                                        <td><?= '₱' . number_format($monthly, 2) ?></td>
                                        <td><?= '₱' . number_format($overall_sales, 2) ?></td>
                                    </tr>
                                </tbody>
                            </table>

                            <form id="downloadForm" method="post" action="/downloadReportsPdf">
                                <input type="hidden" name="today" value="<?= $today ?>">
                                <input type="hidden" name="weekly" value="<?= $weekly ?>">
                                <input type="hidden" name="monthly" value="<?= $monthly ?>">
                                <input type="hidden" name="overall_sales" value="<?= $overall_sales ?>">
                            </form>

                            <!-- Print Button -->
                            <div class="d-grid gap-2 mt-3">
                                <button class="btn" type="button" onclick="printPage()" style="background-color:#0b3d0b; color:#d4f0c6; border:none;">Print Report</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <script>
        function submitForm() {
            document.getElementById("downloadForm").submit();
        }

        function printPage() {
            window.print();
        }
    </script>

    <?php include('chop/script.php'); ?>

</body>
</html>
