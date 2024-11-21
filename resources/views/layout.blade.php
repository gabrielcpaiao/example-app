<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

    <header>
        <div class="px-3 py-2 bg-dark text-white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                    <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                        <li>
                            <a href="#" class="nav-link text-secondary">Home</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">User</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">Task</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">Products</a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
        <div class="px-3 py-2 border-bottom mb-3 color-green bg-">
            <div class="container d-flex flex-wrap justify-content-center">
                <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
                    <input type="search" class="form-control border border-secondary" placeholder="Search" aria-label="Search">
                </form>

                <div class="text-end">
                    <button type="button" class="btn btn-light text-dark me-2 border border-secondary">Login</button>
                    <button type="button" class="btn btn-primary border border-dark">Sign-up</button>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>
