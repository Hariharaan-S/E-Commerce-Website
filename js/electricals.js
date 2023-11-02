let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
  body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
  body.classList.remove('active');
})

let products=[
  {
    id: 1,
    name: "Samsung Double Door Refridgerator",
    image: "el1.jpg",
    price: 25000.00
  },
  {
    id: 2,
    name: "Godrej Double Door Refridgerator",
    image: "el2.jpg",
    price: 27000.00
  },
  {
    id: 3,
    name: "LG Front Load Washing Machine",
    image: "el3.jpg",
    price: 19567.00
  },
  {
    id: 4,
    name: "Samsung Top Load Washing Machine",
    image: "el4.jpg",
    price: 13785.00
  }, 
  {
    id: 5,
    name: "Toshiba 44\" LED TV",
    image: "el5.jpg",
    price: 37654.00
  }, 
  {
    id: 6,
    name: "OnePlus 44\" LED TV",
    image: "el6.jpg",
    price: 32879.00
  },
  {
    id: 7,
    name: "Hitachi 1.5 ton AC",
    image: "el7.jpg",
    price: 42099.00
  },
  {
    id: 8,
    name: "Blue Star 2 ton AC",
    image: "el8.jpg",
    price: 39808.00
  },
  {
    id: 9,
    name: "Blue Star Windus Air Cooler",
    image: "el9.jpg",
    price: 5670.00
  },
  {
    id: 10,
    name: "Symphony Air Cooler",
    image: "el10.jpg",
    price: 7790.00
  }
];
let listCards=[];
function initApp(){
  products.forEach((value,key)=>{
    let newDiv = document.createElement('div');
    newDiv.classList.add('item');
    newDiv.innerHTML = `
    <img src = "images/${value.image}"/>
    <div class = "title">${value.name}</div>
    <div class="price">Rs. ${value.price.toLocaleString()}</div>
    <button onClick="addToCart(${key})">Add to Cart</button>`;

    list.appendChild(newDiv);
  })
}
initApp();
function addToCart(key){
  if(listCards[key] == null){
    listCards[key] = products[key];
    listCards[key].quantity = 1;
  }
  reloadCard();
}
function reloadCard(){
  listCard.innerHTML = '';
  let count = 0;
  let totalPrice = 0;
  listCards.forEach((value,key)=>{
    totalPrice = totalPrice + value.price;
    count = count + value.quantity;

    if(value!=null){
      let newDiv = document.createElement('li');
      newDiv.innerHTML = `
      <div><img scr="images/${value.image}"></div>
      <div>${value.name}</div>
      <div>${value.price.toLocaleString()}</div>
      <div>${value.quantity}</div>
      <div>
          <button onclick = "changeQuantity(${key}, ${value.quantity-1})">-</button>
          <div class="count">${value.quantity}</div>
          <button onclick = "changeQuantity(${key},${value.quantity+1})">+</button>
      </div>`
      listCard.appendChild(newDiv);
    }
  })

  total.innerText = "Rs."+totalPrice.toLocaleString();
  quantity.innerText = count;
}
function changeQuantity(key,quantity){
  if(quantity == 0){
    delete listCards[key];
  }
  else{
    listCards[key].quantity = quantity;
    listCards[key].price = quantity * products[key].price;
  }
  reloadCard();
}