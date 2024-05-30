<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all_user</title>
</head>
<body>
    <h1>пользователи</h1>
    <a href="{{route('admin.admin_logout')}}">выйти из акаунта</a>
    <a href="{{route('admin.restoran')}}">БАЗА РЕСТОРАНОВ</a>
    <table>
        
            <tr>
                <td>id</td>
                <td>name</td>
                <td>surname</td>
                <td>email</td>
                <td>phone</td>
                <td>password</td>
            </tr>
         
                @foreach($user_clients  as $elem)
                    <tr>    
                        
                        <td>{{  $elem ->id  }}   </td> 
                        <td>{{  $elem ->name  }}   </td> 
                        <td>{{  $elem ->surname  }}   </td> 
                        <td>{{  $elem ->email  }}   </td> 
                        <td>{{  $elem ->phone  }}   </td> 
                        <td>{{  $elem ->password  }}   </td> 
                        <td><input type="checkbox" name="status" id="status"> <a href="{{route('admin.login_date_show', $elem -> id)}}"><button>Подробнее</button></a> </td>
                    </tr>  
                    <tr>
           

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