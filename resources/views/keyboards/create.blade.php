<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add a Keyboard</h1>
    <form method="post" action="{{route('keyboard.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Inventory Number</label>
            <input type="text" name="inventory_number" placeholder="Inventory Number"/>
        </div>
        <div>
            <label>Model</label>
            <input type="text" name="model" placeholder="Model"/>
        </div>
        <div>
            <label>Manufacturer</label>
            <input type="text" name="manufacturer" placeholder="Manufacturer"/>
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="model" placeholder="Model"/>
        </div>
        <div>
            <input type="submit" value="Save a new Keyboard" />
        </div>
    </form>
</body>
</html>