<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tidefall Provisions - Premium Fresh Produce Supplier</title>
  <link rel="icon" href="favicon.ico">
  <script src="https://cdn.tailwindcss.com?v=3.4.0"></script>
  <style>
    :root {
        --primary: oklch(0.55 0.15 140);
        --primary-light: oklch(0.85 0.05 140);
        --surface: oklch(0.95 0.02 140);
        --shadow-dark: rgba(163, 177, 198, 0.4);
        --shadow-light: rgba(255, 255, 255, 0.7);
        --text-main: oklch(0.25 0.05 140);
    }
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
        color: var(--text-main);
        background-color: var(--surface);
    }
    h1, h2, h3, h4, h5, h6 {
        font-family: 'Crimson Pro', serif;
        font-weight: 700;
    }
    .neomorphic-card {
        background: var(--surface);
        border-radius: 4px;
        box-shadow: 8px 8px 16px var(--shadow-dark), -8px -8px 16px var(--shadow-light);
        transition: transform 0.3s ease-in-out;
    }
    .neomorphic-card:hover {
        transform: scale(1.03);
    }
    .neomorphic-inset {
        background: var(--surface);
        border-radius: 12px;
        box-shadow: inset 5px 5px 10px var(--shadow-dark), inset -5px -5px 10px var(--shadow-light);
    }
    .btn-primary {
        background: var(--primary);
        color: white;
        padding: 12px 24px;
        border-radius: 4px;
        font-weight: 700;
        box-shadow: 2px 2px 4px var(--shadow-dark), -2px -2px 4px var(--shadow-light);
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    }
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 8px var(--shadow-dark), 0 -4px 8px var(--shadow-light);
    }
    .nav-link {
        color: var(--text-main);
        padding: 8px 16px;
        transition: color 0.2s ease-in-out, background-color 0.2s ease-in-out;
        border-radius: 4px;
    }
    .nav-link:hover {
        color: var(--primary);
        background-color: var(--primary-light);
    }
    .form-input {
        background: var(--surface);
        border: none;
        border-radius: 4px;
        padding: 12px 16px;
        box-shadow: inset 2px 2px 5px var(--shadow-dark), inset -2px -2px 5px var(--shadow-light);
        color: var(--text-main);
        width: 100%;
        transition: box-shadow 0.2s ease-in-out;
    }
    .form-input:focus {
      outline: none;
      box-shadow: inset 1px 1px 3px var(--shadow-dark), inset -1px -1px 3px var(--shadow-light), 0 0 0 3px oklch(0.85 0.05 140 / 0.5);
    }
    .neomorphic-icon-wrapper {
        background: var(--surface);
        border-radius: 12px; /* For image wrappers specifically */
        box-shadow: inset 5px 5px 10px var(--shadow-dark), inset -5px -5px 10px var(--shadow-light);
    }
    .cookie-banner {
        background-color: oklch(0.25 0.05 140); /* Darker background for contrast */
        color: white;
        padding: 1rem;
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        text-align: center;
        z-index: 1000;
        box-shadow: 0 -2px 10px rgba(0,0,0,0.2);
    }
    .cookie-banner button {
        background-color: var(--primary);
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 4px;
        border: none;
        cursor: pointer;
        margin-left: 1rem;
        transition: background-color 0.2s ease-in-out;
    }
    .cookie-banner button:hover {
        background-color: oklch(0.65 0.20 140);
    }
    
  </style>
</head>
<body class=" antialiased">
  <header class="bg-surface sticky top-0 z-50 shadow-md">
    <nav class="container mx-auto px-4 py-3 flex items-center justify-between flex-wrap md:flex-nowrap">
      <div class="flex-grow flex justify-start items-center order-2 md:order-1 md:flex-grow-0">
        <ul class="flex flex-wrap text-sm gap-x-6 gap-y-2">
          <li><a href="#produce" class="nav-link">Our Produce</a></li>
          <li><a href="#sourcing" class="nav-link">Sourcing</a></li>
          <li><a href="#process" class="nav-link">B2B Process</a></li>
        </ul>
      </div>

      <div class="flex-shrink-0 mx-auto order-1 md:order-2">
        <a href="#" class="text-xl font-bold font-crimson text-text-main">Tidefall Provisions</a>
      </div>
      
      <div class="flex-grow flex justify-end items-center order-3 mt-4 md:mt-0">
        <ul class="flex flex-wrap text-sm gap-x-6 gap-y-2">
          <li><a href="#partners" class="nav-link">Partners</a></li>
          <li><a href="#contact" class="nav-link">Contact Us</a></li>
          <li><a href="#contact" class="btn-primary ml-4">Place Order</a></li>
        </ul>
      </div>
    </nav>
  </header>
