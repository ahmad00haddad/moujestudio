// about page
document.addEventListener("DOMContentLoaded", function () {
  // تأكد من وجود العناصر قبل إضافة مستمع الحدث
  if (slideNavs.length > 0) {
    slideNavs.forEach((nav) => {
      nav.addEventListener("click", function (e) {
        e.preventDefault();

        const currentSlide = document.querySelector(".flex--active");
        if (!currentSlide) return; // إذا لم يتم العثور على الشريحة النشطة، إنهاء الدالة

        const current = currentSlide.dataset.slide;
        const next = this.dataset.slide;

        const activeNav = document.querySelector(".slide-nav.active");
        if (activeNav) {
          const activeHeading = activeNav.previousElementSibling; // نفترض أن h4 هو العنصر السابق
          if (activeHeading) {
            activeHeading.style.color = "#474747"; // إعادة اللون إلى الافتراضي (يمكنك تحديد لون افتراضي هنا)
          }
        }

        slideNavs.forEach((nav) => nav.classList.remove("active"));
        this.classList.add("active");

        // قم بتغيير لون h4 للنص الجديد النشط إلى الأبيض
        const newActiveHeading = this.previousElementSibling; // نفترض أن h4 هو العنصر السابق
        if (newActiveHeading) {
          newActiveHeading.style.color = "white"; // تغيير اللون إلى الأبيض
        }
        if (current === next) return;

        const nextSlide = document.querySelector(
          `.flex__container[data-slide="${next}"]`
        );
        if (!nextSlide) return; // إذا لم يتم العثور على الشريحة التالية، إنهاء الدالة

        nextSlide.classList.add("flex--preStart");
        currentSlide.classList.add("animate--end");

        setTimeout(() => {
          nextSlide.classList.remove("animate--start", "flex--preStart");
          nextSlide.classList.add("flex--active");
          currentSlide.classList.add("animate--start");
          currentSlide.classList.remove("animate--end", "flex--active");
        }, 800);
      });
    });
  }

  // Select all navigation links
  const slideNavLinks = document.querySelectorAll(".slider__navi .slide-nav");
  let currentIndex = 0; // Initialize the current index
  let isUserClicking = false; // Track if user is clicking

  // Function to click the current link
  function clickCurrentLink() {
    if (!isUserClicking) {
      // Only click if user is not clicking
      slideNavLinks[currentIndex].click();
      currentIndex = (currentIndex + 1) % slideNavLinks.length; // Loop back to the first link after the last
    }
  }

  // Set an interval to click the current link every 5 seconds (5000 milliseconds)
  const intervalId = setInterval(clickCurrentLink, 5000);

  // Add event listeners to track user clicks on the links
  slideNavLinks.forEach((link) => {
    link.addEventListener("click", () => {
      isUserClicking = true; // User is clicking
      clearInterval(intervalId); // Stop the automatic clicking
    });
  });

  // Add event listeners to the h4 elements
  const headings = document.querySelectorAll(".slider__navi h4");
  headings.forEach((heading, index) => {
    heading.addEventListener("click", () => {
      // Change all elements with class 'label-Slider' to black
      const labels = document.querySelectorAll(".label-Slider");
      labels.forEach((label) => {
        label.style.color = "#474747"; // Change color to black
      });
      slideNavLinks[index].click(); // Simulate clicking the associated link

      heading.style.color = "white"; // Change the text color to white
    });
  });
});
