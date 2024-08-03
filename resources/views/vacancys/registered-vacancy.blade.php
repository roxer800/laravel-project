<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <p>დარეგისტრირებული ვაკანსიები</p>
    @foreach ($vacancy as  $vacansie)

    <div>
        <hr>
        <div>
            <h4>ვაკანსიის სახელი</h4>
            <p>{{$vacansie['name']}}</p>
        </div>
        <div>
            <h4>ვაკანსიის აღწერა</h4>
            <p>{{$vacansie['description']}}</p>
        </div>
        <hr>
    </div>
    <button  type="button" class="btn btn-primary"><a style="color:white" href="{{ route('vacancy.show', ['vacancy' => $vacansie])}}"> ვაკანსიის ნახვა</a></button>
@endforeach
</body>


</html>