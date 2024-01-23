<div class="container">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Charts -->
        <div class="container">
  <div class="jumbotron m-3">
    <h1 class="display-4">Dashboard</h1>
    <hr class="my-4">

    <!-- Laporan Laba-Rugi -->
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Laporan Laba-Rugi
    </h2>

    <div class="row row-cols-1 row-cols-md-4 g-4">
      <?php foreach ($data["analytic"] as $analytic) : ?>
        <div class="col">
          <div class="p-4 bg-white rounded-lg shadow">
            <h4 class="mb-4 font-weight-bold text-gray-800">
              <?= $analytic['NamaBarang'] ?>
            </h4>
            <p class="text-sm">Total Penjualan</p>
            <p class="text-sm text-success">+ Rp<?= number_format($analytic['TotalPenjualan'], 0, ',', '.') ?></p>

            <p class="text-sm mt-2">Total Pembelian</p>
            <p class="text-sm text-danger">- Rp<?= number_format($analytic['TotalPembelian'], 0, ',', '.') ?></p>

            <?php if ($analytic["Status"] == "Untung"): ?>
              <p class="text-xs text-center p-2 bg-success mt-3 font-weight-bold text-white">Untung Rp<?= number_format($analytic['Selisih'], 0, ',', '.') ?></p>
            <?php else: ?>
              <p class="text-xs text-center p-2 bg-danger mt-3 font-weight-bold text-white">Rugi Rp<?= number_format(abs($analytic['Selisih']), 0, ',', '.') ?></p>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div> 
  </div>
</div>
