document.addEventListener('DOMContentLoaded', function () {
  const offcanvasMenu = document.querySelector('.offcanvas-Menu');
  const offcanvasAccount = document.querySelector('.offcanvas-account');
  const offcanvasCart = document.querySelector('.offcanvas-cart');

  const openMenu = document.querySelector('.open-menu');
  const closeMenu = document.querySelector('.close-menu');
  const openBtn = document.querySelector('.open-btn');
  const closeBtn = document.querySelector('.close-btn');
  const openCart = document.querySelector('.open-cart');
  const closeCart = document.querySelector('.close-cart');

  openMenu.addEventListener('click', function (e) {
    e.preventDefault();
    offcanvasMenu.classList.toggle('on');
  });

  closeMenu.addEventListener('click', function (e) {
    e.preventDefault();
    offcanvasMenu.classList.remove('on');
  });

  openBtn.addEventListener('click', function (e) {
    e.preventDefault();
    offcanvasAccount.classList.toggle('on');
  });

  closeBtn.addEventListener('click', function (e) {
    e.preventDefault();
    offcanvasAccount.classList.remove('on');
  });

  openCart.addEventListener('click', function (e) {
    e.preventDefault();
    offcanvasCart.classList.toggle('on');
  });

  closeCart.addEventListener('click', function (e) {
    e.preventDefault();
    offcanvasCart.classList.remove('on');
  });

  function updateCartTotal() {
    let cartRows = document.querySelectorAll('.cart-box');
    let total = 0;

    cartRows.forEach(cartRow => {
      let priceElement = cartRow.querySelector('.cart-price');
      let quantityElement = cartRow.querySelector('.cart-quantity');
      let price = parseFloat(priceElement.innerText.replace('R', ''));
      let quantity = quantityElement.value;

      total += price * quantity;
    });

    total = Math.round(total * 100) / 100;
    document.querySelector('.total-price').innerText = 'R' + total;

    let cartContent = document.querySelector('.cart-content');
    let emptyCartMessage = document.querySelector('.empty-cart-message');

    if (cartRows.length === 0) {
      emptyCartMessage.style.display = 'flex';
      cartContent.style.display = 'none';
    } else {
      emptyCartMessage.style.display = 'none';
      cartContent.style.display = 'block';
    }
  }

  function removeCartItem(event) {
    let buttonClicked = event.target;
    let cartBox = buttonClicked.closest('.cart-box');
    cartBox.remove();
    updateCartTotal();
    updateCartCount();
    updateLocalStorage();
  }

  function quantityChanged(event) {
    let input = event.target;
    if (isNaN(input.value) || input.value <= 0) {
      input.value = 1;
    }
    updateCartTotal();
    updateLocalStorage();
  }

  function addToCartClicked(event) {
    let cartContent = document.querySelector('.cart-content');
    let button = event.target;
    let shopItem = button.closest('.shop-item');
    let title = shopItem.querySelector('.shop-item-tittle').innerText;
    let price = shopItem.querySelector('.shop-item-price').innerText;
    let imageSrc = shopItem.querySelector('.shop-item-image').src;
  
    // Check if the item is already in the cart
    let existingCartItem = findCartItemByTitle(title);
  
    if (existingCartItem) {
      // Update the quantity of the existing item
      let quantityInput = existingCartItem.querySelector('.cart-quantity');
      let newQuantity = parseInt(quantityInput.value) + 1;
      quantityInput.value = newQuantity;
      updateCartItem(existingCartItem, newQuantity);
    } else {
      // Add a new item to the cart
      addItemToCart(title, price, imageSrc, 1);
    }

  
    // Update totals and localStorage
    updateCartTotal();
    updateLocalStorage();
  
    // Update cart count after a short delay
    setTimeout(() => {
      updateCartCount();
    }, 0);
  }
  
  



  function updateCartItem(cartItem, newQuantity) {
    let quantityElement = cartItem.querySelector('.cart-quantity');
    quantityElement.value = newQuantity;
    updateCartTotal();
    updateLocalStorage();
    updateCartCount(); // Move the updateCartCount here
  }


  function findCartItemByTitle(title) {
    let cartRows = document.querySelectorAll('.cart-box');

    for (let i = 0; i < cartRows.length; i++) {
      let cartTitle = cartRows[i].querySelector('.cart-product-tittle').innerText;
      if (cartTitle === title) {
        return cartRows[i];
      }
    }

    return null;
  }

  function addItemToCart(title, price, imageSrc, quantity) {
    let cartItems = document.querySelector('.cart-content');
    let cartItemNames = cartItems.querySelectorAll('.cart-product-tittle');

    for (let i = 0; i < cartItemNames.length; i++) {
      if (cartItemNames[i].innerText === title) {
        // If the item is already added, do nothing
        return;
      }
    }

    let cartRow = document.createElement('div');
    cartRow.classList.add('cart-box');
    let cartRowContent = `
      <img src="${imageSrc}" class="cart-img">
      <div class="detail-box">
          <p class="cart-product-tittle">${title}</p>
          <div class="cart-price">${price}</div>
          <input type="number" value="${quantity}" class="cart-quantity">
      </div>
      <small class="cart-remove">
          <i class="fa-solid fa-trash-can cart-remove-icon"></i>
      </small>`;
    cartRow.innerHTML = cartRowContent;
    cartItems.appendChild(cartRow);

    // Attach event listeners to the newly added quantity input and remove button
    cartRow.querySelector('.cart-remove').addEventListener('click', removeCartItem);
    cartRow.querySelector('.cart-quantity').addEventListener('change', quantityChanged);
  }

  function updateLocalStorage() {
    let cartItems = [];
    let cartRows = document.querySelectorAll('.cart-box');

    cartRows.forEach(cartRow => {
      let title = cartRow.querySelector('.cart-product-tittle').innerText;
      let price = cartRow.querySelector('.cart-price').innerText;
      let quantity = cartRow.querySelector('.cart-quantity').value;
      let imageSrc = cartRow.querySelector('.cart-img').src;

      cartItems.push({ title, price, quantity, imageSrc });
    });

    localStorage.setItem('cartItems', JSON.stringify(cartItems));
  }

  function loadLocalStorage() {
    let storedCartItems = localStorage.getItem('cartItems');
    if (storedCartItems) {
      let cartItems = JSON.parse(storedCartItems);
  
      // Clear existing cart content
      let cartContent = document.querySelector('.cart-content');
      cartContent.innerHTML = '';
  
      // Rebuild the cart based on stored items
      cartItems.forEach(item => {
        let existingCartItem = findCartItemByTitle(item.title);
  
        if (existingCartItem) {
          // If the item is already in the cart, update the quantity
          let quantityInput = existingCartItem.querySelector('.cart-quantity');
          let newQuantity = parseInt(quantityInput.value) + parseInt(item.quantity);
          quantityInput.value = newQuantity;
          updateCartItem(existingCartItem, newQuantity);
        } else {
          // If the item is not in the cart, add a new row
          addItemToCart(item.title, item.price, item.imageSrc, item.quantity);
        }
      });
  
      updateCartTotal();
      updateCartCount(); // Update the cart count after loading items
    }
  }

  let removeCartItems = document.querySelectorAll('.cart-remove');
  removeCartItems.forEach(item => {
    item.addEventListener('click', removeCartItem);
  });

  let quantityInputs = document.querySelectorAll('.cart-quantity');
  quantityInputs.forEach(input => {
    input.addEventListener('change', quantityChanged);
  });

  let addToCartButtons = document.querySelectorAll('.add-to-cart');
  addToCartButtons.forEach(button => {
    button.addEventListener('click', addToCartClicked);
  });

  let slideIndex = 0;
  showSlides();

  function showSlides() {
    let slides = document.querySelectorAll(".slides");
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }

    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1;
    }

    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 5000);
  }

  updateCartCount();
  loadLocalStorage();
});

function updateCartCount() {
  let cartContent = document.querySelector('.cart-content');
  let cartLength = cartContent.childElementCount;
  document.querySelector('.cart-count').innerText = cartLength;
}
