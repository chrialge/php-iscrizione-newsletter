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
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container">

            <?php if (isset($email)) : ?>
                <div class="alert alert-<?= $message['class'] ?>" role="alert">
                    <strong><?= $message['alert'] ?></strong>
                </div>
            <?php endif; ?>

            <section id="newsletter">
                <h3>Newsletter</h3>
                <form action="" method="get">
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="abc@mail.com" />
                        <small id="emailHelpId" class="form-text text-muted">Type you email</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>


            </section>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>