<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velocidad</title>
</head>
<body>
    Velocidad aceleracion formula general
    <div>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Kimetsu_no_Yaiba_logo.svg/320px-Kimetsu_no_Yaiba_logo.svg.png"/>
        <p>Alonso Rubicel Muñoz Valencia</p>
        <p>17/11/2021</p>
    </div>
    <nav>
    Velocidad
    Aceleracion
    Formula General
    </nav>
    <div>
    <form action="{{route('calcular')}}" method="post">
    {{csrf_field()}}
        <div>
            <label>Velocidad</label>
            <input type="text" id="vel" name="vel"/>
        </div>
        <div>
            <label>Distancia</label>
            <input type="text" id="dis" name="dis"/>
        </div>
        <div>
            <label>TIempo</label>
            <input type="text" id="tim" name="tim"/>
        </div>
        <div>
            <input type="submit" value="Calcular" />
        </div>
    </form>
    
    </div>
</body>
</html>