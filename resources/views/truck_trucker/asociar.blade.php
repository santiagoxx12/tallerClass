<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('truck_trucker.store')}}" method="POST">
    
        @csrf
    <h1>hola desde trucker</h1>
    <select name="trucker_id">
        @foreach ($truckers as $trucker)
        <option value="{{$trucker->id}}">{{$trucker->id}} - {{$trucker->name}}</option>
            
        @endforeach
    </select>
    <h1>hola desde truck</h1>
    <select name="truck_id">
        @foreach ($trucks as $truck)
        <option value="{{$truck->id}}">{{$truck->id}} - {{$truck->modelo}}</option>
            
        @endforeach
    </select>

    <button type="submit">enviar</button>
</form>


</body>
</html>