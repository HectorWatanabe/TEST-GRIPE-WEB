<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test Gripe</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <link href="{{ url('/css/app.css') }}" rel="stylesheet"> 

    </head>
    <body>
        <div class="container">  
          <form id="contact">
            <h3>La Probabilidad de la {{$lagripe}} es:</h3>
            <h3>{{$rest}}</h3>
            <h4>Recuerda: Siempre es importante acudir a un médico</h4>
            <a href="/" type="button" class="btn btn-success">Regresar</a>
          </form>
        </div>
    </body>
</html>
