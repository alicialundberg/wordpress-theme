
'use strict';

var cart = []; // Create a global array 
var receipt = [];

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
    document.addEventListener('load', getCartStorage)
    
} else {
    
    ready()
} 


/* Functions that will run when DOM is finished loading */
function ready() {
    getCartStorage();

    var removeCartItemButtons = document.getElementsByClassName('deleteButton');
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem)
    }

    var quantityInputs = document.getElementsByClassName('cart-amount')
    for (var i = 0; i < quantityInputs.length; i++) {
        var  input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }

    var addToCartButtons = document.getElementsByClassName('booking-button')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var  button = addToCartButtons[i]
        button.addEventListener('click', addToCartClicked)
    }

    var cartCheckout = document.getElementsByClassName('checkout-button')
    for (var i = 0; i < cartCheckout.length; i++) {
        var  button = cartCheckout[i]
        button.addEventListener('click', checkoutClicked)
    }

    var payButton = document.getElementsByClassName('pay-button')
    for (var i = 0; i < payButton.length; i++) {
        var  button = payButton[i]
        button.addEventListener('click', paymentFinish)
    }

}

/* Create global cart object for the array */
function cartObject(id, course, price, image) {
    this.id = id;
    this.course = course;
    this.price = price;
    this.image = image;
}

function receiptObject(course, quantity, price) {
    this.course = course;
    this.quantity = quantity;
    this.price = price;
}

function paymentFinish() {
    localStorage.clear();
}

function checkoutClicked() {
    var cartItemContainer = document.getElementsByClassName('cartTable')[0];
    var cartRows = cartItemContainer.getElementsByClassName('cart-item');
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i];
        var courseElement = cartRow.getElementsByClassName('cart-name')[0].innerText;
        var priceElement = cartRow.getElementsByClassName('cart-price')[0];
        var quantityElement = cartRow.getElementsByClassName('cart-amount')[0].value;
        var price = parseFloat(priceElement.innerText.replace('kr', ''));
        var receiptItem = new receiptObject(courseElement, quantityElement, price);
        receipt.push(receiptItem);
        console.log(receipt);
    }
    createReceipt(receipt);
}

function createReceipt(receipt) {
    for (var i = 0; i < receipt.length; i++) {
        var obj = receipt[i];
        storeReceipt(obj);
    } 
}

function storeReceipt(obj) {
    if(localStorage) {
        var key = "receipt" + obj.course;
        console.log(key);
        var item = JSON.stringify(obj);
        console.log(item);
        localStorage.setItem(key, item);
        console.log("Saved in localstorage");
        window.location.href = "checkout";
        
    } else {
        console.log("Error, you dont have localstorage");
    }
}

window.onload = function() {
    if (window.location.href.indexOf('checkout') > -1) {
      getReceiptStorage()
    }
  }

function getReceiptStorage() {
    if (localStorage) {
        for (var i = 0; i < localStorage.length; i++) {
            var key = localStorage.key(i);
            if (key.substring(0, 7) == "receipt") {
                var item = localStorage.getItem(key);
                
                var receiptItem = JSON.parse(item);
                receipt.push(receiptItem);  
                
           }
        }
      console.log(receipt); 
      addItemToReceipt();
    } else {
        console.log("Error: you don't have localStorage!");
    }
}
function addItemToReceipt() {
    var receiptItems = document.getElementsByClassName('receipt')[0];
    var total = 0;
    for(var i = 0; i < receipt.length; i++) {
        var receiptRow = document.createElement('ul')
        receiptRow.className = 'receiptList';
        var course = receipt[i].course;
        var quantity = receipt[i].quantity;
        var price = receipt[i].price;
        console.log(price * quantity);
        total = total + (price * quantity); 
       
        var receiptRowContents = `
        <li> ${quantity} x ${course} </li> `;
        receiptRow.innerHTML = receiptRowContents;
        $(receiptItems).append(receiptRow);  
    }
    var totalCost = ` 
    <p>Totalt: ${total} kr</p>`
    $(receiptItems).append(totalCost);  
}

