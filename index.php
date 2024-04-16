<?php
include __DIR__ . '/function.php';
// var_dump($_GET);
$email = $_GET['email'];

if (isset($email)) {
    var_dump($email);
    // var_dump($email);
    $response = checkEmail($email);
    // var_dump($response);
    $message = generateAlertMessage($response);
    // var_dump($message);
    if ($response == true) {
        session_start();
        $_SESSION['message'] = $message;
        // var_dump($_SESSION);
        header('Location: ./thanYou.php');
    }
}


?>


<?php
include_once __DIR__ . './assets/layout/header.php'
?>
<main>


    <?php if (isset($email)) : ?>

        <?php if (strlen($email) == 0 || str_contains($email, ' ')) : ?>

            <div class="container-fluid d-flex justify-content-center align-items-center position-absolute top-0">
                <div class="position-fixed alert-dismissible fade show alert alert-danger" role="alert" style="top: 80px; left: 60px; z-index: 2; width: calc(100% - 120px); height: calc(100% - 160px); ">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <div class="text d-flex justify-content-center align-items-center h-100 flex-column">
                        <h1>❌</h1>
                        <h1 class="text-center">Don't value reconized, give it up email</h1>
                    </div>

                </div>
            </div>

        <?php else : ?>
            <div class="position-fixed alert-dismissible fade show alert alert-<?= $message['class'] ?>" role="alert" style="top: 80px; left: 60px; z-index: 2;">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong><?= $message['alert'] ?></strong>
            </div>
        <?php endif; ?>


    <?php endif; ?>

    <section id="jumbotron" style="background-image: url('./assets/img/sfondo.jpg'); height: 500px;">
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

<?php include_once __DIR__ . './assets/layout/footer.php' ?>