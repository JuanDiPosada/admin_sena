<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('area.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <p>formulario creacion de areas:</p>
        <label for="area">area</label>
        <input type="text" name="name" id="area" > <br>
        <input type="submit">
    </form>
</body>
</html>
