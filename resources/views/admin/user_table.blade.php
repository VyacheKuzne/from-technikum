<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <table>
    <a href="{{route('admin.login_date')}}">Пользователи</a>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>surname</td>
            <td>email</td>
            <td>phone</td>
            <td>password</td>
            <td>created_at</td>
            <td>updated_at</td>
        </tr>
     
       
                <tr>    
                    <td>
                        {{$data -> id}}
                    </td>
                    <td>
                        {{$data -> name}}
                    </td>
                    <td>
                        {{$data -> surname}}
                    </td>
                    <td>
                        {{$data -> email}}
                    </td>
                    <td>
                        {{$data -> phone}}
                    </td>
                    <td>
                        {{$data -> password}}
                    </td>
                    <td> 
                         {{$data -> created_at}}
                    </td>
                    <td>
                         {{$data -> updated_at}}
                    </td>
                    <td>
                    <a href="{{route('admin.login_date_update', $data -> id)}}"><button>Изменить</button></a>
                    <a href="{{route('admin.login_date_delete', $data -> id)}}"><button>Удалить</button></a>
                    </td>
                </tr>  
                <tr>
       


           
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