<?php
session_start();
$message = ($_SESSION['message']);
var_dump($message)
?>



<?php include_once __DIR__ . './assets/layout/header.php' ?>

<main id="site_main" style="height: 100vh;">

    <div class="container h-100">
        <div class="row py-5 h-100">
            <div class="col h-100 d-flex justify-content-center align-items-center bg-<?= $message['class'] ?>">
                <h1><?= $message['symbol'] ?></h1>
                <h1><?= $message['alert'] ?></h1>
            </div>
        </div>
    </div>
</main>

<?php include __DIR__ . './assets/layout/footer.php' ?>