<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My layout</title>
</head>

<body>

    <header>
        <h1>Header Section</h1>
    </header>
    <div class="container">
        @yield('content') <!-- This is where the 'content' section will be injected -->
    </div>

</body>

</html>