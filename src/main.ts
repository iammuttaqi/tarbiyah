import "./style.css";

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
