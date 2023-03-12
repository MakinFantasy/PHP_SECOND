<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>PHP_SECOND</title>
</head>

<body>
    <header class="header-wrapper">
        <img width="200px" class="img" src="./logo.png" alt="polytechlogo">
        <h2 class="header__full-name">Кулаков Иван группа 221-323</h2>
    </header>

    <main>
        <section class="form">
            <div class="form-wrap">
                <h3> Форма для обратной связи </h3>
                <form method="post" action="//httpbin.org/post">
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name" value="Ivan Kulakov"><br><br>
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" value="test@gmail.com"><br><br>
                    <label for="problem">Complaint</label><br>
                    <input type="radio" id="problem" name="problem"><br><br>
                    <label for="problem">Offer</label><br>
                    <input type="radio" id="problem" name="problem"><br><br>
                    <label for="problem">Thanks</label><br>
                    <input type="radio" id="problem" name="problem"><br><br>
                    <label for="message">Message:</label><br>
                    <input type="text" id="message" name="message"><br><br>
                    <label for="response">Email</label><br>
                    <input type="checkbox" id="response" name="response"><br><br>
                    <label for="response">SMS</label><br>
                    <input type="checkbox" id="response" name="response"><br><br>
                    <input type="submit" value="Submit">
                </form>
                <a class="btn-link" href="./second.php">Next page</a>
            </div>
        </section>
    </main>
</body>