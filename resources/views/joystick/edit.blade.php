<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('joystick.update', ['joystick' => $joystick])}}">
        @csrf
        @method('put')
        <div>
            <label>Manufacturer</label>
            <input type="text" name="maufacturer" placeholder="Manufacturer"/>
        </div>
        <div>
            <label>Inventory Number</label>
            <input type="text" name="inventory_number" placeholder="Inventory Number"/>
        </div>
        <div>
            <label>Submodel</label>
            <input type="text" name="submodel" placeholder="Submodel"/>
        </div>
        <div>
            <label>Processor</label>
            <input type="text" name="processor" placeholder="Processor"/>
        </div>
        <div>
            <label>Power</label>
            <input type="text" name="power" placeholder="Power"/>
        </div>
        <div>
            <label>Speed</label>
            <input type="text" name="speed" placeholder="Speed"/>
        </div>
        <div>
            <label>Date</label>
            <input type="text" name="date" placeholder="Date"/>
        </div>
        <div>
            <label>Bit</label>
            <input type="text" name="bit" placeholder="Bit"/>
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