/* When button is clicked, a object will be saved and sent to localStorage */
function addToCartClicked(event) {
    var button = event.target
    var productItem = button.parentElement
    var course = productItem.getElementsByClassName('course-name')[0].innerText
    var price = productItem.getElementsByClassName('course-price')[0].innerText.replace('kr', '')
    var imageSrc = productItem.getElementsByClassName('course-image')[0].src
   // var altText

    // Create an unique ID based on highest object Id in array
    if (cart === undefined || cart.length === 0) { 
        var id = cart.length + 1;
    } else {
       var checkId = Math.max.apply(Math, cart.map(function(o) { return o.id; }));
       var id = checkId + 1;
       console.log(id);
    }

   // Checks if the course have already been added to cart-array
    var findCourse = cart.find(product => product.course === course);
    if (findCourse === undefined) {
        var cartItem = new cartObject(id, course, price, imageSrc);
        console.log(cartItem);
        cart.push(cartItem);  
        storeItemToCart(cartItem);
        alert("Kursen ligger nu i varukorgen!");
    } else {
        alert("Kursen är redan vald, se varukorg!");
        return;
    }
}

/* Save object with unique ID in localStorage */
function storeItemToCart(cartItem) {
    if(localStorage) {
        var key = "cart" + cartItem.id;
        var item = JSON.stringify(cartItem);
        localStorage.setItem(key, item);
        console.log("Saved in localstorage");
        
    } else {
        console.log("Error, you dont have localstorage");
    }
}

/* Get att objects from localStorage and push it to Cart-array  */ 
function getCartStorage() {
    if (localStorage) {
        for (var i = 0; i < localStorage.length; i++) {
            var key = localStorage.key(i);
            if (key.substring(0, 4) == "cart") {
                var item = localStorage.getItem(key);
                
                var cartItem = JSON.parse(item);
                cart.push(cartItem);  
                console.log(cart);  
           }
        }
        addItemToCart()
    } else {
        console.log("Error: you don't have localStorage!");
    }
} 

/* Add Cart-array as tablerows on cart.php */
function addItemToCart() {
    var cartItems = document.getElementsByClassName('cartTable')[0];
   
    for(var i = 0; i < cart.length; i++) {
        var cartRow = document.createElement('tr')
        cartRow.className = 'cart-item';
        var id = cart[i].id;
        var course = cart[i].course;
        var price = cart[i].price;
        var imgSrc = cart[i].image;
        var cartRowContents = `
        <td class="table-img"><img src="${imgSrc}"/></td>
        <td><input class="cart-amount" type="number" value="1"></td>
        <td class="cart-name">${course}</td>
        <td class="cart-price">${price} kr</td>
        <td class="cart-id">${id}</td>
        <td><button class="deleteButton">X</button></td>
        <td></td>`;
        cartRow.innerHTML = cartRowContents;
        $(cartItems).append(cartRow);  
     }
}

/* Update total price based on cart-items */
function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cartTable')[0];
    var cartRows = cartItemContainer.getElementsByClassName('cart-item');
    var total = 0;
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i];
        var priceElement = cartRow.getElementsByClassName('cart-price')[0];
        var quantityElement = cartRow.getElementsByClassName('cart-amount')[0];
        var price = parseFloat(priceElement.innerText.replace('kr', ''));
        var quantity = quantityElement.value;
        console.log(price * quantity);
        total = total + (price * quantity); 
    }
    total = Math.round(total * 100) / 100;
    document.getElementsByClassName('cart-total')[0].innerText = 'Totalt: ' + total + ' kr';
}

/* Remove from cart and localStorage */
function removeCartItem() {
    var row = $(this).closest('tr').children('.cart-id').text();
    var key = "cart" + row;
    localStorage.removeItem(key);
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove();
    updateCartTotal()
}

/* Checkes if quantity-inputfield changes */
function quantityChanged(event) {
    console.log("quantity changed")
    var input = event.target
    console.log(input)
    if(isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}