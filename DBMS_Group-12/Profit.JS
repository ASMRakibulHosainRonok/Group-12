// Get references to elements
const selectElement = document.getElementById('Land');
const bars = document.querySelectorAll('.bar');
const productsDisplay = document.getElementById('productsDisplay');

// Define profit data with products
const profits = {
    'Year-1': { profit: 100000, products: ['Product A', 'Product B', 'Product C'] },
    'Year-2': { profit: 150000, products: ['Product X', 'Product Y', 'Product Z'] },
    'Year-3': { profit: 200000, products: ['Product M', 'Product N', 'Product O'] },
    'Year-4': { profit: 250000, products: ['Product P', 'Product Q', 'Product R'] }
};

// Function to update profit display
function updateProfitDisplay() {
    const selectedOption = selectElement.value;
    const { profit, products } = profits[selectedOption];
    if (profit !== undefined) {
        const barHeight = profit / 1000; // Scale down profit for better visualization
        bars.forEach((bar, index) => {
            bar.style.height = `${barHeight * (index + 1)}px`; // Adjust bar height
        });
        if (products !== undefined && products.length > 0) {
            productsDisplay.innerHTML = `
                <h3>Products</h3>
                <ul>
                    ${products.map(product => `<li>${product}</li>`).join('')}
                </ul>
            `;
        } else {
            productsDisplay.innerHTML = ''; // Clear products display if data is not available
        }
    } else {
        bars.forEach(bar => {
            bar.style.height = '0px'; // Clear bars if data is not available
        });
        productsDisplay.innerHTML = ''; // Clear products display if data is not available
    }
}

// Event listener for select element
selectElement.addEventListener('change', updateProfitDisplay);

// Initial update of profit display
updateProfitDisplay();
