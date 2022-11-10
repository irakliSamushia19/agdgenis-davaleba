<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<style>
    .d-flex{
        flex-wrap: wrap;
        justify-content: center;
    }
</style>
<body>

    <div class="d-flex" style="width: 100%">
        @foreach($results as $result)     
            <div class="" style="width: 500px; border:1px solid black;margin: 10px;">
                <h1>{{ $result->title }}</h1>
                <p>{{ $result->body }}</p>
                <h5>Author: {{ $result->author }}</h5>
                <p>active: {{ $result->active }}</p>
                <form action="/all" method="POST">
                    @csrf
                    <button class="btn btn-danger m-1 btn-sm" name="delete" value="{{ $result->title }}">Delete</button>
                </form>
            </div>     
        @endforeach
    </div>


    <form  action="/all" method="POST">
        @csrf
        <div class="text-center">
            <input type="text" name="title" placeholder="what to change title">
            <input type="text" name="new_title" placeholder="new title">
            <input type="text" name="new_author"  placeholder="new author">
            <input type="nuber" name="new_active"  placeholder="new active">
            <button class="btn btn-primary m-1">Change</button>                
        </div>
    </form> 
    <a href="/"><button>უკან დაბრუნება</button></a>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>