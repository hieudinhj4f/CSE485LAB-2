
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar bg-body-tertiary " >
            <div class="container-fluid shadow-lg p-3" style="background: #3c63a8">
                <a href="" class="navbar-brand fs-3 fw-bolder text-white" >TLU</a>
            </div>
        </nav>
    </header>
    <body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" >
            <div class="container-fluid shadow-sm " >
                <div class="navbar-collapse">
                    <ul class="navbar-nav m-auto ">
                        <?php
                            foreach ($category as $Category){
                        ?>
                        <li class="nav-items mt-3 mb-4 m-4">
                            <a href=""><?= $Category->getName() ?></a>
                        </li>
                        <?php }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container-fluid pb-4">
            <div class="container-fluid ">
                <div class="control-box d-flex flex-start pb-4">
                    <a href="" class="btn btn-success">
                        <p class="fs-5">NEW POST</p>
                    </a>
                </div>
                <div class="p-5 mb-4 bg-body-tertiary rounded-3">
                    <div class="container-fluid">
                        <div class="d-flex">
                            <p class="fs-4 fst-italic fw-bolder">The Ultimate Showdown: Champions Clash</p>
                        </div>
                    </div>
                    <div class="container-fluid py-5">
                        <div class="row">
                            <div class="col">
                                <img src="https://th.bing.com/th/id/OIP.lWT5a_iKF3uBHpj1Q9h9BwHaE6?rs=1&pid=ImgDetMain"
                                     class="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous">
    </script>
</body>
</html>