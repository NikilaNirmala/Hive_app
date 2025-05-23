<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>HiveEstate - User List</title>
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

        <!-- User List Table -->
        <div class="overflow-x-auto min-h-[350px]">
          <table class="w-full text-left border-collapse">
            <thead>
              <tr class="bg-purple-50">
                <th class="p-2">Name</th>
                <th class="p-2">Role</th>
                <th class="p-2">Email</th>
                <th class="p-2">Contact</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if (isset($_SESSION['user_info'])) {
                foreach ($_SESSION['user_info'] as $user) {
                  echo "<tr class='border-b'>
  <td class='p-2 flex items-center'>
    <span>{$user['username']}</span>
  </td>
  <td class='p-2'>{$user['user_role']}</td>
  <td class='p-2'>{$user['user_email']}</td>
";
                  if ($user['user_status'] == 'active') {
                    echo "<td class='p-2'>
    <form action='block_user' method='post'>
      <button type='submit' name='uid' value='{$user['user_ID']}'
        class='bg-red-500 text-white px-2 py-1 rounded hover:bg-gray-300'>
        Block
      </button>
    </form>
  </td>
</tr>";
                  } else {
                    echo "<td class='p-2'>
    <form action='unblock_user' method='post'>
      <button type='submit' name='uid' value='{$user['user_ID']}'
        class='bg-green-500 text-white px-2 py-1 rounded hover:bg-gray-300'>
        Unblock
      </button>
    </form>
  </td>
</tr>";
                  }
                }
              }
              ?>
            </tbody>
          </table>
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