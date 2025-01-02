// Funkce pro přidání produktu do košíku
function addToCart(productName, productColor, productPrice) {
    // Produktové informace
    const product = {
        name: productName,
        color: productColor, // Změňte dle potřeby
        price: productPrice, // Cena v Kč
        quantity: 1 // Výchozí počet kusů
    };

    // Získání košíku z Local Storage
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Kontrola, zda už produkt není v košíku
    const existingProduct = cart.find(item => item.name === product.name && item.color === product.color);

    if (existingProduct) {
        existingProduct.quantity += 1; // Zvýšení počtu kusů
    } else {
        cart.push(product); // Přidání nového produktu
    }

    // Uložení zpět do Local Storage
    localStorage.setItem('cart', JSON.stringify(cart));

    // Zobrazení úspěšné zprávy
    alert("Produkt byl přidán do košíku!");
}
// Funkce pro načtení obsahu košíku
function loadCart() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartTableBody = document.querySelector('#cart-table tbody');
    const totalPriceElement = document.getElementById('total-price');

    let totalPrice = 0;

    cartTableBody.innerHTML = ""; // Vymazání existujícího obsahu

    cart.forEach(product => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${product.name}</td>
            <td>${product.color}</td>
            <td>${product.quantity}</td>
            <td>${product.price * product.quantity}</td>
        `;
        totalPrice += product.price * product.quantity;
        cartTableBody.appendChild(row);
    });

    totalPriceElement.textContent = `Celková cena: ${totalPrice} Kč`;
}

function clearCart() {
    // Vymaže produkty z localStorage
    const confirmation = confirm('Opravdu chcete vyprázdnit košík?');
    if (!confirmation){
        return;
    }

    localStorage.removeItem('cart');

    
    // Aktualizuje zobrazení košíku (např. vyprázdní seznam)
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartTableBody = document.querySelector('#cart-table tbody');
    const totalPriceElement = document.getElementById('total-price');
    cartTableBody.innerHTML = ""; // Vymazání existujícího obsahu
    totalPriceElement.textContent = `Celková cena: 0 Kč`;
    alert('Košík byl vyprázdněn.');
}

// Přesměrování na stránku Checkout
function proceedToCheckout() {
    window.location.href = 'komplexniForm.html';
}

// Načtení košíku při načtení stránky
window.onload = loadCart;
