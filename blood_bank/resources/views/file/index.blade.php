<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/boostrap.js"></script>

</head>
<body>
    <h1>Hello Laravel </h1>
    <h1>Hello Laravel </h1>

    @foreach($donors as $donor)
    <div>
       <h1> {{$donor->name}}  </h1>
       <h1> {{$donor->email}}  </h1>
       <h1> {{$donor->phone}}  </h1>
       <h1> {{$donor->name}}  </h1>
    </div>
    @endforeach

</body>
</html>