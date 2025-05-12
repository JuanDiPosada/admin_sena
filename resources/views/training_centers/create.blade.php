<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>formulacio creacion Training center</h3>
    <form action="{{route('training_center.store')}}" method="POST">
        @csrf
        <label for="name">ingrese el nombre:</label>
        <input type="text" id="name" name="name"> <br><br>
        <label for="location">ingrese la localizacion</label>
        <input type="text" id="location" name="location"><br>
        <input type="submit">
    </form>
</body>
</html>
