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
            <a href="{{route('monitor.create')}}">Create a Monitor</a>
        </div>
        <table>
            <tr>
                <th>ID</th>
                <th>Inventory Number</th>
                <th>Model</th>
                <th>Manufacturer</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($monitors as $monitor)
            <tr>
                <td>{{$monitor->id}}</td>
                <td>{{$monitor->inventory_number}}</td>
                <td>{{$monitor->model}}</td>
                <td>{{$monitor->manufacturer}}</td>
                <td>{{$monitor->description}}</td>
                <td>
                    <a href="{{route('monitor.edit', ['monitor' => $monitor])}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('monitor.destroy', ['monitor' => $monitor])}}">
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