<? require "navbar.php" ?>
<div class="container">
    <form action="/php/login.php" method="post">
        <input type="text" name="login" placeholder="Логин"> <br><br>
        <input type="password" name="password" placeholder="Пароль"> <br><br>
        <input type="submit" name="go">
    </form>
    <form action="/php/login.php">
        <div >
            <label for="login">Логин</label>
            <input type="text" class="form-control" id="login" aria-describedby="login" name="login">
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Войти</button>
    </form>
</div>
<? require "footer.php" ?>