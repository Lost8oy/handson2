<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('manufacturer.update', ['manufacturer' => $manufacturer])}}">
        @csrf
        @method('put')
        <div>
            <label>Country</label>
            <input type="text" name="country" placeholder="Country"/>
        </div>
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name"/>
        </div>
        <div>
            <label>Link</label>
            <input type="text" name="link" placeholder="Link"/>
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description"/>
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
</body>
</html>