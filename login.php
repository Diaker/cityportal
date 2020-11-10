<? require "navbar.php" ?>
<div class="container">
    <center>
        <form action="/php/login.php" method="post">
            <input type="text" name="login" placeholder="Логин"> <br><br>
            <input type="password" name="password" placeholder="Пароль"> <br><br>
            <input type="submit" name="go">
        </form>
    </center>
</div>
<? require "footer.php" ?>