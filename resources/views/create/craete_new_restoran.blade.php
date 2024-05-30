<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="{{Route('admin.restoran')}}">БАЗА РЕСТОРАН</a>

    <form action="{{Route('admin.create_restoran')}}" method ='post' enctype="multipart/form-data">
    @csrf
    name:
    <input type="text" name ="name">
    adres:
    <input type="text" name ="adres"> 
    INN: 
    <input type="text" name ="INN">  
    otziv:
    <input type="text" name ="otziv">    
    картинка 

    <input type="file" name = 'images'>

    @isset ($path)
    <img src="{{asset('/image/'. $path)}}" alt="">
    @endisset

    <button type="submit">добавление нового ресторана</button>  
    </form>
</body>
</html>