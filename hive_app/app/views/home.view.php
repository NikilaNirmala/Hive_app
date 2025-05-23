<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>HiveEstate - Find Comfort and Luxury</title>
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
      <a href="#" class="text-gray-600 hover:text-purple-600">Agents</a>
      <a href="#" class="text-gray-600 hover:text-purple-600">About</a>
      <?php
      if (isset($_SESSION['username'])) {
        echo '<a href="member_profile" class="text-gray-600 hover:text-purple-600">Profile</a>';
      }
      ?>

    </nav>
    <?php
    if (isset($_SESSION['username'])) {
      echo "<a
      href='logout'
      class='bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700'> Logout
    </a>";
    } else {
      echo "<a
      href='login'
      class='bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700'> Login
    </a>";
    }
    ?>

  </header>

  <!-- Hero Section -->
  <section class="bg-purple-100 py-16 text-center relative">
    <h1 class="text-4xl sm:text-5xl font-bold text-gray-800 mb-4">
      Find Comfort and Luxury
    </h1>
    <p class="text-lg sm:text-xl text-gray-600 mb-6">
      Explore our curated selection of exquisite properties meticulously
      tailored to your needs.
    </p>
    <div class="w-64 h-64 bg-gray-300 mx-auto rounded-lg"></div>
    <!-- Placeholder for house image -->
    <div class="absolute inset-0 flex justify-center items-center">
    </div>
  </section>

  <!-- Search Section -->
  <section class="py-10 sm:py-12 bg-purple-50">
    <div class="max-w-2xl mx-auto px-4 text-center">
      <div class="flex justify-center mb-4">
        <select class="p-2 border border-gray-300 rounded-l bg-white mr-2">
          <option>Property</option>
          <option>Agent</option>
        </select>
        <input
          type="text"
          placeholder="Search"
          class="flex-1 p-2 border border-gray-300 rounded-r bg-white focus:outline-none" />
        <button
          class="bg-purple-600 text-white p-2 rounded-r hover:bg-purple-700">
          Search
        </button>
      </div>
    </div>
  </section>

  <!-- Discover Section -->
  <section class="py-10 sm:py-12">
    <div class="max-w-4xl mx-auto px-4 text-center">
      <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4">
        Discover Where Dreams Live
      </h2>
      <p class="text-gray-600 mb-6">
        Whether it’s a charming cottage, a lavish estate, or our expert team
        supports you at every step, turning your dream property into reality.
      </p>
      <div class="flex justify-center text-gray-600 mb-6">
        <span>8K+ Houses</span><span class="mx-4">6K+ Houses Sold</span><span>2K+ Trusted Agents</span>
      </div>
    </div>
  </section>

  <!-- Why Choose Us Section -->
  <section class="py-10 sm:py-12 bg-purple-50">
    <div class="max-w-4xl mx-auto px-4 text-center">
      <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4">
        Why Choose Us
      </h2>
      <p class="text-gray-600 mb-6">
        Guiding You to the Perfect Property with Trust, and Personalized Care.
      </p>
      <div class="grid grid-cols-1 sm:grid-cols-4 gap-6">
        <div
          class="bg-purple-100 p-6 rounded-lg shadow hover:shadow-lg transition-shadow">
          <div class="w-12 h-12 bg-gray-300 rounded-full mx-auto mb-4"></div>
          <!-- Placeholder for icon -->
          <h3 class="text-lg font-semibold">Expert Guidance</h3>
          <p class="text-gray-600">
            Let our HiveEstate simplify your property journey with trusted
            expertise.
          </p>
        </div>
        <div
          class="bg-purple-100 p-6 rounded-lg shadow hover:shadow-lg transition-shadow">
          <div class="w-12 h-12 bg-gray-300 rounded-full mx-auto mb-4"></div>
          <!-- Placeholder for icon -->
          <h3 class="text-lg font-semibold">Personalized Service</h3>
          <p class="text-gray-600">
            Ensuring a hassle-free and tailored experience to commit security.
          </p>
        </div>
        <div
          class="bg-purple-100 p-6 rounded-lg shadow hover:shadow-lg transition-shadow">
          <div class="w-12 h-12 bg-gray-300 rounded-full mx-auto mb-4"></div>
          <!-- Placeholder for icon -->
          <h3 class="text-lg font-semibold">Unmatched Security</h3>
          <p class="text-gray-600">
            Experience peace of mind with our commitment to unmatched
            security.
          </p>
        </div>
        <div
          class="bg-purple-100 p-6 rounded-lg shadow hover:shadow-lg transition-shadow">
          <div class="w-12 h-12 bg-gray-300 rounded-full mx-auto mb-4"></div>
          <!-- Placeholder for icon -->
          <h3 class="text-lg font-semibold">Exceptional Support</h3>
          <p class="text-gray-600">
            Delivering peace of mind and responsive support and assistance.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Popular Residences Section -->
  <section class="py-10 sm:py-12">
    <div class="max-w-4xl mx-auto px-4 text-center">
      <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4">
        Our Popular Residences
      </h2>
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        <div
          class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition-shadow">
          <img
            src="https://placehold.co/300x200"
            alt="Residence"
            class="w-full h-40 object-cover rounded-t-lg" />
          <h3 class="text-lg font-semibold mt-2">
            San Francisco, California
          </h3>
          <p class="text-gray-600">$2,500,000</p>
          <button
            class="bg-purple-600 text-white px-4 py-2 mt-2 rounded hover:bg-purple-700">
            Sign Up
          </button>
        </div>
        <div
          class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition-shadow">
          <img
            src="https://placehold.co/300x200"
            alt="Residence"
            class="w-full h-40 object-cover rounded-t-lg" />
          <h3 class="text-lg font-semibold mt-2">
            Beverly Hills, California
          </h3>
          <p class="text-gray-600">$1,800,000</p>
          <button
            class="bg-purple-600 text-white px-4 py-2 mt-2 rounded hover:bg-purple-700">
            Sign Up
          </button>
        </div>
        <div
          class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition-shadow">
          <img
            src="https://placehold.co/300x200"
            alt="Residence"
            class="w-full h-40 object-cover rounded-t-lg" />
          <h3 class="text-lg font-semibold mt-2">Palo Alto, California</h3>
          <p class="text-gray-600">$3,700,000</p>
          <button
            class="bg-purple-600 text-white px-4 py-2 mt-2 rounded hover:bg-purple-700">
            Sign Up
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="py-10 sm:py-12 bg-purple-50">
    <div class="max-w-4xl mx-auto px-4 text-center">
      <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4">
        What People Say About HiveEstate
      </h2>
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        <div
          class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition-shadow">
          <img
            src="https://placehold.co/100x100"
            alt="Testimonial"
            class="w-16 h-16 object-cover rounded-full mx-auto mb-2" />
          <h3 class="text-lg font-semibold">Sarah Nguyen</h3>
          <p class="text-gray-600">
            HiveEstate went above and beyond. Their team made the property
            search in the Bay Area their perfect place with attention to
            detail that set them apart.
          </p>
          <div class="flex justify-center mt-2">
            <span class="text-yellow-400">★</span><span class="text-yellow-400">★</span><span class="text-yellow-400">★</span><span class="text-yellow-400">★</span><span class="text-yellow-400">★</span>
          </div>
        </div>
        <div
          class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition-shadow">
          <img
            src="https://placehold.co/100x100"
            alt="Testimonial"
            class="w-16 h-16 object-cover rounded-full mx-auto mb-2" />
          <h3 class="text-lg font-semibold">Michael Rodriguez</h3>
          <p class="text-gray-600">
            I had an amazing experience with HiveEstate. Highly recommend for
            anyone looking for personalized property in no time.
          </p>
          <div class="flex justify-center mt-2">
            <span class="text-yellow-400">★</span><span class="text-yellow-400">★</span><span class="text-yellow-400">★</span><span class="text-yellow-400">★</span><span class="text-yellow-400">★</span>
          </div>
        </div>
        <div
          class="bg-white p-4 rounded-lg shadow hover:shadow-lg transition-shadow">
          <img
            src="https://placehold.co/100x100"
            alt="Testimonial"
            class="w-16 h-16 object-cover rounded-full mx-auto mb-2" />
          <h3 class="text-lg font-semibold">Emily Johnson</h3>
          <p class="text-gray-600">
            HiveEstate turned my dream of owning an incredible support guided
            me with my new home.
          </p>
          <div class="flex justify-center mt-2">
            <span class="text-yellow-400">★</span><span class="text-yellow-400">★</span><span class="text-yellow-400">★</span><span class="text-yellow-400">★</span><span class="text-yellow-400">★</span>
          </div>
        </div>
      </div>
      <div class="flex justify-center mt-6">
        <button class="bg-gray-300 text-gray-600 px-2 py-1 rounded-l mr-1">
          ←
        </button>
        <button class="bg-gray-300 text-gray-600 px-2 py-1 rounded-r">
          →
        </button>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="py-10 sm:py-12 text-center bg-purple-50">
    <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4">
      Do You Have Any Questions?
    </h2>
    <p class="text-lg sm:text-xl text-gray-600 mb-6">Get Help From Us</p>
    <div
      class="flex flex-col sm:flex-row justify-center gap-4 max-w-xl mx-auto">
      <input
        type="email"
        placeholder="Enter your email address..."
        class="border border-gray-300 rounded p-2 sm:p-3 w-full sm:w-2/3 focus:outline-none" />
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
      <span class="text-2xl">👥</span>
      <span class="text-xs">Agents</span>
    </a>
    <?php
    if (isset($_SESSION['username'])) {
      echo '<a
      href="#"
      class="flex flex-col items-center text-gray-600 hover:text-purple-600">
      <span class="text-2xl">👤</span>
      <span class="text-xs">Profile</span>
    </a>';
    }
    ?>

  </nav>
</body>

</html>