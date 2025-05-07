document.addEventListener("DOMContentLoaded", function () {
    // Get all the tabs and product cards
    const categoryTabs = document.querySelectorAll(".tabs button");
    const productCards = document.querySelectorAll(".product-card");
  
    // Add click event listeners to each tab
    categoryTabs.forEach((tab) => {
      tab.addEventListener("click", function () {
        // Remove 'active' class from all tabs
        categoryTabs.forEach((t) => t.classList.remove("active"));
  
        // Add 'active' class to the clicked tab
        tab.classList.add("active");
  
        // Get the category name of the clicked tab
        const selectedCategory = tab.textContent.trim().toUpperCase();
  
        // Filter product cards based on the selected category
        productCards.forEach((card) => {
          // Check if the product matches the category or show all for 'LAB GROWN'
          if (
            selectedCategory === "LAB GROWN" || 
            card.textContent.toUpperCase().includes(selectedCategory)
          ) {
            card.style.display = "block"; // Show matching product
          } else {
            card.style.display = "none"; // Hide non-matching product
          }
        });
      });
    });
  });
  