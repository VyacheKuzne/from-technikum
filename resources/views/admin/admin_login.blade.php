<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="../img/Main page/four brouzer.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign_in</title>
    <link rel="stylesheet" href="../css/sign_in.css">
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
    <div class="conteiner_sign_in">
        <div class="sign_in_header">
            <div class="header_logo">
                <img src="../img/Main page/лого.png" alt="logo">
            </div>
        </div>
        <div class="sign_in_form">
            <h1>Вход админа</h1>
            <form action="{{Route("admin.admin_login")}}" class="form_content" id="form_content" method="post">
            @csrf
                <span >E-mail</span>
                <input type="email" required id="email" value="" name="email"> 
                <span >Пароль</span>
                <input type="password" required id="password" value="" name="password">
                <a href="{{Route('admin.admin_registr')}}">Зарегестрироваться</a>
                <button type = 'submit' class="color" id="btn_sign_in">Войти</button>
            </form>
        </div>
    </div>
</body>
</html>











