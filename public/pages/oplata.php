<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="img/Main page/four brouzer.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оплата</title>
    <link rel="stylesheet" href="../css/defult.css" />
    <link rel="stylesheet" href="../css/oplata.css" />

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
   include "../bloks/header.php";
?>
<main>
<h1>Ваш заказ</h1>
<span>Проверьте все ли правильно :&#10099;</span>
<div class="main_conteiner_delivery">
    <span>Доставка</span>
    
    <div class="conteiner_delivery_input">
        <input type="text" placeholder="Улица" class="delivery_input_street">
            <div class="delivery_input_info">
                <input type="text" placeholder="№ Подьезда">
                <input type="text" placeholder="Этаж">
                <input type="text" placeholder="Квартира">
            </div>
        <textarea name="" id="" cols="30" rows="10" placeholder="Коментарий к заказу"></textarea>
    </div>
</div>
<div class="main_oplata_conteiner">
    <span>Оплата</span>
    <div class="conteiner_delivery_btn">
        <button class="btn_card" id="btn_card"><span><img src="../img/Oplata/card1.png" alt=""> <span>****3245</span></span></button>
        <button class="btn_nal" id="btn_nal">Наличные</button>
    </div>
    <div class="oplata_conteiner_info">
        <span>Обслуживание сервисом: <span>30 руб.</span></span>
        <span>Доставка: <span>149 руб.</span></span>
        <span>Заказ: <span>467 руб.</span></span>
    </div>
      <div class="oplata_conteiner_plata">
        <button class="conteiner_plata_btn" id="oplata_btn">Оплатить</button>
        <span class="itog-price">Итого: <span>656 руб.</span></span>
      </div>
  </div>
  <div class="overlay" id="overlay">
  
  </div>
  <div class="oplata" id="oplata">
    <span>Оплата прошла успешно</span>
    <span>Спасибо что пользуетесь сервисом <br> доставки еды Consegna!</span>
    <img src="../img/Oplata/oplata.png" alt="love" id="oplata_img">
    <button id="oplata_order_btn">Продолжить</button>
  </div>

  <div class="main_order_conteiner">
    Заказ
    <div class="order_list">
      <div class="list_img">
        <!-- img -->
      </div>
      <div class="list_description">
        <div class="description_name">
          шаурма с курицей
        </div>
        <div class="description_btn">
          <button class="description-add" id="description_add">+</button>
          <span class="description-amount" id="description_amount">1</span>
          <button class="description-deduct" id="description_deduc">-</button>
        </div>
        <div class="itog_price" ><span id="itog_price">245</span>руб.</div>
      </div> 
    </div>
  </div>
</main>
<?php
   include "../bloks/footer.php";
?>
<script src="../js/oplata.js"></script>
<script src="js/script_for_settig.js"></script>
</body>
</html>