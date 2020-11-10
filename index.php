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
        <h2>Последние решенные проблемы</h2>
        <br>
<div class="row">
      <div class="col-sm-6 col-md-4">
           <div class="img-comp-container">
              <div class="img-comp-img">
                    <img src="img/problem1.jpeg" width="300" height="300">
              </div>   
              <div class="img-comp-img img-comp-overlay">
                    <img src="img/decision1.jpeg" width="300" height="300">
              </div>
            </div>
        </div>
         <div class="col-sm-6 col-md-4">
            <div class="img-comp-container">
              <div class="img-comp-img">
                    <img src="img/problem3.jpeg" width="300" height="300">
              </div>   
              <div class="img-comp-img img-comp-overlay">
                    <img src="img/decision3.jpeg" width="300" height="300">
              </div>
            </div>
         </div>
        <div class="col-sm-6 col-md-4">
            <div class="img-comp-container">
              <div class="img-comp-img">
                    <img src="img/problem4.jpeg" width="300" height="300">
              </div>   
              <div class="img-comp-img img-comp-overlay">
                    <img src="img/decision4.jpeg" width="300" height="300">
              </div>
            </div>
        </div>
 </div>
    </center>
</div>
<script src="js/slider.js"></script>
<script >initComparisons();</script>
<? require "footer.php" ?>