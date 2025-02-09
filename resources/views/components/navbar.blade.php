<div class="mx-auto w-full navbar lg:px-28 fixed  bg-[#f5f7fa]">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-5 w-5"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </div>
      <ul
        tabindex="0"
        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
        
            <li><a>#Home</a></li>
            <li><a>Service</a></li>
            <li><a>Feature</a></li>
            <li><a>Product</a></li>
            <li><a>Testimonial</a></li>
            <li><a>FAQ</a></li>
      </ul>
    </div>
        <!-- Bagian Gambar -->
        <div class="flex gap-1 ">
            <img src="{{ asset('assets/images/icon.png') }}" alt="icon">
            <h1 class="text-xl font-semibold">Nextcent</h1>
        </div>
  </div>
  <div class="navbar-center hidden lg:flex font-normal">
    <ul class="menu menu-horizontal px-1 text-lg">
      <li><a href="#home">Home</a></li>
      <li><a href="#service">Service</a></li>
      <li><a href="#feature">Feature</a></li>
      <li><a href="#product">Product</a></li>
      <li><a href="#testimonial">Testimonial</a></li>
      <li><a href="#faq">FAQ</a></li>
      </ul>
  </div>
  <div class="navbar-end md:flex  gap-2  ">
    <x-button title="Sign Up" color="bg-white" textcolor="text-[#4caf4f]" hovercolor="hover:bg-[#4caf4f]" hovertextcolor="hover:text-white " padding="p-2"/>
    <x-button title="Login" color="bg-[#4caf4f]" textcolor="text-white" hovercolor="hover:bg-white" hovertextcolor="hover:text-black" padding="p-2 px-4"/>
  </div>
</div>