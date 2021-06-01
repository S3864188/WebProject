const btn = document.getElementsByClassName('add_btn')

const products = []

for (var i = 0; i < btn.length; i++) {
    let cartBtn = btn[i]
    cartBtn.addEventListener('click', () => {
        console.log(event.target.parentElement.parentElement.children[2].textContent.replace('$', ''))
        let product = {
            image: event.target.parentElement.parentElement.parentElement.parentElement.children[0].children[0].src,
            name: event.target.parentElement.parentElement.children[1].textContent,
            price: event.target.parentElement.parentElement.children[2].textContent.replace('$', ''),
            totalPrice: parseInt(event.target.parentElement.parentElement.children[2].textContent.replace('$', '')),
            quantity: 1
        }
        addItemToLocal(product)
    })
}

// add to item - value -price localstorage
function addItemToLocal(product) {
    let cartItem = JSON.parse(sessionStorage.getItem('prdInCart'))
    if (cartItem === null) {
        products.push(product)
        sessionStorage.setItem('prdInCart', JSON.stringify(products))

    } else {
        cartItem.forEach(item => {
            if (product.name == item.name) {
                product.quantity = item.quantity += 1;
                product.totalPrice = item.totalPrice += product.totalPrice;
            } else {
                products.push(item)
            }
        });
        products.push(product)
    }
    sessionStorage.setItem('prdInCart', JSON.stringify(products))
    window.location.reload()
    alert("Yo YOU DID IT ✌️")

}

// function display item in cart when click add to cart
function dispCartItem() {
    let html = '';
    let cartItem = JSON.parse(sessionStorage.getItem('prdInCart'))
    cartItem.forEach(item => {
        html += `
        <div class="cartList">
            <div = "cart_items">
                <div class="forImage"><img src="${item.image}" width="100px" alt=""></div>
                <div class="forName"><h3>${item.name}</h3></div>
                <div class="forPrice"><h3>${item.price}</h3></div>

                <div class="forQuantity">
                <button class="decre" action="decrease">-</button>
                <input class="product_quantity" type="text" value = "${item.quantity}"></input>
                <button class="incre" action="increase">+</button></div>
            </div>
        <div class="remove_total">
            <div class="forTotal"><h3>$${item.totalPrice}</h3></div>
            <div class="removeItem"><button>remove</button></div>
            </div>
        </div>`
    });
    document.querySelector('.cartdisp').innerHTML = html;
}


function cartNumberDisplay() {
    let cartNumbers = 0;
    let cartItem = JSON.parse(sessionStorage.getItem('prdInCart'))
    cartItem.forEach(item => {
        cartNumbers = item.quantity += cartNumbers;
    });
    document.querySelector('.navbar span').textContent = cartNumbers

}
cartNumberDisplay()
dispCartItem()



//function for remove item in cart
const removeitem = document.getElementsByClassName('removeItem')
for (var i = 0; i < removeitem.length; i++) {
    let removeBtn = removeitem[i]
    removeBtn.addEventListener('click', () => {
        let cartItem = JSON.parse(sessionStorage.getItem('prdInCart'))
        console.log(event.target.parentElement.parentElement.parentElement.children[0].children[1].textContent)
        cartItem.forEach(item => {
            if (item.name != event.target.parentElement.parentElement.parentElement.children[0].children[1].textContent) {
                products.push(item)
            }
        });
        sessionStorage.setItem('prdInCart', JSON.stringify(products))
        window.location.reload()
    })
}



// function for caculate total cart
function cartPrice() {
    subTotal = 0;
    let cartItem = JSON.parse(sessionStorage.getItem('prdInCart'))
    cartItem.forEach(item => {
        subTotal = item.totalPrice += subTotal
    });

    document.querySelector('.priceView h2').textContent = '$' + subTotal



}

cartPrice()

// function for increase item
// take constant for button
const incBtn = document.getElementsByClassName('incre')
const decBtn = document.getElementsByClassName('decre')

//get value from the product
for (var i = 0; i < incBtn.length; i++) {
    let incBtns = incBtn[i]
    incBtns.addEventListener('click', () => {
        console.log(event.target.parentElement.parentElement.children)
        let product = {
            image: event.target.parentElement.parentElement.children[0].children[0].src,
            name: event.target.parentElement.parentElement.children[1].children[0].textContent,
            price: event.target.parentElement.parentElement.children[2].children[0].textContent.replace('$', ''),
            totalPrice: parseInt(event.target.parentElement.parentElement.children[2].children[0].textContent),
            quantity: 1
        }

        plusBtn(product);
    })
}

//making it working
function plusBtn(product) {
    let cartItem = JSON.parse(sessionStorage.getItem('prdInCart'))
    if (cartItem === null) {
        products.push(product)
        sessionStorage.setItem('prdInCart', JSON.stringify(products))
    } else {
        cartItem.map(item => {
            if (product.name === item.name) {
                product.quantity = item.quantity += 1;
                product.totalPrice = item.price *= product.quantity;
            } else {
                products.push(item)
            }
        })
        products.push(product)
    }
    sessionStorage.setItem('prdInCart', JSON.stringify(products))
    window.location.reload()
}


// funtion for decrease item
//get value from the product
for (var i = 0; i < decBtn.length; i++) {
    let decBtns = decBtn[i]
    decBtns.addEventListener('click', () => {
        let product = {
            image: event.target.parentElement.parentElement.children[0].children[0].src,
            name: event.target.parentElement.parentElement.children[1].children[0].textContent,
            price: event.target.parentElement.parentElement.children[2].children[0].textContent.replace('$', ''),
            totalPrice: parseInt(event.target.parentElement.parentElement.children[2].children[0].textContent),
            quantity: 1
        }

        minusBtn(product);
    })
}

//making it working
function minusBtn(product) {
    let cartItem = JSON.parse(sessionStorage.getItem('prdInCart'))
    if (cartItem === null) {
        products.push(product)
        sessionStorage.setItem('prdInCart', JSON.stringify(products))
    } else {
        cartItem.map(item => {
            if (product.name === item.name) {
                product.quantity = item.quantity -= 1;
                product.totalPrice = item.price *= product.quantity;
                if (item.quantity <= 0) {
                    product.quantity = item.quantity += 1
                }
            } else {
                products.push(item)
            }
        })
        products.push(product)
    }
    sessionStorage.setItem('prdInCart', JSON.stringify(products))
    window.location.reload()
}



let subTotalss = subTotal
console.log(subTotal)


const validateCoupon = () => {
    var coupon_10 = "COSC2430-DI";
    var coupon_20 = "COSC2430-HD";
    var tmp;
    coupon_input = document.getElementById("coupon-code").value;


    var subTotals = parseInt(subTotalss)
    console.log(subTotals)


    if (coupon_input == coupon_20) {
        let newTotal = ((subTotals - (subTotals * 20) / 100))
        document.querySelector('.priceView h2').textContent = newTotal



    } else if (coupon_input == coupon_10) {
        let newTotal = ((subTotals - (subTotals * 10) / 100))
        document.querySelector('.priceView h2').textContent = newTotal


    } else {
        // window.alert("Wrong coupon code. Please check again!");
    }

};



validateCoupon()