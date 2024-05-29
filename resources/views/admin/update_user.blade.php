<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user_update</title>
</head>
<body>
    <h1>Изменение</h1>
    <form action="{{route('admin.login_date_update_submit', $data -> id)}}" method = 'Post'>
        @csrf
        <input type="text" name ='name' id = 'name' placeholder = 'name' value = "{{$data -> name}}">
        <input type="text" name ='surname' id = 'surname' placeholder = 'surname' value = "{{$data -> surname}}">
        <input type="email" name ='email' id = 'email' placeholder = 'email' value = "{{$data -> email}}">
        <input type="phone" name ='phone' id = 'phone' placeholder = 'phone' value = "{{$data -> phone}}">
        <input type="password" name ='password' id = 'password' placeholder = 'password' value = "{{$data -> password}}">
        <button type="submit">Сохранить изменения</button>
    </form>
</body>
</html>