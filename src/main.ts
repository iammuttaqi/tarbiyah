import AOS from "aos";
import "aos/dist/aos.css";
import Swiper from "swiper";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import { Autoplay, Navigation, Pagination } from "swiper/modules";
import "./style.css";

// Initialize AOS (Animate On Scroll)
AOS.init({
  duration: 800,
  once: true,
  offset: 100,
});

// Navbar scroll behavior - add solid background when scrolling
const navbar = document.querySelector("nav");
if (navbar) {
  window.addEventListener("scroll", () => {
    const navContainer = navbar.querySelector("div.container");
    if (window.scrollY > 50) {
      navContainer?.classList.remove("bg-red-500/5");
      navContainer?.classList.add("bg-gray-900/60");
    } else {
      navContainer?.classList.remove("bg-gray-900/60");
      navContainer?.classList.add("bg-red-500/5");
    }
  });
}

// Hero Section Swiper
new Swiper(".hero-swiper", {
  modules: [Navigation, Pagination, Autoplay],
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  speed: 1000,
});

// Learning Section Swiper
new Swiper(".learning-swiper", {
  modules: [Navigation, Pagination, Autoplay],
  loop: true,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".learning-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".learning-button-next",
    prevEl: ".learning-button-prev",
  },
  speed: 800,
});

// Jump To Top Button Functionality
const jumpToTopButton = document.getElementById("jump_to_top");

if (jumpToTopButton) {
  // Show/hide button based on scroll position
  window.addEventListener("scroll", () => {
    if (window.scrollY > 300) {
      jumpToTopButton.classList.remove("hidden");
      jumpToTopButton.classList.add("flex");
    } else {
      jumpToTopButton.classList.remove("flex");
      jumpToTopButton.classList.add("hidden");
    }
  });

  // Scroll to top when button is clicked
  jumpToTopButton.addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });
}
