<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container,
        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: blue;
            gap: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="/upload" method="POST">
            @csrf
            Title :
            <input type="text" name="name" placeholder="name of todo" required>
            Details :
            <input type="text" name="details" placeholder="details of the todo" required>
            <button type="submit">
                Upload
            </button>
        </form>

    </div>

</body>

</html>