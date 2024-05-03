<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/products" method="POST">
        @csrf
        <h1>Создать продукт</h1>
        <div class="form-group">
            <label for="title">Название</label>
            <input type="text" name='title' placeholder="Название продукта" id="title">
        </div>

        <div class="form-group">
            <label for="description">Описание</label>
            <input type="text" name='description' placeholder="Описание продукта" id="tidescriptiontle">
        </div>
        <button type="submit">Отправить</button>
    </form>
</body>
</html>