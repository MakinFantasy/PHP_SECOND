<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>PHP_SECOND_PAGE</title>
</head>

<body>
    <header class="header-wrapper">
        <img width="200px" class="img" src="../lab1/logo.png" alt="polytechlogo">
        <h2 class="header__full-name">Кулаков Иван группа 221-323</h2>
    </header>

    <main>
        <section>
            <div>
                <a class="btn-link" href="./index.php">Previous page</a>
                <textarea>
                <?php
                    $url = 'http://kulakovphp2.std-2176.ist.mospolytech.ru/index.php';
                    print_r(get_headers($url));
                ?>
                </textarea>
            </div>
        </section>
    </main>
</body>