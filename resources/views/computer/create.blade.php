<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>registrar un PC</h3>
    <form action="{{route('computer.store')}}" method="POST">
        @csrf
        <label for="number">ingrese el numero del pc:</label>
        <input type="number" id="number" name="number"><br><br>
        <label for="brand">ingrese la marca del pc:</label>
        <input type="text" id="brand" name="brand"><br>
        <input type="submit" >
    </form>
</body>
</html>
