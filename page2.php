<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiamArtisan - Luxury Earrings</title>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f7f7f7;
}

header {
    background-color: #1a1a1a;
    color: #fff;
    padding: 1rem;
    text-align: center;
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

#cart-icon {
    position: relative;
    cursor: pointer;
    margin-right: 20px;
}

#cart-icon span {
    background-color: #e74c3c;
    color: #fff;
    border-radius: 50%;
    padding: 0.25rem 0.5rem;
    font-size: 0.75rem;
    position: absolute;
    top: -15px;
    right: -15px;
}

#cart-icon img {
    width: 32px;
    height: 32px;
}

main {
    padding: 2rem;
}

.products {
    display: flex;
    gap: 2rem;
    flex-wrap: wrap;
    justify-content: center;
}

.product {
    background-color: #fff;
    padding: 1rem;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 200px;
}

.product img {
    width: 100%;
    height: auto;
    border-radius: 8px;
}

.product h2 {
    margin-top: 0.5rem;
    font-size: 1.25rem;
}
.TryOn{

   background-color: #1a1a1a;
    color: #fff;
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
    text-decoration: none;
}
.add-to-cart {
    margin-bottom: 2vh;
    background-color: #1a1a1a;
    color: #fff;
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
}

.add-to-cart:hover , .TryOn:hover {
    background-color: #333;
}

.popup {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #1a1a1a;
    color: #fff;
    padding: 1rem;
    border-radius: 4px;
    display: none;
}

.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
    padding-top: 60px;
}

.modal-content {
    background-color: #fefefe;
    margin: 5% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 500px;
    position: relative;
    border-radius: 8px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

#cart-items {
    list-style-type: none;
    padding: 0;
}

#cart-items li {
    display: flex;
    justify-content: space-between;
    padding: 0.5rem 0;
}

#cart-items button {
    background-color: #e74c3c;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

#checkout {
    background-color: #1a1a1a;
    color: #fff;
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    display: block;
    margin: 1rem auto 0 auto;
}

