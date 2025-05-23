<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>HiveEstate - Agent Ads</title>
</head>

<body class="bg-white text-zinc-800 font-sans">
  <!-- Header -->
  <header
    class="bg-purple-100 p-4 flex justify-between items-center sticky top-0 z-10">
    <div class="flex items-center space-x-2">
      <div class="w-6 h-6 bg-gray-300 rounded-full"></div>
      <!-- Placeholder for logo -->
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

  <!-- Ads Section -->
  <section class="bg-purple-100 py-16 text-center">
    <div class="max-w-4xl mx-auto px-4 bg-white p-6 rounded-lg shadow-lg min-w-[60vw] min-h-[600px]">
      <div class="flex flex-col items-center mb-6">
        <img
          src="https://placehold.co/100x100"
          alt="Agent"
          class="w-20 h-20 rounded-full object-cover mb-2" />
        <h2 class="text-xl font-semibold">Emily Johnson</h2>
        <p class="text-gray-600">HiveMember</p>
        <a href="#" class="text-purple-600 hover:text-purple-700 mt-1">Log out</a>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">
        <a
          href="user_profile"
          class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">
          My Profile
        </a>
        <a
          href="my_ads"
          class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">
          Ads
        </a>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        <?php
        if (isset($_SESSION['myAds'])) {
          $myAds = $_SESSION['myAds'];
          foreach ($myAds as $ad) {
            echo "<div
  class='bg-white p-4 rounded-lg shadow hover:shadow-lg transition-shadow'>
  <img
    src='https://placehold.co/300x200'
    alt='Property'
    class='w-full h-40 object-cover rounded-t-lg' />
  <h3 class='text-lg font-semibold mt-2'>{$ad['property_title']}</h3>
  <p class='text-gray-600'>{$ad['property_location']} ,{$ad['property_country']}</p>
  <div class='flex flex-col justify-center text-gray-600 text-sm mt-2'>
    <span>{$ad['measurement']} sq.ft</span>
    <span class= 'text-[1rem] font-bold text-green-600'>Rs: {$ad['property_price']}.00</span>
  </div>
  <div class='flex justify-between mt-2'>
  <form method='post' action='update_property'>
  <button type='submit'  name='product_id' value='{$ad['property_ID']}'
        class='bg-purple-600 text-white px-4 py-1 rounded hover:bg-purple-700'>
        Update
      </button>
  </form>
    
    <form action='delete_property' method='post'>
      <button name='property_ID' value= '{$ad['property_ID']}' type='submit'
        class='bg-red-600 text-white px-4 py-1 rounded hover:bg-red-700'>
        Remove
      </button>
    </form>
  </div>
</div>";
          }
        }
        ?>
      </div>
      <div class="mt-8">
        <a href="add_property" class="bg-purple-600 text-white px-6 py-2 mt-6 rounded hover:bg-purple-700">
          <button>
            + Add
          </button>
        </a>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="py-10 sm:py-12 text-center bg-white">
    <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4">
      Do You Have Any Questions?
    </h2>
    <p class="text-lg sm:text-xl text-gray-600 mb-6">Get Help From Us</p>
    <div
      class="flex flex-col sm:flex-row justify-center gap-4 max-w-xl mx-auto">
      <input
        type="email"
        placeholder="Enter your email address..."
        class="border border-gray-300 rounded p-2 sm:p-3 w-full sm:w-2/3 focus:outline-none bg-purple-50" />
      <button
        class="bg-purple-600 text-white px-4 py-2 sm:px-6 sm:py-3 rounded hover:bg-purple-700">
        Submit
      </button>
    </div>
    <p class="mt-4 text-gray-600">Contact with our support team</p>
  </section>

  <!-- Footer -->
  <footer class="bg-purple-100 py-6 sm:py-10 text-center sm:text-left">
    <div
      class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 px-4">
      <div>
        <div class="w-6 h-6 bg-gray-300 rounded-full mb-2"></div>
        <!-- Placeholder for logo -->
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
              <div class="w-5 h-5 bg-gray-300 rounded mr-2"></div>
              Instagram
            </a>
          </li>
          <li>
            <a
              href="#"
              class="text-gray-600 hover:text-purple-600 flex items-center">
              <div class="w-5 h-5 bg-gray-300 rounded mr-2"></div>
              Facebook
            </a>
          </li>
          <li>
            <a
              href="#"
              class="text-gray-600 hover:text-purple-600 flex items-center">
              <div class="w-5 h-5 bg-gray-300 rounded mr-2"></div>
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