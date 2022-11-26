<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$page_name }}</title>
</head>
<body>
    <div>
        @if ($id ==1)
        <h1>1_st</h1>
        <a href="{{route('maths_1',1) }}"> Maths_1</a>
    @else
    <h1>2_nd</h1>
    <a href="{{route('maths_1',2) }}"> Maths_2</a>
    @endif
    </div>
   
    
    <h5>{{$id}}</h5>
</body>
</html>