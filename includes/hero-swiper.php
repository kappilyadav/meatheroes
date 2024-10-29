<style>
    .swiper-container {
        width: 100%;
        height: 400px; /* Set the height for your slides */
    }

    .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%; /* Ensures the slide takes up full height */
    }

    .bg-cover {
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 100%; /* Make sure the background image covers the full slide */
    }

    .swiper-pagination {
        display: flex;
        justify-content: center; /* Center the pagination */
        gap: 14px; /* Adjust this value for more or less gap */
    }

    .swiper-pagination-bullet {
        width: 12px; /* Adjust the width of the bullet */
        height: 12px; /* Adjust the height of the bullet */
        background-color: #ddd; /* Default bullet color */
        opacity: 1; /* Make sure the opacity is set */
        transition: background-color 0.3s; /* Transition for hover effect */
    }

    .swiper-pagination-bullet-active {
        background-color: #BB3C29; /* Color for the active bullet */
    }

    /* Navigation button styles */
    .swiper-button-next, .swiper-button-prev {
        color: #fff; /* Change the color of the buttons */
        background-color: rgba(0, 0, 0, 0.5); /* Background for better visibility */
        border-radius: 50%; /* Make buttons circular */
        width: 40px; /* Button width */
        height: 40px; /* Button height */
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 10; /* Ensure buttons are on top */
    }

    .swiper-button-next {
        right: 10px; /* Position it to the right */
    }

    .swiper-button-prev {
        left: 10px; /* Position it to the left */
    }
</style>

<?php
$swip = [
    ["img" => "banner.webp"],
    ["img" => "banner.webp"],
    ["img" => "banner.webp"],
];
?>
<div class="relative h-[350px] mb-10">
    <section x-data="{ swiper: null }" x-init="swiper = new Swiper($refs.container, { 
        loop: true, 
        slidesPerView: 1, 
        effect: 'slide',
        autoplay: { 
            delay: 3000, 
            disableOnInteraction: false 
        }, 
        pagination: { 
            el: '.swiper-pagination', 
            clickable: true 
        },
        navigation: { 
            nextEl: '.swiper-button-next', 
            prevEl: '.swiper-button-prev' 
        },
        on: {
            reachEnd: function () {
                // Load more items when reaching the end
                loadMoreSlides();
            }
        }
    })">
        <div class="swiper-container" x-ref="container">
            <div class="swiper-wrapper">
                <?php foreach($swip as $i) { ?>
                    <div class="swiper-slide">
                        <div class="bg-cover" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/static/banner/<?php echo ($i['img']); ?>');">
                            <!-- Removed opacity from overlay -->
                            <div class="w-full h-full"></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-4 w-full flex justify-center items-center">
            <div class="swiper-pagination"></div>
        </div>
        
        <!-- Navigation buttons -->
        <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> -->
    </section>
</div>

<script>
    // Simulating loading more slides
    let currentIndex = <?php echo count($swip); ?>; // Start from the current count of images

    function loadMoreSlides() {
        const swiperWrapper = document.querySelector('.swiper-wrapper');

        // Simulated loading new images
        for (let i = 1; i <= 2; i++) { // Load 2 new slides for demonstration
            const newSlide = document.createElement('div');
            newSlide.className = 'swiper-slide';
            newSlide.innerHTML = ` 
                <div class="bg-cover" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/static/banner/banner${currentIndex + i}.jpg');">
                    <div class="w-full h-full"></div>
                </div>
            `;
            swiperWrapper.appendChild(newSlide);
        }

        // Update Swiper to recognize the new slides
        swiper.update();
    }
</script>