<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('monitor.update', ['monitor' => $monitor])}}">
        @csrf
        @method('put')
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
            <input type="text" name="mannufacturer" placeholder="Manufacturer"/>
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