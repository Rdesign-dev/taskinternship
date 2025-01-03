<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <main class="my-0 mx-auto min-h-full max-w-[480px] border border-slate-300">
    <div class="my-0 mx-auto min-h-screen overflow-x-hidden bg-white">

      <!-- Header Section -->
      <div class="relative">
        <img src="assets/images/bgatas.jpeg" alt="Shogun" class="w-full h-auto">
        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-4 text-white">
          <h1 class="text-lg font-semibold">SHOGUN</h1>
          <p class="text-sm">Pasar Modern BSD</p>
          <p class="text-sm">Rp 10.000/pt</p>
        </div>
      </div>

      <!-- Promo This Week -->
      <div class="mt-6 px-4">
        <h2 class="mb-4 text-lg font-semibold">Promo This Week</h2>
        <div class="grid grid-cols-3 gap-4">
          <img src="assets/images/images.png" alt="Promo 1" class="object-cover rounded-lg">
          <img src="assets/images/images.png" alt="Promo 1" class="object-cover rounded-lg">
          <img src="assets/images/images.png" alt="Promo 1" class="object-cover rounded-lg">
        </div>
      </div>

      <!-- Explore Our Brand -->
      <div class="mt-6 px-4">
        <h2 class="mb-4 text-lg font-semibold">Explore Our Brand</h2>
        <div class="grid grid-cols-3 gap-4">
          <img src="assets/images/images.png" alt="Brand 1" class="object-cover rounded-lg">
          <img src="assets/images/images.png" alt="Brand 2" class="object-cover rounded-lg">
          <img src="assets/images/images.png" alt="Brand 3" class="object-cover rounded-lg">
        </div>
      </div>

      <!-- Reward Section -->
      <div class="mt-6 px-4">
        <h2 class="mb-4 text-lg font-semibold">Reward</h2>
        <div class="grid grid-cols-4 gap-4">
          <div class="flex flex-col items-center">
            <img src="assets/images/images.png" alt="Reward 1" class="object-cover rounded-lg w-full">
            <p class="mt-2 text-sm text-center">Diskon Menu Karage</p>
            <p class="text-yellow-500">120 point</p>
          </div>
          <div class="flex flex-col items-center">
            <img src="assets/images/images.png" alt="Reward 2" class="object-cover rounded-lg w-full">
            <p class="mt-2 text-sm text-center">Diskon Menu Meltique Bowl</p>
            <p class="text-yellow-500">120 point</p>
          </div>
          <div class="flex flex-col items-center">
            <img src="assets/images/images.png" alt="Reward 2" class="object-cover rounded-lg w-full">
            <p class="mt-2 text-sm text-center">Diskon 50% karaage</p>
            <p class="text-yellow-500">50 point</p>
          </div>
          <div class="flex flex-col items-center">
            <img src="assets/images/images.png" alt="Reward 2" class="object-cover rounded-lg w-full">
            <p class="mt-2 text-sm text-center">diskon 70 % dakgilbi</p>
            <p class="text-yellow-500">60 point</p>
          </div>
        </div>
      </div>

      <!-- News & Event Section -->
      <div class="px-4 py-8">
        <h2 class="mb-4 text-lg font-semibold">News & Event</h2>
        <div class="flex overflow-x-auto space-x-4 pb-4">
          <div class="flex-none w-64">
            <img src="assets/images/images169.png" alt="News 1" class="w-full h-40 object-cover rounded-lg">
            <p class="mt-2 text-sm">Deskripsi berita</p>
          </div>
          <div class="flex-none w-64">
            <img src="assets/images/images169.png" alt="News 2" class="w-full h-40 object-cover rounded-lg">
            <p class="mt-2 text-sm">Deskripsi berita</p>
          </div>
          <div class="flex-none w-64">
            <img src="assets/images/images169.png" alt="News 3" class="w-full h-40 object-cover rounded-lg">
            <p class="mt-2 text-sm">Deskripsi berita</p>
          </div>
        </div>
      </div>
    </div>

      <!-- Navigation Bar -->
      <?php
        include("footer.php");
      ?>
  </main>
</body>
</html>
