<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" href="../img/Main page/four brouzer.png" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
    <title>Главная</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link
      rel="preconnect"
      href="https://fonts.googleapis.com"
    />
    <link
      rel="preconnect"
      href="https://fonts.gstatic.com"
      crossorigin
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap"
      rel="stylesheet"
    />
    <link
      rel="preconnect"
      href="https://fonts.googleapis.com"
    />
    <link
      rel="preconnect"
      href="https://fonts.gstatic.com"
      crossorigin
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap"
      rel="stylesheet"
    />
  </head>
<body>
   <?php
   include "bloks/header.php";  
   ?>
     <main>
        
        <div class="slideshow-container">
        
            <div class="slider fade">
            <img src="img/Main page/Group 8 (2).png" style="width:100%">
            </div>
            
            <div class="slider fade">
            <img src="img/Main page/картинка 3 (1).png" style="width:100%">
            </div>
            
            <div class="slider fade">
            <img src="img/Main page/Картинка 2 (1).png" style="width:100%">
            </div>
              
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="bulet"></span> 
          <span class="bulet"></span> 
          <span class="bulet"></span> 
        </div> 
        
            <div class="partes-conteiner">
                <H1>Наши партнеры</H1>
                <div class="parners__img">
                    <img src="img/Main page/image 10.png" alt="kfs">
                    <img src="img/Main page/image 5.png" alt="BK">
                    <img src="img/Main page/image 5-1.png" alt="taste&point">
                    <img src="img/Main page/image 6 (3).png" alt="hohu-pury">
                    <img src="img/Main page/image 11.png" alt="shaurmeals">
                </div>
            </div>
            <div class="main-menu_nav">
                <h1>Не можешь сделать выбор?</h1>
                Сделай выбор в пользу наиболее <br> понравившегося тебе меню
                <div class="menu-nav_buttons">
                    <button class="main-menu_button1 btn">
                        <img src="img/Main page/milk carrrot.png" alt="menu_button"> Вегатерианское меню
                    </button>
                    <button class="main-menu_button2 btn">
                        <img src="img/Main page/carrot.png" alt="menu_button"> Веганское меню
                    </button>
                    <button class="main-menu_button3 btn">
                        <img src="img/Main page/meat.png" alt="menu_button"> Мясное меню
                    </button>
                    <button class="main-menu_button4 btn">
                        <img src="img/Main page/chicken.png" alt="menu_button"> Куринное меню
                    </button>
                    <button class="main-menu_button5 btn">
                        <img src="img/Main page/fish.png" alt="menu_button"> Рыбное меню
                    </button>
                 </div>
            </div>
            <div class="stocks_conteiner">
                <h1>Получи выгодные акции! </h1>
                <span>
                    Список акций связанных с 
                  партерами
                </span> 
                <div class="main__stoks-blocs">
                        <div class="stocks-blok">
                            <img src="img/Main page/image rks.png" alt="kfs">
                            <span>При заказе хрустящей курочки из KFC <br> на сумму больше 600 рублей <br>бесплатная доставка</span> 
                        </div>
                        <div class="stocks-blok">
                            <img src="img/Main page/image souse.png" alt="kfs">
                            <span>Если вы оформляете заказ с нашим <br> партнером мы оплачиваем любые 3 <br> соуса этого ресторана для вас </span>   
                        </div>
                        <div class="stocks-blok">
                            <img src="img/Main page/image 6 (2).png" alt="kfs">
                            <span>При заказе у партнеров, доставка не <br> продлиться дольше 15 минут, или мы <br> вернем деньги</span>    
                        </div>
                 </div>
            </div>
            <div class="popularity-place_conteiner">
                <h1>Популярные ретостораны</h1>
                <span>Мы собрали для вас наиболее популярные рестораны </span>
                <div class="popularity-place_card-of-tovar">
                <h1>Популярные ретостораны</h1>
                <span>Мы собрали для вас наиболее популярные рестораны </span>
                @foreach($restoran  as $elem)
                <div class="popularity-place_conteiner">
                <div class="popularity-place_card-of-tovar">
                    <div class="popularity_place_card" id="1">
                        <div class="popularity-place_card_img card-img">
                        <img src="/storage/img/{{ $elem->image }}" alt="main_img">
                            <div class="card_block">
                                <img src="../img/Main page/walk_esmyx4cimsxx 1.png" alt="person">
                                <span>20-30 минут</span>
                            </div>
                        </div> 
                        <span class="card_blok-cost">$$$$$</span>
                            <span class="card_blok-name">{{$elem -> name}}</span>  
                            <span class="card_blok-name otziv">
                                <img src="../img/Main page/Star 1.png" alt="star">
                                <span>4.7</span> <span> (2099)</span>
                            </span>                   
                    </div>
                 
                    </div>
                </div>
            </div>

                 @endforeach
                </div>
            </div>
         
            
    </main>
    <script src="../js/redirect.js"></script>
    <script src="../js/script_for_settig.js"></script>
    <script src="../js/script.js"></script>
    <?php
   include "bloks/footer.php";
   ?>
</body> 
</html>