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
            <a href="{{route('country.create')}}">Create a Country</a>
        </div>
        <table>
            <tr>
                <th>Inventory Number</th>
                <th>Model</th>
                <th>Manufacturer</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($countries as $country)
            <tr>
                <td>{{$keyboard->id}}</td>
                <td>{{$keyboard->name}}</td>
                <td>{{$keyboard->description}}</td>
                <td>
                    <a href="{{route('keyboard.edit', ['keyboard' => $keyboard])}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('keyboard.destroy', ['keyboard' => $keyboard])}}">
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