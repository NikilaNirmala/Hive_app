<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>HiveEstate - Sign Up</title>
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
      <a href="#" class="text-gray-600 hover:text-purple-600">Community</a>
      <a href="#" class="text-gray-600 hover:text-purple-600">Agents</a>
      <a href="#" class="text-gray-600 hover:text-purple-600">About</a>
    </nav>
    <a
      href="#"
      class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">Sign Up</a>
  </header>

  <!-- Main Content -->
  <main class="bg-purple-100 py-10 sm:py-12">
    <div class="max-w-md mx-auto px-4">
      <!-- White Rounded Square Wrapper -->
      <div class="bg-white rounded-lg shadow-md p-6">
        <!-- Sign Up Header -->
        <div class="text-center mb-8">
          <h1 class="text-xl font-bold text-gray-800">Sign Up</h1>
          <div class="flex justify-center mt-4">
            <img
              src="https://placehold.co/30x30"
              alt="HiveEstate Logo"
              class="h-8" />
          </div>

          <?php
          if (isset($_SESSION['Message'])) {
            echo "<p class='mt-4 text-red-600'>{$_SESSION['Message']}</p>";
            $_SESSION['Message'] = null;
            header("refresh:4");
          };
          ?>

        </div>

        <!-- Sign Up Form -->
        <form class="space-y-4" action='signup' method='post'>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Username</label>
            <input required
              type="text"
              name="username"
              placeholder="Enter username"
              class="w-full p-3 border border-gray-300 rounded bg-purple-50 focus:outline-none" />
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input required
              name="email"
              type="email"
              placeholder="Enter email"
              class="w-full p-3 border border-gray-300 rounded bg-purple-50 focus:outline-none" />
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Role</label>
            <select name="role"
              class="w-full p-3 border border-gray-300 rounded bg-purple-50 focus:outline-none">
              <option value="member">Member</option>
              <option value="agent">Agent</option>
              <option value="admin">Admin</option>
            </select>
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input required
              type="password"
              name="password"
              placeholder="Password"
              class="w-full p-3 border border-gray-300 rounded bg-purple-50 focus:outline-none" />
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
            <input required
              type="password"
              name="cpassword"
              placeholder="Confirm password"
              class="w-full p-3 border border-gray-300 rounded bg-purple-50 focus:outline-none" />
          </div>
          <div class="flex items-center">
            <input
              type="checkbox"
              class="form-checkbox text-purple-600 mr-2" />
            <label class="text-sm text-gray-700">Remember me</label>
          </div>
          <button type="submit"
            class="w-full bg-purple-600 text-white px-4 py-3 rounded hover:bg-purple-700">
            Sign Up
          </button>
        </form>
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
          Find your perfect place, without leaving yours.
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
      <span class="text-2xl">👥</span>
      <span class="text-xs">Agents</span>
    </a>
    <a
      href="#"
      class="flex flex-col items-center text-gray-600 hover:text-purple-600">
      <span class="text-2xl">👤</span>
      <span class="text-xs">Profile</span>
    </a>
  </nav>
</body>

</html>