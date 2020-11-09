<? require "navbar.php" ?>

<div class="jumbotron">
    <div class="container">
        <h1>Привет, дорогой друг!</h1>
        <p>
            Вместе мы сможем улучшить наш любимый город. Нам очень сложно узнать обо всех проблемах города, поэтому мы
            предлагаем тебе помочь своему городу!
        </p>
        <p>
            Увидел проблему? Дай нам знать о ней и мы ее решим!
        </p>
        <p>
            <a class="btn btn-success btn-lg" href="#" role="button">Сообщить о проблеме</a>
            <a class="btn btn-primary btn-lg" href="#" role="button">Присоедениться к проекту</a>
        </p>
    </div>
</div>

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

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>