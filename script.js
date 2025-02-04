// Add interactivity here (e.g., cart functionality, search, etc.)
// Example: Add to Cart button functionality
const addToCartButtons = document.querySelectorAll('.product-card button');

addToCartButtons.forEach(button => {
  button.addEventListener('click', () => {
    alert('Product added to cart!');
  });
});