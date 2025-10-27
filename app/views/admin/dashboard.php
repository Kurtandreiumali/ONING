<!DOCTYPE html>
<html lang="en">

<?php echo include('chop/head.php'); ?>

<body>
  <!-- ======= Header ======= -->
  <?php echo include('chop/header.php'); ?>
  <!-- ======= Sidebar ======= -->
  <?php echo include('chop/aside.php'); ?>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1 class="text-light" style="color:#d4f0c6;">Admin</h1> <!-- Green title -->
    </div>

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <!-- Daily Sales -->
            <div class="col-xxl-4 col-md-12">
              <div class="card info-card sales-card" style="background-color:#0b3d0b; color:white;">
                <div class="card-body">
                  <h5 class="card-title text-light" style="color:#d4f0c6;">Sales <span style="color:#d4f0c6;">| Today</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-white text-success">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6 id="dailySales" style="color:#d4f0c6;">₱<?= number_format($today, 2) ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Daily Sales -->

            <!-- Monthly Sales -->
            <div class="col-xxl-4 col-md-12">
              <div class="card info-card sales-card" style="background-color:#0b3d0b; color:white;">
                <div class="card-body">
                  <h5 class="card-title text-light" style="color:#d4f0c6;">Sales <span style="color:#d4f0c6;">| Monthly</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-white text-success">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6 id="monthlySales" style="color:#d4f0c6;">₱<?= number_format($monthly, 2) ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Monthly Sales -->

            <!-- Overall Sales -->
            <div class="col-xxl-4 col-md-12">
              <div class="card info-card sales-card" style="background-color:#0b3d0b; color:white;">
                <div class="card-body">
                  <h5 class="card-title text-light" style="color:#d4f0c6;">Sales <span style="color:#d4f0c6;">| Overall</span></h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-white text-success">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6 id="overallSales" style="color:#d4f0c6;">₱<?= number_format($overall_sales, 2) ?></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Overall Sales -->

            <!-- Sales Graph -->
            <div class="col-12">
              <div class="card bg-white">
                <div class="card-body">
                  <h5 class="card-title text-success">Sales Overview</h5>
                  <canvas id="salesChart"></canvas>
                </div>
              </div>
            </div>
            <!-- End Sales Graph -->

            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto" style="background-color:#0b3d0b; color:white;">
                <div class="card-body">
                  <h5 class="card-title text-light" style="color:#d4f0c6;">Recent Sales <span style="color:#d4f0c6;">| Today</span></h5>
                  <table class="table table-borderless datatable" style="color:white;">
                    <thead>
                      <tr>
                        <th scope="col" style="color:#d4f0c6;">Id</th>
                        <th scope="col" style="color:#d4f0c6;">Customer</th>
                        <th scope="col" style="color:#d4f0c6;">Product</th>
                        <th scope="col" style="color:#d4f0c6;">Quantity</th>
                        <th scope="col" style="color:#d4f0c6;">Total</th>
                        <th scope="col" style="color:#d4f0c6;">Date and Time</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($purchase_items as $g): ?>
                        <tr>
                          <th scope="row" style="color:#d4f0c6;"><?= $g['purchase_id'] ?></th>
                          <td style="color:#d4f0c6;"><?= $g['Customer'] ?></td>
                          <td style="color:#d4f0c6;"><?= $g['Item_name'] ?></td>
                          <td style="color:#d4f0c6;"><?= $g['quantity'] ?></td>
                          <td style="color:#d4f0c6;">₱<?= $g['total_price'] ?></td>
                          <td style="color:#d4f0c6;"><?= date('M, d Y h:i:sA', strtotime($g['order_at'])) ?></td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- End Recent Sales -->

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto" style="background-color:#0b3d0b; color:white;">
                <div class="card-body pb-0">
                  <h5 class="card-title text-light" style="color:#d4f0c6;">Top 10 Selling Products</h5>
                  <table class="table table-borderless" style="color:white;">
                    <thead>
                      <tr>
                        <th scope="col" style="color:#d4f0c6;">Preview</th>
                        <th scope="col" style="color:#d4f0c6;">Product</th>
                        <th scope="col" style="color:#d4f0c6;">Price</th>
                        <th scope="col" style="color:#d4f0c6;">Sold</th>
                        <th scope="col" style="color:#d4f0c6;">Revenue</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($Topitems as $g): ?>
                        <tr>
                          <th scope="row"><a href="#"><img src="<?= BASE_URL . 'uploads/' . $g['max_image'] ?>" alt=""></a></th>
                          <td style="color:#d4f0c6;"><?= $g['Item_name'] ?></td>
                          <td style="color:#d4f0c6;">₱<?= $g['max_prize'] ?></td>
                          <td class="fw-bold" style="color:#d4f0c6;"><?= $g['total_quantity'] ?></td>
                          <td style="color:#d4f0c6;">₱<?= $g['total_sales'] ?></td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- End Top Selling -->
          </div>
        </div>
        <!-- End Left side columns -->
      </div>
    </section>
  </main>

  <?php echo include('chop/script.php'); ?>

  <!-- Chart.js Script -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const ctx = document.getElementById('salesChart').getContext('2d');
    const salesChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Daily', 'Monthly', 'Overall'],
        datasets: [{
          label: 'Sales (₱)',
          data: [<?= $today ?>, <?= $monthly ?>, <?= $overall_sales ?>],
          backgroundColor: ['#28a745', '#218838', '#1e7e34'], // green shades
          borderColor: ['#1c7430', '#155724', '#0f3d18'],      // darker green borders
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: { position: 'top' }
        },
        scales: {
          y: { beginAtZero: true }
        }
      }
    });
  </script>

</body>

</html>
