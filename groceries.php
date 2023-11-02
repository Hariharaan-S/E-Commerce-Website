<?php include("header 1.html") ?>
    <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/c1b3701aff.js" crossorigin="anonymous"></script>
    <div class="container">
        <header>
           <h1>Groceries</h1>    
            <div class="shopping">
                <i class="fa-solid fa-cart-shopping img"></i>
                <span class="quantity">0</span> 
            </div>
        </header>
        <div class="list"></div>
    </div>
    <div class="cart-card">
        <h1>Your Items:</h1>
        <ul class="listCard"></ul>
        <div class="checkOut">
            <div class="total">Rs. 0</div>
            <div class="closeShopping">Close</div>
        </div>
    </div>
    <script src="js/app.js"></script>
    </body>
    
<?php include("footer.html") ?> 