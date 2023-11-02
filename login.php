<?php include("header 1.html") ?>
<body>
    <form class="form-fields" action="log-in.php" method="post">
        <h1 class="login-head">Welcome!</h1>
        <h2 class="login-sub-head">Login</h2>
        <div class="user-div">
            <p class="user">Username:</p>
            <input type="text" class="user-input" name="username">
        </div>
        
        <div class="pass-div">
            <p class="pass">Password:</p>
            <input type="password" class="user-input" name="password" id="myPass">
        </div>
        <br>
        <button class="but-sub" type="submit">Submit</button>
    </form>
</body>
<?php include("footer.html") ?>