.total {
    text-align: right;
    margin-top: 10px;
}
footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        footer .social-links a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        footer .social-links a:hover {
            text-decoration: underline;
        }
        
        header nav ul {
            list-style-type: none;
            display: flex;
        }

        header nav ul li {
            margin-left: 20px;
        }

        header nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            transition: .5s all;
        }

        header nav ul li a:hover {
            color: goldenrod;
            text-decoration: none;
        }


    </style>
    <script src="https://kit.fontawesome.com/beb3159326.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <h1>DiamArtisan</h1>
        <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#QuickSearchDiamond">Search</a></li>
                    <li><a href="#gallery">Latest jewellery Design</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>

        <div id="cart-icon">
            <span id="cart-count">0</span>
            <i class="fa-solid fa-cart-shopping"></i>
        </div>
    </header>
    <main>
        <section class="products">
            <div class="product" data-id="1" data-name="Diamond Drop Earrings" data-price="3000">
                <img src="image/earring.jpg" alt="Diamond Drop Earrings" style="margin-top: -3.3vh;">
                <h2>Diamond Drop Earrings</h2>
                <p>Price: ₹3000</p>
                <button class="add-to-cart">Add to Cart</button><br>
                <a href="tryonear.html" class="TryOn">Try On</a>
            </div>
            <div class="product" data-id="2" data-name="Gold Hoop Earrings" data-price="2500">
                <img src="image/earring_1.jpg" alt="Gold Hoop Earrings">
                <h2 style="margin-top: -2.5vh; margin-left: 2vh; margin-right: 2vh;">Gold Hoop Earrings</h2>
                <p>Price: ₹2500</p>
                <button class="add-to-cart">Add to Cart</button><br>
                <a href="tryonear4.html" class="TryOn">Try On</a>
            </div>
            <div class="product" data-id="3" data-name="Gold Hoop Earrings" data-price="2500">
                <img src="image/earring_4.jpg" alt="Gold Hoop Earrings">
                <h2 style="margin-top: 9vh; margin-left: 2vh; margin-right: 2vh;">Gold Hoop Earrings</h2>
                <p>Price: ₹2500</p>
                <button class="add-to-cart">Add to Cart</button><br>
                <a href="tryonear2.html" class="TryOn">Try On</a>
            </div>
            <div class="product" data-id="4" data-name="Gold Hoop Earrings" data-price="2500">
                <img src="image/earring_2.png" alt="Gold Hoop Earrings">
                <h2 style="margin-top: -2.5vh; margin-left: 2vh; margin-right: 2vh;">Gold Hoop Earrings</h2>
                <p>Price: ₹2500</p>
                <button class="add-to-cart">Add to Cart</button><br>
                <a href="tryonear3.html" class="TryOn">Try On</a>
            </div>
            <!-- <div class="product" data-id="5" data-name="Gold Hoop Earrings" data-price="2500">
                <img src="image/earring.jpg" alt="Gold Hoop Earrings">
                <h2 style="margin-top: -2.5vh; margin-left: 2vh; margin-right: 2vh;">Gold Hoop Earrings</h2>
                <p>Price: ₹2500</p>
                <button class="add-to-cart">Add to Cart</button><br>
                <a href="tryonear.html" class="TryOn">Try On</a>
            </div> -->
            <!-- <div class="product" data-id="6" data-name="Sapphire Dangle Earrings" data-price="4500">
                <img src="images/6.jpg" alt="Sapphire Dangle Earrings">
                <h2>Sapphire Dangle Earrings</h2>
                <p>Price: $4500</p>
                <button class="add-to-cart">Add to Cart</button>
            </div> -->
        </section>
    </main>
    <div id="popup" class="popup">
        <p id="popup-message"></p>
    </div>
    <div id="cart-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Your Cart</h2>
            <ul id="cart-items"></ul>
            <div class="total"><strong>Total: ₹<span id="total-amount">0</span></strong></div>
            <button id="checkout">Checkout</button>
        </div>
    </div>
    <footer>
        <div class="container">
            <p>&copy; 2025 DiamArtisan | All Rights Reserved.</p>
            <div class="social-links">
                <a href="#">Facebook</a>
                <a href="https://www.instagram.com/diamartisan/?utm_source=ig_web_button_share_sheet"
                    target="_blank">Instagram</a>
                <a href="#">Twitter</a>
            </div>
        </div>
    </footer>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const popup = document.getElementById('popup');
    const popupMessage = document.getElementById('popup-message');
    const cartIcon = document.getElementById('cart-icon');
    const cartCount = document.getElementById('cart-count');
    const cartModal = document.getElementById('cart-modal');
    const closeModal = document.querySelector('.close');
    const cartItemsContainer = document.getElementById('cart-items');
    const checkoutButton = document.getElementById('checkout');
    const totalAmount = document.getElementById('total-amount');
    let cart = [];

    // Check if all elements exist before adding event listeners
    if (cartIcon) {
        cartIcon.addEventListener('click', () => {
            if (cartModal) {
                cartModal.style.display = 'block';
                updateCartItems();
            }
        });
    }

    if (closeModal) {
        closeModal.addEventListener('click', () => {
            if (cartModal) {
                cartModal.style.display = 'none';
            }
        });
    }

    if (checkoutButton) {
        checkoutButton.addEventListener('click', () => {
            const customerName = prompt("Enter your name for the invoice:");
            if (customerName) {
                generateInvoice(cart, customerName);
            }
        });
    }

    addToCartButtons.forEach(button => {
        button.addEventListener('click', () => {
            const product = button.parentElement;
            const productId = product.getAttribute('data-id');
            const productName = product.getAttribute('data-name');
            const productPrice = parseFloat(product.getAttribute('data-price'));

            addToCart(productId, productName, productPrice);
        });
    });

    function addToCart(id, name, price) {
        const productIndex = cart.findIndex(item => item.id === id);
        if (productIndex === -1) {
            cart.push({ id, name, price, quantity: 1 });
            showPopup(`${name} added to cart`);
        } else {
            cart[productIndex].quantity++;
            showPopup(`${name} quantity increased`);
        }
        updateCartCount();
        updateCartItems();
    }

    function removeFromCart(id) {
        cart = cart.filter(item => item.id !== id);
        updateCartCount();
        updateCartItems();
    }

    function updateCartCount() {
        if (cartCount) {
            cartCount.textContent = cart.length;
        }
    }

    function updateCartItems() {
        if (!cartItemsContainer) return;

        cartItemsContainer.innerHTML = '';
        let total = 0;
        cart.forEach(item => {
            const li = document.createElement('li');
            li.innerHTML = `
                ${item.name} - ₹${item.price} x ${item.quantity}
                <button onclick="removeFromCart('${item.id}')">Remove</button>
            `;
            cartItemsContainer.appendChild(li);
            total += item.price * item.quantity;
        });
        if (totalAmount) {
            totalAmount.textContent = total;
        }
    }

    function showPopup(message) {
        if (popup && popupMessage) {
            popupMessage.textContent = message;
            popup.style.display = 'block';
            setTimeout(() => {
                popup.style.display = 'none';
            }, 3000);
        }
    }

    function generateInvoice(cart, customerName) {
        const invoiceWindow = window.open('', 'Invoice', 'width=800,height=600');
        invoiceWindow.document.write('<html><head><title>Invoice</title></head><body>');
        invoiceWindow.document.write('<h1>DiamArtisan Invoice</h1>');
        invoiceWindow.document.write(`<p>Date: ${new Date().toLocaleString()}</p>`);
        invoiceWindow.document.write(`<p>Customer: ${customerName}</p>`);
        invoiceWindow.document.write('<table border="1" cellpadding="10"><tr><th>Item</th><th>Price</th><th>Quantity</th><th>Total</th></tr>');
        let total = 0;
        cart.forEach(item => {
            const itemTotal = item.price * item.quantity;
            invoiceWindow.document.write(`<tr><td>${item.name}</td><td>₹${item.price}</td><td>${item.quantity}</td><td>₹${itemTotal}</td></tr>`);
            total += itemTotal;
        });
        invoiceWindow.document.write(`<tr><td colspan="3"><strong>Total</strong></td><td><strong>₹${total}</strong></td></tr>`);
        invoiceWindow.document.write('</table></body></html>');
        invoiceWindow.document.close();
        invoiceWindow.focus();
        invoiceWindow.print();
    }

    // Expose removeFromCart to global scope
    window.removeFromCart = removeFromCart;
});



    </script>
</body>
</html>