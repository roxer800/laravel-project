<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <p>ვაკანსია</p>
    @csrf
    <img src="{{ asset('storage/' . $user->photo) }}" style="width: 200px" alt="Vacancy Photo">
    <h4>{{ $vacansies['name'] }}</h4>
    <h5>{{ $vacansies['description'] }}</h5>
    <h5>{{ $vacansies['available_at'] }}</h5>
    @auth
        @if (Auth::check() && Auth::id() != $vacansies->users_id)
            <form action="{{ url('/vacancies/' . $vacansies->id . '/apply') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="name">თქვენი სახელი:</label>
                    <input type="text" name="name" value="{{ $user['name'] }}" id="">
                </div>
                <div>
                    <label for="email">თქვენი მეილი</label>
                    <input type="email" name="email" id="" value="{{ $user['email'] }}">
                </div>
                <div>
                    <label for="motivation">სამოტივაციო წერილი</label>
                    <input type="file" name="cv" id="cv">
                </div>
                <button value="apply" type="submit" class="btn btn-primary">Sign Up</button>
            </form>
        @else
            <form action="/vacancys/{{ $vacansies['id'] }}" method="POST">
                @method('delete')
                @csrf

                <button onclick="confirmDelete()" type="submit" class="btn btn-danger">ვაკანსიის წაშლა</button>
            </form>

            <button class="btn btn-primary"><a style="color:white"
                    href="{{ route('vacancy.edit', ['vacancy' => $vacansies['id']]) }}"> ვაკანსიის რედაქტირება</a> </button>
        @endif



    @endauth


</body>
<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this?');
    }
</script>

</html>
