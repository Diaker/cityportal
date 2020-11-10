<? require "navbar.php" ?>
<div class="container">
    <div class="col-md-3">
        
    </div>
    <div class="col-md-6">
        <form action="/php/login.php" method="post">
            <div >
                <label for="login">Логин</label>
                <input type="text" class="form-control" id="login" aria-describedby="login" name="login">
            </div>
            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Войти"></input>
        </form>
    </div>
    <div class="col-md-3">
        
    </div>
</div>
<? require "footer.php" ?>