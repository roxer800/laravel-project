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
    <h4>edit product</h4>



    <form action="/vacancys/{{$vacansy['id']}}" method="POST">
          
        @csrf
        @method('PUT')
        <div class="form-group my-4">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{ $vacansy['name'] }}">
        </div>
        
        <div class="form-group my-4">
            <label for="description">Description</label>
            <input  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="description"  value="{{ $vacansy['description']}}">
        </div>
        <div class="form-group my-4">
            <label for="description">available at</label>
            <input  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="available_at"  value="{{ $vacansy['available_at']}}">
        </div>
        
        <button type="submit" value="update" class="btn btn-primary">submit</button>
    </form>


</body>
</html>