<main>
    <section id="hero" class="bg-[--primary] text-white py-12 md:py-24">
      <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-8">
        <div class="md:w-3/5 text-center md:text-left flex flex-col justify-center">
          <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-4">Premium Fresh Produce Sourcing by Tidefall Provisions</h1>
          <p class="text-lg md:text-xl mb-8 font-light">Supplying New York's finest restaurants, hotels, and gourmet markets with highly sought-after seasonal and exotic selections.</p>
          <div class="flex justify-center md:justify-start">
            <a href="#produce" class="btn-primary bg-white text-[--primary] hover:bg-gray-100 hover:text-[--primary-dark] focus:outline-none focus:ring-2 focus:ring-white">Explore Our Catalog</a>
          </div>
        </div>
        <div class="md:w-2/5 flex justify-center md:justify-end">
          <img src="images/hero-fresh-produce-b2b.jpeg" alt="Crates of fresh organic produce arriving for a gourmet restaurant" width="896" height="768" class="rounded-lg shadow-xl">
        </div>
      </div>
    </section>

    <section id="produce" class="py-12 md:py-24 container mx-auto px-4">
      <h2 class="text-3xl md:text-4xl text-center font-bold mb-4">Curated Produce Categories</h2>
      <p class="text-lg text-center mb-12 max-w-2xl mx-auto font-light">From everyday essential ingredients to rare exotic garnishes, Tidefall Provisions delivers unmatched quality.</p>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="neomorphic-card p-6 flex flex-col items-center text-center">
          <img src="images/category-fresh-fruits.jpeg" alt="Assortment of vibrant fresh fruits" width="384" height="384" class="rounded-md mb-4 shadow-md">
          <h3 class="text-xl font-bold mb-2">Fresh Fruits</h3>
          <p class="text-sm font-light">Hand-picked orchard fruits tailored for high-end culinary applications.</p>
        </div>
        <div class="neomorphic-card p-6 flex flex-col items-center text-center">
          <img src="images/category-crisp-vegetables.jpeg" alt="Selection of crisp, green vegetables" width="384" height="384" class="rounded-md mb-4 shadow-md">
          <h3 class="text-xl font-bold mb-2">Crisp Vegetables</h3>
          <p class="text-sm font-light">Farm-fresh greens, root vegetables, and seasonal staples sourced daily.</p>
        </div>
        <div class="neomorphic-card p-6 flex flex-col items-center text-center">
          <img src="images/category-specialty-produce.jpeg" alt="Delicate microgreens and edible flowers" width="384" height="384" class="rounded-md mb-4 shadow-md">
          <h3 class="text-xl font-bold mb-2">Specialty Produce</h3>
          <p class="text-sm font-light">Microgreens, edible flowers, and highly sought-after regional specialties.</p>
        </div>
        <div class="neomorphic-card p-6 flex flex-col items-center text-center">
          <img src="images/category-exotic-selections.jpeg" alt="Colorful exotic fruits from around the world" width="384" height="384" class="rounded-md mb-4 shadow-md">
          <h3 class="text-xl font-bold mb-2">Exotic Selections</h3>
          <p class="text-sm font-light">Imported and rare exotic fruits for distinctive gourmet market displays.</p>
        </div>
      </div>
    </section>

    <section id="sourcing" class="py-12 md:py-24 bg-primary-light">
      <div class="container mx-auto px-4 flex flex-col md:flex-row items-center gap-12">
        <div class="md:w-1/2 neomorphic-card p-8 md:p-12">
          <h2 class="text-3xl md:text-4xl font-bold mb-6">Uncompromising Quality at the Source</h2>
          <p class="text-base md:text-lg mb-6 font-light">At Tidefall Provisions, we understand that a Michelin-star dish begins at the farm. Our procurement team works directly with local growers and international exotic farms to ensure that every crate of produce meets strict standards for color, firmness, and flavor profile. We bridge the gap between boutique farms and New York's elite kitchens.</p>
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center mt-8">
            <div>
              <p class="text-4xl font-bold text-primary">150+</p>
              <p class="text-sm uppercase tracking-wider font-medium">Partner Farms</p>
            </div>
            <div>
              <p class="text-4xl font-bold text-primary">24h</p>
              <p class="text-sm uppercase tracking-wider font-medium">Farm to Kitchen</p>
            </div>
            <div>
              <p class="text-4xl font-bold text-primary">100%</p>
              <p class="text-sm uppercase tracking-wider font-medium">Quality Guarantee</p>
            </div>
          </div>
        </div>
        <div class="md:w-1/2 flex justify-center">
          <img src="images/sourcing-farm-partners.jpeg" alt="Agronomists inspecting fresh crops at sunrise" width="768" height="512" class="rounded-lg shadow-xl">
        </div>
      </div>
    </section>

    <section id="process" class="py-12 md:py-24 container mx-auto px-4">
      <h2 class="text-3xl md:text-4xl text-center font-bold mb-12">Streamlined B2B Ordering</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="flex flex-col items-center text-center">
          <div class="neomorphic-icon-wrapper w-32 h-32 flex items-center justify-center mb-6">
            <img src="images/process-step-catalog.jpeg" alt="Digital catalog icon" width="128" height="128" class="rounded-lg">
          </div>
          <h3 class="text-xl font-bold mb-2">1. Request Catalog</h3>
          <p class="text-sm font-light">Access our real-time seasonal availability and pricing portal.</p>
        </div>
        <div class="flex flex-col items-center text-center">
          <div class="neomorphic-icon-wrapper w-32 h-32 flex items-center justify-center mb-6">
            <img src="images/process-step-order.jpeg" alt="Online order form icon" width="128" height="128" class="rounded-lg">
          </div>
          <h3 class="text-xl font-bold mb-2">2. Select & Order</h3>
          <p class="text-sm font-light">Place bulk or specialty orders easily via phone or our B2B dashboard.</p>
        </div>
        <div class="flex flex-col items-center text-center">
          <div class="neomorphic-icon-wrapper w-32 h-32 flex items-center justify-center mb-6">
            <img src="images/process-step-inspect.jpeg" alt="Quality inspection checklist icon" width="128" height="128" class="rounded-lg">
          </div>
          <h3 class="text-xl font-bold mb-2">3. Quality Inspection</h3>
          <p class="text-sm font-light">Every item is rigorously sorted in our NY facility before dispatch.</p>
        </div>
        <div class="flex flex-col items-center text-center">
          <div class="neomorphic-icon-wrapper w-32 h-32 flex items-center justify-center mb-6">
            <img src="images/process-step-deliver.jpeg" alt="Delivery truck icon" width="128" height="128" class="rounded-lg">
          </div>
          <h3 class="text-xl font-bold mb-2">4. Cold-Chain Delivery</h3>
          <p class="text-sm font-light">Climate-controlled transit directly to your restaurant's loading dock.</p>
        </div>
      </div>
    </section>

    <section id="partners" class="py-12 md:py-24 bg-primary-light">
      <h2 class="text-3xl md:text-4xl text-center font-bold mb-12">Trusted by Culinary Leaders</h2>
      <div class="container mx-auto px-4 relative">
        <div id="testimonials-carousel" class="overflow-hidden relative">
          <div class="flex transition-transform duration-500 ease-in-out" style="transform: translateX(0%);" data-carousel-items>
            <div class="w-full flex-shrink-0 p-4 md:w-1/3">
              <div class="neomorphic-card p-6 flex flex-col items-center text-center min-h-[250px]">
                <img src="images/testimonial-chef-marcus.jpeg" alt="Chef Marcus Tesfaye, Executive Chef" width="128" height="128" class="rounded-full mb-4 shadow-md">
                <p class="italic text-base mb-4">"Tidefall Provisions has completely transformed our seasonal tasting menu. Their access to rare exotic fruits is unparalleled."</p>
                <p class="font-bold">Chef Marcus Tesfaye</p>
                <p class="text-sm font-light">Executive Chef, Midtown Haute Cuisine</p>
              </div>
            </div>
            <div class="w-full flex-shrink-0 p-4 md:w-1/3">
              <div class="neomorphic-card p-6 flex flex-col items-center text-center min-h-[250px]">
                <img src="images/testimonial-buyer-sarah.jpeg" alt="Sarah Lam, Director of Procurement" width="128" height="128" class="rounded-full mb-4 shadow-md">
                <p class="italic text-base mb-4">"The reliability and freshness of their crisp vegetable deliveries keep our hotel's banquet operations running seamlessly."</p>
                <p class="font-bold">Sarah Lam</p>
                <p class="text-sm font-light">Director of Procurement, Luxury Hotel Group</p>
              </div>
            </div>
            <div class="w-full flex-shrink-0 p-4 md:w-1/3">
              <div class="neomorphic-card p-6 flex flex-col items-center text-center min-h-[250px]">
                <img src="images/testimonial-manager-david.jpeg" alt="David Rodriguez, General Manager" width="128" height="128" class="rounded-full mb-4 shadow-md">
                <p class="italic text-base mb-4">"Our gourmet market relies on the visual perfection of their specialty produce. True partners in quality."</p>
                <p class="font-bold">David Rodriguez</p>
                <p class="text-sm font-light">General Manager, Prime Gourmet Market</p>
              </div>
            </div>
          </div>
        </div>
        <div class="absolute inset-y-0 left-0 flex items-center">
          <button onclick="prevSlide()" class="bg-primary text-white p-2 rounded-full shadow-md hover:bg-oklch(0.65 0.20 140) focus:outline-none focus:ring-2 focus:ring-primary">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
          </button>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center">
          <button onclick="nextSlide()" class="bg-primary text-white p-2 rounded-full shadow-md hover:bg-oklch(0.65 0.20 140) focus:outline-none focus:ring-2 focus:ring-primary">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
          </button>
        </div>
      </div>
    </section>

    <section id="contact" class="py-12 md:py-24 container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <div class="neomorphic-card p-8 md:p-12">
          <h2 class="text-3xl md:text-4xl font-bold mb-6">Become a Wholesale Partner</h2>
          <form class="space-y-6">
            <div>
              <label for="businessName" class="block text-sm font-medium mb-2">Business Name</label>
              <input type="text" id="businessName" class="form-input" placeholder="Your Business Name">
            </div>
            <div>
              <label for="contactPerson" class="block text-sm font-medium mb-2">Contact Person</label>
              <input type="text" id="contactPerson" class="form-input" placeholder="Your Name">
            </div>
            <div>
              <label for="email" class="block text-sm font-medium mb-2">Email Address</label>
              <input type="email" id="email" class="form-input" placeholder="your.email@example.com">
            </div>
            <div>
              <label for="phone" class="block text-sm font-medium mb-2">Phone Number</label>
              <input type="tel" id="phone" class="form-input" placeholder="+1 (212) 555-1234">
            </div>
            <div>
              <label for="needs" class="block text-sm font-medium mb-2">Expected Volume/Needs</label>
              <textarea id="needs" rows="4" class="form-input" placeholder="e.g., Weekly supply of organic berries, seasonal vegetables for a new menu..."></textarea>
            </div>
            <button type="submit" class="btn-primary w-full">Request Wholesale Account</button>
          </form>
        </div>
        <div class="neomorphic-card p-8 md:p-12 flex flex-col justify-between">
          <div>
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Connect with Tidefall Provisions</h2>
            <p class="text-lg mb-4 font-light">We're dedicated to providing the freshest produce and exceptional service to our partners in the culinary industry. Reach out to discuss your specific needs.</p>
            <div class="space-y-4 text-left">
              <div>
                <p class="font-bold text-lg mb-1">Our Location:</p>
                <p class="font-light">171 Jefferson Street, New York, NY 11206, USA</p>
              </div>
              <div>
                <p class="font-bold text-lg mb-1">Call Us:</p>
                <p class="font-light"><a href="tel:+13052810860" class="text-primary hover:underline">+13052810860</a></p>
              </div>
              <div>
                <p class="font-bold text-lg mb-1">Email Us:</p>
                <p class="font-light"><a href="mailto:info@<?php echo $_SERVER['HTTP_HOST']; ?>" class="text-primary hover:underline">info@<?php echo $_SERVER['HTTP_HOST']; ?></a></p>
              </div>
            </div>
            <div class="mt-8 rounded-lg overflow-hidden shadow-lg">
              <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d151212.8732551411!2d-74.00812635928135!3d40.71077749033333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d1a68903%3A0x1d4734a7420e6a9c!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sus!4v1701550000000!5m2!1sen!2sus" 
                width="100%" 
                height="300" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
              </iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<footer class="bg-gradient-to-r from-oklch(0.25 0.05 140) to-oklch(0.15 0.02 160) text-white py-8">
    <div class="container mx-auto px-4 text-center">
      <p class="text-sm">© 2024 Tidefall Provisions. All rights reserved.</p>
      <div class="mt-4 flex justify-center space-x-6">
        <a href="./privacy.html" class="text-white hover:text-primary-light text-sm">Privacy Policy</a>
        <a href="./tos.html" class="text-white hover:text-primary-light text-sm">Terms of Service</a>
      </div>
    </div>
  </footer>

  <div id="cookieConsent" class="cookie-banner hidden">
    <p>This website uses cookies to ensure you get the best experience. By continuing to use our site, you agree to our <a href="./privacy.html" class="underline hover:no-underline text-primary-light">Privacy Policy</a>.</p>
    <button id="acceptCookies">Accept</button>
  </div>

  <script>
    // Testimonials Carousel Logic
    let currentSlide = 0;
    const carousel = document.querySelector('[data-carousel-items]');
    const totalSlides = carousel.children.length;

    function showSlide(index) {
        // Adjust for responsive display: On mobile (sm:), show 1 slide per view
        // On larger screens (md:), show 3 slides per view, but this specific UI seems to be 1 per view on sm and 3 logical "slots" for md+.
        // The current plan has only 3 testimonials. A true carousel would need more items or cloning.
        // For simplicity, this will cycle through the 3 items as if they are separate slides,
        // which works well for mobile (1 item/view) and minimally for desktop (3 items/view, but still scrolls 1 unit at a time).
        let slideWidth = carousel.children[0].offsetWidth; // Get width of one item
        if (window.innerWidth >= 768) { // If md breakpoint or larger
            // Assuming 3 items visible, we effectively only have 1 scrollable "group" if totalSlides is 3.
            // If totalSlides > 3, then it would scroll groups of 1/3 (item width)
            // For 3 items and 3 visible, there's no actual "scroll" required.
            // But if there were more, let's keep it robust.
            // If we want 1 item to slide, the `translateX` should be based on 1 item.
            // If totalSlides is 3, and we want to cycle them, current index 0,1,2 makes sense.
            // Visually for 3 items on desktop, it likely shows all at once.
            // So on desktop, let's just snap to first position (0) if there are 3 items.
            // If more, it would be based on 1/3.
            if (totalSlides <= 3) {
                index = 0; // Show all 3 if less than or equal to 3 for desktop-like views.
            }
        }
        carousel.style.transform = `translateX(-${index * slideWidth}px)`;
        currentSlide = index;
    }

    function nextSlide() {
        if (window.innerWidth < 768) { // Mobile behavior, 1 slide at a time
            currentSlide = (currentSlide + 1) % totalSlides;
        } else { // Desktop behavior, show 3 at a time, or cycle if less
            if (totalSlides <= 3) {
              currentSlide = 0; // If 3 or less, cycle to start visually
            } else {
              currentSlide = (currentSlide + 1) % totalSlides; // For more slides, behave like a normal carousel.
            }
        }
        showSlide(currentSlide);
    }

    function prevSlide() {
        if (window.innerWidth < 768) { // Mobile behavior, 1 slide at a time
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        } else { // Desktop behavior
            if (totalSlides <= 3) {
              currentSlide = 0; // If 3 or less, cycle to start visually
            } else {
              currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            }
        }
        showSlide(currentSlide);
    }

    // Initialize carousel on load
    window.addEventListener('load', () => {
        showSlide(0);
    });
    // Re-adjust on resize
    window.addEventListener('resize', () => {
        showSlide(0); // Reset to first slide on resize to recalculate `slideWidth`
    });

    // Cookie Consent Logic
    const cookieConsentBanner = document.getElementById('cookieConsent');
    const acceptCookiesButton = document.getElementById('acceptCookies');
    const COOKIE_NAME_PREFIX = "consent_"; // For dynamic name generation
    const COOKIE_NAME = COOKIE_NAME_PREFIX + Math.random().toString(36).substring(2, 10); // Random unique name

    function setCookie(name, value, days) {
        let expires = "";
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/; SameSite=Lax";
    }

    function getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    window.onload = () => {
        if (!getCookie(COOKIE_NAME)) {
            cookieConsentBanner.classList.remove('hidden');
        }
    };

    acceptCookiesButton.onclick = () => {
        setCookie(COOKIE_NAME, "accepted", 365); // Store consent for 1 year
        cookieConsentBanner.classList.add('hidden');
    };
  </script>
</body>
</html>