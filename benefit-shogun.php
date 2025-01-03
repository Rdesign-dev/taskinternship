<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <main class="my-0 mx-auto min-h-full max-w-[480px] border border-slate-300">
    <!-- Header -->
    <div class="bg-white shadow-md pb-4">
      <div class="text-center p-4">
        <h1 class="text-2xl font-bold">BENEFIT</h1>
        <p class="text-sm text-gray-600 mt-2">
          Banyak keuntungan buat kamu sebagai Teras Heroes berdasarkan level dan peringkat kamu.
        </p>
      </div>
    </div>

    <!-- Tabs -->
    <div class="bg-white shadow-md mt-4">
      <div id="tabs" class="flex justify-center space-x-4 border-b border-gray-200">
        <a href="benefit-samurai.php" class="text-gray-500 px-4 py-2">Daimyo</a>
        <a href="benefit-daimyo.php" class="text-gray-500 px-4 py-2">Daimyo</a>
        <a href="benefit-shogun.php" class="text-gray-500 text-orange-500 font-bold px-4 py-2">Shogun</a>
      </div>

      <!-- Tab Content -->
      <div id="tab-content" class="p-4">
        <!-- Samurai Content -->
        <div class="tab-panel samurai">
          <ul class="list-disc ml-6 text-gray-700">
            <li>Diskon 50% untuk menu kedua setiap hari Jumat</li>
            <li>Voucher belanja gratis setelah mencapai 100 Ryo Koin</li>
            <li>Dapatkan menu limited edition hanya untuk member premium</li>
            <li>Keuntungan prioritas antrean di semua outlet Teras Japan</li>
            <li>Diskon spesial untuk pembelian menu family set</li>
            <li>Kesempatan memenangkan undian liburan eksklusif bersama Teras Japan</li>
          </ul>
        </div>

        <!-- Daimyo Content -->
        <div class="tab-panel daimyo hidden">
          <ul class="list-disc ml-6 text-gray-700">
          <li>Mendapatkan welcome voucher Teras Japan paket makan khusus member baru</li>
            <li>Mendapatkan 1 Ryo Koin setiap belanja minimum IDR 10.000 dan berlaku kelipatan</li>
            <li>Free 1 cup drink each Monday for dine in Teras Japan Outlet</li>
            <li>Selesaikan misi yang tersedia dan dapatkan reward yang bisa ditukar</li>
            <li>Exclusive promo dan diskon khusus untuk member yang sudah terdaftar</li>
            <li>Mendapatkan diskon khusus di hari ulang tahun yang sudah terdaftar sebagai member</li>
        </div>

        <!-- Shogun Content -->
        <div class="tab-panel shogun hidden">
          <ul class="list-disc ml-6 text-gray-700">
          <li>Mendapatkan welcome voucher Teras Japan paket makan khusus member baru</li>
            <li>Mendapatkan 1 Ryo Koin setiap belanja minimum IDR 10.000 dan berlaku kelipatan</li>
            <li>Free 1 cup drink each Monday for dine in Teras Japan Outlet</li>
            <li>Selesaikan misi yang tersedia dan dapatkan reward yang bisa ditukar</li>
            <li>Exclusive promo dan diskon khusus untuk member yang sudah terdaftar</li>
            <li>Mendapatkan diskon khusus di hari ulang tahun yang sudah terdaftar sebagai member</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Bottom Navigation -->
    <?php
        include("footer.php");
      ?>
  </main>

</body>
</html>
