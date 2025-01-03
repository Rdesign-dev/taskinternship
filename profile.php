<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
  <main class="my-0 mx-auto min-h-full max-w-[480px]">
    <div class="bg-white shadow-md pb-4">
      <!-- Header -->
      <div class="relative bg-cover bg-center" style="background-image: url('assets/images/bgatas.jpeg'); height: 150px;">
        <div class="absolute top-4 left-4">
          <img src="assets/images/people.png" alt="Profile Picture" class="h-16 w-16 rounded-full border-2 border-white">
        </div>
        <div class="absolute top-4 right-4 text-white">
          <!-- <img src="assets/bgatas" alt="Settings" class="h-6 w-6"> -->
        </div>
      </div>

      <!-- User Info -->
      <div class="text-center mt-2">
        <h2 class="text-lg font-bold">Ahmad Kurosaki</h2>
        <p class="text-sm text-gray-500">Shogun Member</p>
        <p class="mt-2 text-xl font-semibold text-yellow-500">10,000 RyoCoin</p>
      </div>
    </div>

    <!-- Membership Information -->
    <div class="bg-white mt-4 shadow-md rounded-lg">
      <div class="divide-y divide-gray-200">
        <div class="p-4 flex justify-between items-center">
          <a href="benefit-samurai.php" class="flex justify-between items-center w-full">
            <span class="text-gray-800 font-medium">Benefit</span>
            <span class="text-gray-500">></span>
          </a>
        </div>
        <div class="p-4 flex justify-between items-center">
          <span class="text-gray-800 font-medium">Mission</span>
          <span class="text-gray-500">></span>
        </div>
        <div class="p-4 flex justify-between items-center">
          <span class="text-gray-800 font-medium">Referral</span>
          <span class="text-gray-500">></span>
        </div>
        <div class="p-4 flex justify-between items-center">
          <span class="text-gray-800 font-medium">History</span>
          <span class="text-gray-500">></span>
        </div>
      </div>
    </div>

    <!-- General Information -->
    <div class="bg-white mt-4 shadow-md rounded-lg">
      <div class="divide-y divide-gray-200">
        <div class="p-4 flex justify-between items-center">
          <span class="text-gray-800 font-medium">Contact Us</span>
          <span class="text-gray-500">></span>
        </div>
        <div class="p-4 flex justify-between items-center">
          <span class="text-gray-800 font-medium">Term & Conditions</span>
          <span class="text-gray-500">></span>
        </div>
        <div class="p-4 flex justify-between items-center">
          <span class="text-gray-800 font-medium">Privacy Policy</span>
          <span class="text-gray-500">></span>
        </div>
        <div class="p-4 flex justify-between items-center">
          <span class="text-gray-800 font-medium">FAQ</span>
          <span class="text-gray-500">></span>
        </div>
        <div class="p-4 flex justify-between items-center">
          <span class="text-gray-800 font-medium">Send Feedback</span>
          <span class="text-gray-500">></span>
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
