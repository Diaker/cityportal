<? require "navbar.php" ?>
<div class="container">
    <center>
        <form action="/php/register.php" method="post">
            <input type="text" name="login" placeholder="Логин"> <br><br>
            <input type="password" name="password" placeholder="Пароль"> <br><br>
            <input type="text" name="firstname" placeholder="Имя"><br><br>
            <input type="text" name="lastname" placeholder="Фамилия"><br><br>
            <input type="submit" name="go">
        </form>
    </center>
</div>
<? require "footer.php" ?>