<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add a Country</h1>
    <form method="post" action="{{route('country.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name "/>
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description"/>
        </div>
        <div>
            <input type="submit" value="Save a new Country" />
        </div>
    </form>
</body>
</html>