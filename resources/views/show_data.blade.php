<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Details</title>
</head>

<body>

    <div class="container">
        <h1>The Todo Details:</h1>

        <!-- Check if there are todo items and display them -->
        @if($todo_data->count() > 0)
            @foreach ($todo_data as $i)
                <p>ID: {{$i->id}}</p>
                <p>Name: {{$i->name}}</p>
                <p>Details: {{$i->details}}</p>
                <p>Status: {{$i->isdone}}</p>
                <hr>
            @endforeach
        @else
            <p>No todo items found!</p>
        @endif

        <!-- Button to Add Todo -->
        <form action="/upload" method="post">
            @csrf
            <button type="submit">Add Todo</button>
        </form>
    </div>

</body>

</html>
