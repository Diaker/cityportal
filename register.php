<? require "navbar.php" ?>
<div class="container">
    <div class="col-md-3">
        
    </div>

    <div class="col-md-6">
        <form action="/php/register.php" method="post">
            <div class="form-group">
                <label for="firstname">Имя</label>
                <input type="text" class="form-control" id="firstname" name="firstname">
            </div>

            <div class="form-group">
                <label for="lastname">Фамилия</label>
                <input type="text" class="form-control" id="lastname" name="lastname">
            </div>

            <div >
                <label for="login">Логин</label>
                <input type="text" class="form-control" id="login" name="login">
            </div>

            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="form-group">
                <label for="password">Подтверждение пароля</label>
                <input type="password" class="form-control" id="password" name="password2">
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Регистрация"></input>
        </form>
    </div>

    <div class="col-md-3">
        
    </div>
</div>
<? require "footer.php" ?>