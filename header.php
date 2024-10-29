<!DOCTYPE html>
<html lang="en">
<head>
	<title>Meat Heroes</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="language" content="English" />
    <meta name="allow-search" content="yes" />
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<?php wp_head(); ?>
    <!-- <?php include('includes/loader.php'); ?> -->
</head>
<body>
	<!-- <nav id="" class="bg-white py-2 px-6 w-full z-50 shadow-md" @click.away="mobile = false" x-data="{ mobile: false }">
		<div class="flex justify-between">
			<div class="flex mr-8">
				<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" class="max-w-4 logo"></a>
			</div>

			<div class="hidden md:flex w-full">
				<a href="/shop" class="hover:text-action font-extrabold text-lg flex text-right items-center h-full px-2">Shop</a>

				<div @click.away="open = false" class="hover:text-action relative" x-data="{ open: false }">
					<button @click="open = !open" class="hover:text-action text-xs text-md flex items-center h-full px-2 font-semibold">
						<span class="hover:text-action font-extrabold text-lg flex text-right items-center h-full px-1">Blogs</span>
						<svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 transition-transform duration-200 transform">
							<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
						</svg>
					</button>
					<div x-cloak x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-50">
						<div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800 z-50">
							<a href="/partners" class="text-xs text-md block px-1 py-2 mt-2 font-semibold text-left hover:bg-action hover:text-white rounded transition duration-500 ease-in-out whitespace-nowrap">Lifestyle</a>
							<a href="/clients" class="text-xs text-md block px-1 py-2 mt-2 font-semibold text-left hover:bg-action hover:text-white rounded transition duration-500 ease-in-out whitespace-nowrap">Egg Facts</a>
							<a href="/clients" class="text-xs text-md block px-1 py-2 mt-2 font-semibold text-left hover:bg-action hover:text-white rounded transition duration-500 ease-in-out whitespace-nowrap">Recipes</a>
						</div>
					</div>
				</div>

				<div @click.away="open = false" class="hover:text-action relative" x-data="{ open: false }">
					<button @click="open = !open" class="hover:text-action text-xs text-md flex items-center h-full px-2 font-semibold">
						<span class="hover:text-action font-extrabold text-lg flex text-right items-center h-full px-1">Why Choose Us?</span>
						<svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 transition-transform duration-200 transform">
							<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
						</svg>
					</button>
					<div x-cloak x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-50">
						<div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800 z-50">
							<a href="/partners" class="text-xs text-md block px-1 py-2 mt-2 font-semibold text-left hover:bg-action hover:text-white rounded transition duration-500 ease-in-out whitespace-nowrap">OUR PARTNERS</a>
							<a href="/clients" class="text-xs text-md block px-1 py-2 mt-2 font-semibold text-left hover:bg-action hover:text-white rounded transition duration-500 ease-in-out whitespace-nowrap">OUR CLIENTS</a>
						</div>
					</div>
				</div>
				
				<a href="/shop" class="hover:text-action font-extrabold text-lg flex text-right items-center h-full px-2">About Us</a>	
			</div>
			<div class="md:hidden flex">
				<button class="outline-none mobile-menu-button">
					<svg class="w-6 h-6 text-gray-500 hover:text-primary mx-auto"  
					@click="mobile = !mobile"
					fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
						<path d="M4 6h16M4 12h16M4 18h16"></path>
					</svg>
				</button>
			</div>
		</div>
		<div x-cloak class="mobile-menu" :class="{ 'hidden' : !mobile}">
			<a href="/" class="text-xs md:text-lg xl:text-xl flex items-center h-full px-2 text-gray-500 font-semibold py-2 md:py-3 hover:bg-slate-100">Home</a>
			<a href="/about" class="text-xs md:text-lg xl:text-xl flex items-center h-full px-2 text-gray-500 font-semibold py-2 md:py-3 hover:bg-slate-100">About Us</a>
			<a href="/services" class="text-xs md:text-lg xl:text-xl flex items-center h-full px-2 text-gray-500 font-semibold py-2 md:py-3 hover:bg-slate-100">Services</a>
			<div @click.away="open = false" class="relative" x-data="{ open: false }">
				<button @click="open = !open" class="text-xs md:text-lg xl:text-xl flex items-center h-full px-2 text-gray-500 font-semibold py-2 md:py-3">
					<span class=">Our Associations</span>
					<svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 transition-transform duration-200 transform">
						<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
					</svg>
				</button>
				<div x-cloak x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-50">
					<div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800 z-50">
						<a class="text-xs md:text-lg xl:text-xl block px-1 py-2 mt-2 text-gray-500 text-left hover:bg-action hover:text-white rounded transition duration-500 ease-in-out whitespace-nowrap" href="/partners">OUR PARTNERS</a>
						<a class="text-xs md:text-lg xl:text-xl block px-1 py-2 mt-2 text-gray-500 text-left hover:bg-action hover:text-white rounded transition duration-500 ease-in-out whitespace-nowrap" href="/clients">OUR CLIENTS</a>
					</div>
				</div>
			</div>
			<a href="/case-studies" class="text-xs md:text-lg xl:text-xl flex items-center h-full px-2 text-gray-500 font-semibold py-2 md:py-3 hover:bg-slate-100">Case studies</a>
			<a href="/news" class="text-xs md:text-lg xl:text-xl flex items-center h-full px-2 text-gray-500 font-semibold py-2 md:py-3 hover:bg-slate-100">News</a>
			<a href="/career" class="text-xs md:text-lg xl:text-xl flex items-center h-full px-2 text-gray-500 font-semibold py-2 md:py-3 hover:bg-slate-100">Career</a>
			<a href="/contact" class="text-xs md:text-lg xl:text-xl flex items-center h-full px-2 text-gray-500 font-semibold py-2 md:py-3 hover:bg-slate-100">Contact Us</a>
		</div>
	</nav> -->

	<header class="border-b border-gray-200">
		<!-- Announcement Bar -->
		<div class="bg-[#BB3C29]">
			<div class="px-10 text-white py-2 font-bold flex justify-center md:justify-between items-center">
				<!-- Social Media Icons (Aligned Left) -->
				<div class="hidden md:flex space-x-4 text-white mr-auto pl-4">
					<a href="#"><i class="fab fa-facebook fa-lg hover:text-gray-300 text-md"></i></a>
					<a href="#"><i class="fab fa-instagram fa-lg hover:text-gray-300 text-md"></i></a>
					<a href="#"><i class="fab fa-youtube fa-lg hover:text-gray-300 text-md"></i></a>
					<a href="#"><i class="fab fa-twitter fa-lg hover:text-gray-300 text-md"></i></a>
				</div>
				<!-- Centered Text -->
				<h3 class="text-center text-md">
					Subscribe & Save Now!
				</h3>
			</div>
		</div>


		<!-- Header -->
		<div class="flex justify-between items-center px-10 py-2 shadow-md bg-white">
			<!-- Logo -->
			<div class="flex items-center gap-8">
				<div class="logo">
					<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" class="max-w-4 logo"></a>
				</div>

				<!-- Navigation Links -->
				<nav class="hidden md:flex space-x-6">
					<a href="/shop" class="text-gray-800 hover:text-[#f27c1b] font-extrabold text-xl">Shop</a>
					<a href="/blogs" class="text-gray-800 hover:text-[#f27c1b] font-extrabold text-xl">Blogs</a>
					<a href="/why-choose-us" class="text-gray-800 hover:text-[#f27c1b] font-extrabold text-xl">Why Choose Us?</a>
					<a href="/about-us" class="text-gray-800 hover:text-[#f27c1b] font-extrabold text-xl">About Us</a>
				</nav>
			</div>

			<!-- Header Icons (Search, Account, Cart) -->
			<div class="flex space-x-6 text-gray-800">
				<a href="#"><i class="fas fa-search fa-lg hover:text-[#f27c1b]"></i></a>
				<a href="#"><i class="fas fa-user fa-lg hover:text-[#f27c1b]"></i></a>
				<a href="#"><i class="fas fa-shopping-cart fa-lg hover:text-[#f27c1b]"></i></a>
			</div>
		</div>
	</header>