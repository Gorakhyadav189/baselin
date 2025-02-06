$(document).ready(function() {
    var taxRate = 0.05; // Tax rate
    var shippingRate = 15.00; // Flat shipping rate

    // Function to recalculate the cart totals
    function recalculateCart() {
        var subtotal = 0;

        // Loop through each product in the cart
        $('.product').each(function() {
            var price = parseFloat($(this).find('.product-price').text()); // Get the price
            var quantity = $(this).find('.product-quantity input').val(); // Get the quantity
            var linePrice = price * quantity; // Calculate line price
            $(this).find('.product-line-price').text(linePrice.toFixed(2)); // Update line price display
            subtotal += linePrice; // Add to subtotal
        });

        // Calculate tax and total
        var tax = subtotal * taxRate;
        var shipping = (subtotal > 0 ? shippingRate : 0);
        var total = subtotal + tax + shipping;

        // Update totals display
        $('#cart-subtotal').text(subtotal.toFixed(2));
        $('#cart-tax').text(tax.toFixed(2));
        $('#cart-shipping').text(shipping.toFixed(2));
        $('#cart-total').text(total.toFixed(2));
    }

    // Event handler for quantity change
    $('.product-quantity input').change(function() {
        recalculateCart(); // Recalculate cart when quantity changes
    });

    // Event handler for remove button click
    $('.remove-product').click(function() {
        $(this).closest('.product').remove(); // Remove the product row
        recalculateCart(); // Recalculate cart totals
    });

    // Function to add a product to the cart
    function addProduct(image, title, price) {
        var productRow = `<div class="product">
            <div class="product-image"><img src="${image}" alt="Product Image"></div>
            <div class="product-details"><div class="product-title">${title}</div></div>
            <div class="product-price">${price}</div>
            <div class="product-quantity"><input type="number" value="1" min="1"></div>
            <div class="product-removal"><button class="remove-product">Remove</button></div>
            <div class="product-line-price">${price}</div>
        </div>`;
        $('.products-container').append(productRow); // Append the new product row
        recalculateCart(); // Recalculate cart totals
    }

    // Example of adding products (you can replace this with dynamic data)
    // addProduct('https://via.placeholder.com/100', 'Product 1', 29.99);
    // addProduct('https://via.placeholder.com/100', 'Product 2', 19.99);
});