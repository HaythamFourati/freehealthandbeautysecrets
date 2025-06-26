import './index.css'
import Person from "./scripts/Person"
import ExampleReactComponent from "./scripts/ExampleReactComponent"
import React from "react"
import ReactDOM from "react-dom/client"

document.addEventListener('DOMContentLoaded', function () {
  const slider = document.getElementById('testimonial-slider');
  const sliderContainer = document.getElementById('testimonial-slider-container');

  if (slider && sliderContainer) {
    const slides = Array.from(slider.children);
    let autoScrollInterval = null;
    let currentSlideIndex = 0;

    const advanceSlide = () => {
      // Calculate the next slide index, looping back to the start
      currentSlideIndex = (currentSlideIndex + 1) % slides.length;
      
      // Scroll to the next slide
      slides[currentSlideIndex].scrollIntoView({
        behavior: 'smooth',
        block: 'nearest',
        inline: 'start'
      });
    };

    const startAutoScroll = () => {
      // Prevent multiple intervals from running
      if (autoScrollInterval) return;
      autoScrollInterval = setInterval(advanceSlide, 5000); // 5 seconds
    };

    const stopAutoScroll = () => {
      clearInterval(autoScrollInterval);
      autoScrollInterval = null;
    };

    // Use Intersection Observer to only scroll when visible
    const observer = new IntersectionObserver((entries) => {
      const entry = entries[0];
      if (entry.isIntersecting) {
        startAutoScroll();
      } else {
        stopAutoScroll();
      }
    }, {
      threshold: 0.5 // Start when 50% of the slider is visible
    });

    observer.observe(sliderContainer);

    // Pause on hover or drag
    slider.addEventListener('mouseenter', stopAutoScroll);
    slider.addEventListener('mousedown', stopAutoScroll);

    // Resume when mouse leaves, but only if it's still visible
    slider.addEventListener('mouseleave', () => {
      const rect = sliderContainer.getBoundingClientRect();
      const isInViewport = rect.top < window.innerHeight && rect.bottom >= 0;
      if (isInViewport) {
        startAutoScroll();
      }
    });

    // Grab-to-scroll functionality
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
      isDown = true;
      slider.classList.add('cursor-grabbing');
      startX = e.pageX - slider.offsetLeft;
      scrollLeft = slider.scrollLeft;
      // Stop auto-scrolling when user starts dragging
      stopAutoScroll();
    });

    slider.addEventListener('mouseleave', () => {
      isDown = false;
      slider.classList.remove('cursor-grabbing');
    });

    slider.addEventListener('mouseup', () => {
      isDown = false;
      slider.classList.remove('cursor-grabbing');
      // The 'mouseleave' listener will restart scrolling if the mouse leaves the slider.
    });

    slider.addEventListener('mousemove', (e) => {
      if (!isDown) return;
      e.preventDefault();
      const x = e.pageX - slider.offsetLeft;
      const walk = (x - startX) * 2; // The multiplier determines scroll speed
      slider.scrollLeft = scrollLeft - walk;
    });
    
    // Update the current slide index after a manual drag/scroll to prevent a jump
    // when auto-scrolling resumes.
    let scrollEndTimer;
    slider.addEventListener('scroll', () => {
      clearTimeout(scrollEndTimer);
      scrollEndTimer = setTimeout(() => {
        const slideWidth = slides[0].offsetWidth;
        const newIndex = Math.round(slider.scrollLeft / slideWidth);
        if (newIndex < slides.length) {
          currentSlideIndex = newIndex;
        }
      }, 150); // A short delay to wait for the scroll to finish
    });
  }
});

// Mobile menu toggle
document.addEventListener('DOMContentLoaded', () => {
  const menuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');
  if (menuButton && mobileMenu) {
    menuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  }
});

const person1 = new Person("Brad")
if (document.querySelector("#render-react-example-here")) {
  const root = ReactDOM.createRoot(document.querySelector("#render-react-example-here"))
  root.render(<ExampleReactComponent />)
}
