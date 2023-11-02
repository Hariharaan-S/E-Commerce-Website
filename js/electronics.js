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
    name: "Samsung Galaxy S23+",
    image: "el11.jpg",
    price: 94999.00
  },
  {
    id: 2,
    name: "Samsung Galaxy A73",
    image: "el12.jpg",
    price: 39640.00
  },
  {
    id: 3,
    name: "Samsung Galaxy Z Flip 4",
    image: "el13.jpg",
    price: 45402.00
  },
  {
    id: 4,
    name: "Samsung Galaxy z Fold 3",
    image: "el14.jpg",
    price: 133498.00
  }, 
  {
    id: 5,
    name: "Noise Sense Bluetooth Earphones",
    image: "el15.jpg",
    price: 2500.00
  }, 
  {
    id: 6,
    name: "Portronics Harmonics Z2 Bluetooth Earphones",
    image: "el16.jpg",
    price: 2200.00
  },
  {
    id: 7,
    name: "Energy Sistem Headphones",
    image: "el17.jpg",
    price: 620.00
  },
  {
    id: 8,
    name: "Sony XB910N EXTRA BASS",
    image: "el18.jpg",
    price: 620.00
  },
  {
    id: 9,
    name: "Apple AirPods (2nd Gen)",
    image: "el19.jpg",
    price: 620.00
  },
  {
    id: 10,
    name: "Apple AirPods (3rd Gen)",
    image: "el20.jpg",
    price: 620.00
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