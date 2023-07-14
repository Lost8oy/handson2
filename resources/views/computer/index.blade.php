<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Index</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('computer.create')}}">Add a Computer</a>
        </div>
        <table border="1px">
            <tr>
                <th>ID</th>
                <th>Manufacturer</th>
                <th>Inventory Number</th>
                <th>Submodel</th>
                <th>Power</th>
                <th>Speed</th>
                <th>Date</th>
                <th>Bit</th>
                <th>Description</th>
            </tr>
            @foreach ($computers as $computers)
            <tr>
                <td>{{$computer->id}}</td>
                <td>{{$computer->manufacturer_id}}</td>
                <td>{{$computer->inventory_number}}</td>
                <td>{{$computer->model}}</td>
                <td>{{$computer->submodel}}</td>
                <td>{{$computer->processor}}</td>
                <td>{{$computer->power}}</td>
                <td>{{$computer->speed}}</td>
                <td>{{$computer->date}}</td>
                <td>{{$computer->bit}}</td>
                <td>{{$computer->description}}</td>
                <td>
                    <a href="{{route('computer.edit', ['computer' => $computer])}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('computer.destroy', ['computer' => $computer])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" />
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    
</body>
</html>