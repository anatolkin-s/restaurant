// Единая логика корзины v2 (Объекты)
function addToCart(id, title, price) {
    let cart = JSON.parse(localStorage.getItem('restaurant_cart_v2')) || {};
    if (cart[id]) {
        cart[id].qty += 1;
    } else {
        cart[id] = { title: title, price: parseFloat(price), qty: 1 };
    }
    localStorage.setItem('restaurant_cart_v2', JSON.stringify(cart));
    updateCartUI();
    
    const btn = document.querySelector('.btn-res-add');
    if (btn) {
        const originalText = btn.innerHTML;
        btn.innerHTML = '✅ Added!';
        setTimeout(() => { btn.innerHTML = originalText; }, 1000);
    }
}

function updateCartUI() {
    const cart = JSON.parse(localStorage.getItem('restaurant_cart_v2')) || {};
    const bar = document.getElementById('cart-floating-bar');
    if (!bar) return;

    const entries = Object.values(cart);
    if (entries.length > 0) {
        const count = entries.reduce((acc, i) => acc + i.qty, 0);
        const total = entries.reduce((acc, i) => acc + (i.price * i.qty), 0);
        const badge = document.getElementById('cart-count-badge');
        const label = document.getElementById('cart-total-label');
        if (badge) badge.innerText = count;
        if (label) label.innerText = '$' + total.toFixed(2);
        bar.style.display = 'block';
    } else {
        bar.style.display = 'none';
    }
}

// Новая функция для галереи (без конфликтов Fluid)
function changeProductImage(el) {
    const mainImg = document.getElementById('main-product-image');
    if (mainImg && el.dataset.largeSrc) {
        mainImg.style.opacity = '0.5';
        mainImg.src = el.dataset.largeSrc;
        setTimeout(() => { mainImg.style.opacity = '1'; }, 100);
        
        // Подсветка активной миниатюры
        document.querySelectorAll('.thumb-container img').forEach(img => img.style.borderColor = 'transparent');
        el.querySelector('img').style.borderColor = '#fd7e14';
    }
}

document.addEventListener('DOMContentLoaded', updateCartUI);
