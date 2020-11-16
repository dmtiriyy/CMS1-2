<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>lab1</title>

        <style>
        form {
            display:flex;
            flex-direction:column;
        }
        form input {
            width:150px;
        }
        form div {
            display:flex;
            margin-bottom:24px;
        }
        body{
                background-color:#FAEBD7;
            }

        </style>
    </head>
    <body class="">

    <h2>Редактор страницы</h1>
    <h3>Id страницы : {{$page->id}}</h2>
    <h3>Url страницы : {{$page->url}}</h2>
        <form action="{{url('editPage')}}" method="post">
        @csrf
                <div><span>Заголовок : </span><input type="text" id="caption" name="caption" value="{{$page->caption}}" ></div>
                <div><span>Контент : </span><textarea style="height:700px;width:700px;" type="text" id="content" name="content" required>{{$page->content}}</textarea></div>
               
                <input type="text" name='id' style="display:none" value='{{$page->id}}'>
                <input type="submit" id="form-submit" value="Отправить">
        </form>
        
    </body>
</html>
