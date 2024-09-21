// // JavaScript for handling filter clicks
// document.addEventListener("DOMContentLoaded", function () {
//   const filters = document.querySelectorAll(".filters-list__item");
//   const contentItems = document.querySelectorAll(".content-item");

//   filters.forEach((filter) => {
//     filter.addEventListener("click", function () {
//       // Remove active class from all filters
//       filters.forEach((f) => f.classList.remove("filters-list__item--active"));
//       // Add active class to the clicked filter
//       this.classList.add("filters-list__item--active");

//       // Get the filter class from the clicked item
//       const filterClass = this.getAttribute("data-filter");

//       // Show or hide content items based on the filter
//       contentItems.forEach((item) => {
//         // If "Show All" is selected or item matches the filter, show it
//         if (
//           filterClass === "*" ||
//           item.classList.contains(filterClass.substring(1))
//         ) {
//           item.style.display = "block";
//         } else {
//           item.style.display = "none";
//         }
//       });
//     });
//   });

//   // Show all items initially
//   document.querySelector(".filters-list__item--active").click();
// });
