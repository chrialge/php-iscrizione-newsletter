<?php
include __DIR__ . '/function.php';
// var_dump($_GET);
$email = $_GET['email'];

if (isset($email)) {
    // var_dump($email);
    $response = checkEmail($email);
    // var_dump($response);
    $message = generateAlertMessage($response);
    // var_dump($message);
};



?>


<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">SiteWeb</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID" aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarID">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link active" aria-current="page" href="#">About</a>
                        <a class="nav-link active" aria-current="page" href="#">Contact</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>


        <?php if (isset($email)) : ?>
            <div class="position-fixed alert-dismissible fade show alert alert-<?= $message['class'] ?>" role="alert" style="top: 80px; left: 60px; z-index: 2;">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong><?= $message['alert'] ?></strong>
            </div>
        <?php endif; ?>

        <section id="jumbotron" style="background-image: url('./img/sfondo.jpg'); height: 500px;">
            <div class=" text-center h-100">
                <div class="mask h-100" style="background-color: rgba(0, 0, 0, 0.6);">
                    <div class="d-flex justify-content-center align-items-center h-100">
                        <div class="text-white">
                            <h1 class="mb-3">MY SITOWEB</h1>
                            <h4 class="mb-3">Entry in my sitoweb</h4>
                            <a data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg" href="#!" role="button">Start 🔜 </a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /#jumbotron -->

        <section id="products" class="my-5">
            <div class="container">
                <div class="row row-cols-2 row-cols-lg-4 gy-3">
                    <?php for ($i = 0; $i < 8; $i++) : ?>
                        <div class="col">
                            <div class="card">
                                <img class="card-img-top" src="https://picsum.photos/200/300" alt="Title" />
                                <div class="card-body">
                                    <h4 class="card-title">Title</h4>
                                    <p class="card-text">Text</p>
                                </div>
                            </div>

                        </div>
                    <?php endfor; ?>

                </div>
            </div>
        </section>

        <section id="newsletter" class="bg-secondary py-4 ">
            <div class="container d-flex flex-column align-items-center">
                <h3>Newsletter</h3>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, et. Iste aspernatur doloribus quas rem praesentium illum earum cumque aperiam, voluptatem quia voluptatum eius ex assumenda nobis placeat repellat suscipit voluptatibus recusandae dolorum, nemo tempora delectus, dignissimos velit ea? Reprehenderit eaque nemo suscipit sapiente impedit. Cupiditate sint non accusantium eius.
                </p>
                <form action="" method="get" class="d-flex gap-2 align-items-center">
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="abc@mail.com" />
                        <small id="emailHelpId" class="form-text text-muted">Type you email</small>
                    </div>
                    <button type="submit" class="btn btn-primary" style="height: 50px;">Send</button>
                </form>
            </div>



        </section>
        <!-- /#newsletter -->


    </main>
    <footer class="bg-dark text-center text-lg-start text-white">

        <div class="container p-4">
            <div class="row">

                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Footer text</h5>

                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                        molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                        voluptatem veniam, est atque cumque eum delectus sint!
                    </p>
                </div>



                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Footer text</h5>

                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                        molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                        voluptatem veniam, est atque cumque eum delectus sint!
                    </p>
                </div>

            </div>
        </div>

        </div>


        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2020 Copyright: Boolean
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>