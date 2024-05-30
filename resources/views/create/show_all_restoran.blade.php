<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all_restoran</title>
    <link rel="stylesheet" href="../css/style.css" />

</head>
<body>
    <a href="{{Route('admin.create_restoran')}}">ДОБАВИТЬ РЕСТОРАН</a>
    <a href="{{Route('admin.user_table')}}">БАЗА ПОЛЬЗОВАТЕЛЕЙ</a>

    <h1>рестораны</h1>
    <table>
        
           
                
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
               
          <style>
            td{
                border: 1px solid black;
                padding: 10px;
                margin: 0px;
                text-align: center
            }
            tr{
                border: 1px solid black;
                padding: 0px;
                margin: 0px;
            }

          </style>
    </table>
</body>
</html>

