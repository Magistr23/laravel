<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormProcessor</title>
</head>
<body>
    <form method="post" action="{{url('store_form')}}">
        @csrf
        <label for="last_name">Введите Имя</label>
        <input id="last_name" type="text" name="last_name">
        <label for="first_name">Введите Фамилию</label>
        <input id="first_name" type="text" name="first_name">
        <label for="email">Введите Почту</label>
        <input id="email" type="email" name="email">
        <button type="submit">Отправить</button>
    </form>
</body>
</html>