<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/resources/scss/app.scss">
    @vite('resources/js/app.js')
</head>
<body>
   
   <h1 class="text-center mb-5">TRENITALIA</h1>
   <div class=" container d-flex flex-wrap">
    @foreach($trains as $train)
    <div class="col-3">
        <h1>{{$train['train_code']}}</h1>
        <h5>{{$train['departure_station']}}</h5>
        <h5>{{$train['arrival_station']}}</h5>
        <h5>{{$train['departure_time']}}</h5>
        <h5>{{$train['arrival_time']}}</h5>
    </div>
   
@endforeach
   </div>
   
   
   
   
   
 
    
   
</body>
</html>