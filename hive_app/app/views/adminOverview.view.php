<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>HiveEstate - Dashboard</title>
</head>

<body class="bg-white text-zinc-800 font-sans">
  <!-- Header -->
  <header
    class="bg-purple-100 p-4 flex justify-between items-center sticky top-0 z-10">
    <div class="flex items-center space-x-2">
      <img
        src="https://placehold.co/30x30"
        alt="HiveEstate Logo"
        class="h-6" />
      <span class="text-xl font-bold">HiveEstate</span>
    </div>
    <nav class="space-x-4 hidden md:block">
      <a href="#" class="text-gray-600 hover:text-purple-600">Home</a>
      <a href="#" class="text-gray-600 hover:text-purple-600">Property</a>
      <a href="#" class="text-gray-600 hover:text-purple-600">Services</a>
      <a href="#" class="text-gray-600 hover:text-purple-600">Wanted</a>
      <a href="#" class="text-gray-600 hover:text-purple-600">Agents</a>
      <a href="#" class="text-gray-600 hover:text-purple-600">About</a>
    </nav>
    <a
      href="#"
      class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">Sign Up</a>
  </header>

  <!-- Main Content -->
  <main class="bg-purple-100 py-10 sm:py-12">
    <div class="max-w-4xl mx-auto px-4">
      <!-- White Rounded Square Wrapper -->
      <div class="bg-white rounded-lg shadow-md p-6">
        <!-- User Profile Section -->
        <div class="text-center mb-8">
          <img
            src="https://placehold.co/60x60"
            alt="Emily Johnson"
            class="h-24 w-24 rounded-full mx-auto mb-4" />
          <div>
            <h1 class="text-xl sm:text-2xl font-bold text-gray-800">
              Emily Johnson
            </h1>
            <p class="text-gray-600">HiveAdmin</p>
            <button
              class="mt-2 bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">
              Log out
            </button>
          </div>
        </div>

        <!-- Navigation Tabs -->
        <div class="flex justify-center space-x-4 mb-8">
          <button
            class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">
            Overview
          </button>
          <button
            class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">
            Members
          </button>
          <button
            class="bg-gray-200 text-gray-600 px-4 py-2 rounded hover:bg-gray-300">
            Ads
          </button>
        </div>

        <!-- Dashboard Stats -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4">
          <!-- HiveAgents -->
          <div class="bg-white p-4 rounded-lg shadow-md text-center">
            <svg
              class="w-8 h-8 mx-auto mb-2"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
            </svg>
            <p class="text-gray-600">HiveAgents</p>
            <p class="text-2xl font-bold text-gray-800"><?= $_SESSION['agent_count'] ?></p>
          </div>

          <!-- HiveMembers -->
          <div class="bg-white p-4 rounded-lg shadow-md text-center">
            <svg
              class="w-8 h-8 mx-auto mb-2"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7v-2a3 3 0 005.356-1.857M17 20v2M7 20v2M7 20H2v-2a3 3 0 013.856-2.857M7 20H7m10 0h0m-5-6a4 4 0 110-8 4 4 0 010 8z"></path>
            </svg>
            <p class="text-gray-600">HiveMembers</p>
            <p class="text-2xl font-bold text-gray-800"><?= $_SESSION['member_count'] ?></p>
          </div>

          <!-- HiveAdmins -->
          <div class="bg-white p-4 rounded-lg shadow-md text-center">
            <svg
              class="w-8 h-8 mx-auto mb-2"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M5.121 19.071a2 2 0 01-2.828 0 2 2 0 010-2.828l2.829-2.829a6.5 6.5 0 019.378 0l2.829 2.829a2 2 0 010 2.828 2 2 0 01-2.828 0l-2.829-2.829a6.5 6.5 0 00-9.378 0l-2.829 2.829zM12 8a4 4 0 110-8 4 4 0 010 8z"></path>
            </svg>
            <p class="text-gray-600">HiveAdmins</p>
            <p class="text-2xl font-bold text-gray-800"><?= $_SESSION['admin_count'] ?></p>
          </div>

          <!-- Market Ads -->
          <div class="bg-white p-4 rounded-lg shadow-md text-center">
            <svg
              class="w-8 h-8 mx-auto mb-2"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a2 2 0 012-2h2a2 2 0 012 2v5m-4-9v1m0 4v1"></path>
            </svg>
            <p class="text-gray-600">Market Ads</p>
            <p class="text-2xl font-bold text-gray-800"><?= $_SESSION['property_count'] ?></p>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-purple-100 py-6 sm:py-10 text-center sm:text-left">
    <div
      class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 px-4">
      <div>
        <div class="flex items-center space-x-2 mb-2">
          <img
            src="https://placehold.co/30x30"
            alt="HiveEstate Logo"
            class="h-6" />
          <span class="text-xl font-bold">HiveEstate</span>
        </div>
        <p class="text-gray-600">
          Bringing you closer to your dream home, one click at a time.
        </p>
      </div>
      <div>
        <h3 class="text-lg font-bold">About</h3>
        <ul class="mt-2 space-y-2">
          <li>
            <a href="#" class="text-gray-600 hover:text-purple-600">Our Story</a>
          </li>
          <li>
            <a href="#" class="text-gray-600 hover:text-purple-600">Careers</a>
          </li>
          <li>
            <a href="#" class="text-gray-600 hover:text-purple-600">Resources</a>
          </li>
        </ul>
      </div>
      <div>
        <h3 class="text-lg font-bold">Support</h3>
        <ul class="mt-2 space-y-2">
          <li>
            <a href="#" class="text-gray-600 hover:text-purple-600">Contact Us</a>
          </li>
          <li>
            <a href="#" class="text-gray-600 hover:text-purple-600">Terms of Service</a>
          </li>
        </ul>
      </div>
      <div>
        <h3 class="text-lg font-bold">Our Social</h3>
        <ul class="mt-2 space-y-2">
          <li>
            <a
              href="#"
              class="text-gray-600 hover:text-purple-600 flex items-center">
              <img
                src="https://placehold.co/20x20"
                alt="Instagram"
                class="mr-2" />
              Instagram
            </a>
          </li>
          <li>
            <a
              href="#"
              class="text-gray-600 hover:text-purple-600 flex items-center">
              <img
                src="https://placehold.co/20x20"
                alt="Facebook"
                class="mr-2" />
              Facebook
            </a>
          </li>
          <li>
            <a
              href="#"
              class="text-gray-600 hover:text-purple-600 flex items-center">
              <img
                src="https://placehold.co/20x20"
                alt="Twitter"
                class="mr-2" />
              Twitter (X)
            </a>
          </li>
        </ul>
      </div>
    </div>
  </footer>

  <!-- Bottom Navigation Menu (Mobile Only) -->
  <nav
    class="fixed bottom-0 left-0 w-full bg-purple-100 border-t border-gray-200 flex justify-around items-center py-3 md:hidden z-20">
    <a
      href="#"
      class="flex flex-col items-center text-gray-600 hover:text-purple-600">
      <span class="text-2xl">🏠</span>
      <span class="text-xs">Home</span>
    </a>
    <a
      href="#"
      class="flex flex-col items-center text-gray-600 hover:text-purple-600">
      <span class="text-2xl">🏢</span>
      <span class="text-xs">Property</span>
    </a>
    <a
      href="#"
      class="flex flex-col items-center text-gray-600 hover:text-purple-600">
      <span class="text-2xl">⚙️</span>
      <span class="text-xs">Services</span>
    </a>
    <a
      href="#"
      class="flex flex-col items-center text-gray-600 hover:text-purple-600">
      <span class="text-2xl">📋</span>
      <span class="text-xs">Wanted</span>
    </a>
    <a
      href="#"
      class="flex flex-col items-center text-gray-600 hover:text-purple-600">
      <span class="text-2xl">👤</span>
      <span class="text-xs">Agents</span>
    </a>
  </nav>
</body>

</html>