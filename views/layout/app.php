<?php require_once '../classes/lib/ti.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exam</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
</head>
<body>
    <header>
        <nav class="navbar-b navbar-trans navbar-expand-md fixed-top">
            <?php startblock('nav') ?>
                
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        This is the base layout.
                    </div>
                 </div>
            </div>
            <?php endblock() ?>
        </nav>
    </header>
        <div class="container full-width">
            <?php startblock('content') ?>
            <?php endblock() ?>
        </div>
</body>
</html>