import AOS from "aos";
import "aos/dist/aos.css";
import Swiper from "swiper";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import { Autoplay, Navigation, Pagination } from "swiper/modules";

// New imports for interactivity
import { tsParticles } from "@tsparticles/engine";
import { loadSlim } from "@tsparticles/slim";
import VanillaTilt from "vanilla-tilt";

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
  touchStartPreventDefault: false,
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

// Initialize vanilla-tilt and tsParticles only on larger screens (desktop/tablet)
if (window.innerWidth >= 768) {
  // Initialize vanilla-tilt
  const tiltElements = document.querySelectorAll<HTMLElement>("[data-tilt]");
  if (tiltElements.length > 0) {
    // @ts-ignore
    VanillaTilt.init(Array.from(tiltElements));
  }

  // Initialize tsParticles for the Hero section
  const particlesNode = document.getElementById("tsparticles");
  if (particlesNode) {
    loadSlim(tsParticles).then(() => {
      tsParticles.load({
        id: "tsparticles",
        options: {
          background: { color: { value: "transparent" } },
          fpsLimit: 60,
          interactivity: {
            events: {
              onClick: { enable: true, mode: "push" },
              onHover: { enable: true, mode: "repulse" },
            },
            modes: {
              push: { quantity: 2 },
              repulse: { distance: 100, duration: 0.4 },
            },
          },
          particles: {
            color: { value: "#ffffff" },
            links: {
              color: "#ffffff",
              distance: 150,
              enable: true,
              opacity: 0.2,
              width: 1,
            },
            move: {
              direction: "none",
              enable: true,
              outModes: { default: "bounce" },
              random: false,
              speed: 1,
              straight: false,
            },
            number: {
              density: { enable: true },
              value: 60,
            },
            opacity: { value: 0.3 },
            shape: { type: "circle" },
            size: {
              value: { min: 1, max: 3 },
            },
          },
          detectRetina: true,
        },
      });
    });
  }
}
