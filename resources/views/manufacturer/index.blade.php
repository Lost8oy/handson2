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
            <a href="{{route('manufacturer.create')}}">Create a Manufacturer</a>
        </div>
        <table>
            <tr>
                <th>ID</th>
                <th>Country</th>
                <th>Name</th>
                <th>Link</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($manufacturers as $manufacturer)
            <tr>
                <td>{{$manufacturer->id}}</td>
                <td>{{$manufacturer->country_id}}</td>
                <td>{{$manufacturer->name}}</td>
                <td>{{$manufacturer->link}}</td>
                <td>{{$manufacturer->description}}</td>
                <td>
                    <a href="{{route('manufacturer.edit', ['manufacturer' => $manufacturer])}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('manufacturer.destroy', ['manufacturer' => $manufacturer])}}">
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