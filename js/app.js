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
    name: "Aashirvaad Atta - Plain",
    image: "g1.jpg",
    price: 120.00
  },
  {
    id: 2,
    name: "Aashirvaad Multigrain Atta",
    image: "g2.jpg",
    price: 110.00
  },
  {
    id: 3,
    name: "Aashirvaad Select Atta",
    image: "g3.jpg",
    price: 180.00
  },
  {
    id: 4,
    name: "Safe Harvest Brown Rice",
    image: "g4.jpg",
    price: 140.00
  }, 
  {
    id: 5,
    name: "India Gate Basmati Rice",
    image: "g5.jpg",
    price: 200.00
  }, 
  {
    id: 6,
    name: "Puttu Maavu - Puttu Flour",
    image: "g6.jpg",
    price: 80.00
  },
  {
    id: 7,
    name: "Maagi Noodles - Pack of 5",
    image: "g7.jpg",
    price: 120.00
  },
  {
    id: 8,
    name: "Top Ramen Nooodles - Pack of 5",
    image: "g8.jpg",
    price: 120.00
  },
  {
    id: 9,
    name: "Fried Moong Dal",
    image: "g9.jpg",
    price: 30.00
  },
  {
    id: 10,
    name: "TATA Salt",
    image: "g10.jpg",
    price: 30.00
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