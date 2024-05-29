<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user.blade</title>
</head>
<body>
    <form action="{{route('login_in')}}" method = 'Post'>
        @csrf
        <input type="text" name ='name' id = 'name' placeholder = 'name'>
        <input type="text" name ='surname' id = 'surname' placeholder = 'surname'>
        <input type="email" name ='email' id = 'email' placeholder = 'email'>
        <input type="phone" name ='phone' id = 'phone' placeholder = 'phone'>
        <input type="password" name ='password' id = 'password' placeholder = 'password'>
        <input type="password" id = 'confirm_password' placeholder = 'confirm_password'>
        <button type="submit">submit</button>
    </form>
    <a href="{{route('login_date')}}">Пользователи</a>
    <a href="{{route('create_user')}}">Создать нового пользователя</a>
</body>
</html>