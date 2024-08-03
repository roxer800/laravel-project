<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <div>
            <h2>ვაკანსიების სია</h2>
        </div>
        
        <div>
            @foreach ($vacansies as  $vacansie)

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
        </div>
    </body>

</html>
