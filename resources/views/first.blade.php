<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: blue;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>
            This is the first blade webpage i am building;
        </h1>
        <form action="/todo" method="POST">
            @csrf
            <button type="submit">
                Go To Todo List
            </button>
        </form>
    </div>


</body>

</html>