<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Successfully Added Tddo</h1>

        <form action="/todo" method="post">
            @csrf
            <button type="submit">
                Add Todo
            </button>
        </form>
    </div>
</body>

</html>