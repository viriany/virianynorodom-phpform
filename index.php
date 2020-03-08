<?php

if (isset($_POST['email'], $_POST['password'])) {

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=phpform;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $req = $bdd->prepare('INSERT INTO utilisateurs(email, password) VALUES(:email, :password)');

    $req->execute(array(
        'email' => $email,
        'password' => $password
    ));
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.3.0/dist/css/uikit.min.css" />

    <title>Sign up form</title>
</head>

<body>


    <div class="container">

        <div class="form">
            <div class="welcome">
                <h2 class="uk-text-bolder">WELCOME BACK</h2>
                <h4 class="uk-text-medium uk-text-light">Sign in to continue</h4>
            </div>


            <div>
                <form action="index.php" method="post">
                    <div class="uk-margin">
                        <div class="uk-inline uk-form-width-large">
                            <span for="name" class="uk-form-icon" uk-icon="icon: user"></span>
                            <input class="uk-input" type="email" name="email">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <div class="uk-inline uk-form-width-large">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                            <input class="uk-input" type="password" name="password">
                        </div>
                    </div>

                    <button type="submit" value="sign-up" class="uk-button uk-button-secondary uk-text-light">Submit</button>
                </form>
            </div>

            <div class="sign-in-with">
                <p class="uk-margin-small-bottom uk-margin-large-top uk-text-light">Sign in with</p>
                <div class="icon">
                    <a href="https://www.facebook.com/" uk-icon="facebook"></a>
                    <a href="https://www.linkedin.com/" uk-icon="linkedin"></a>
                    <a href="https://twitter.com/" uk-icon="twitter"></a>
                </div>
            </div>

        </div>

        <div class="image uk-text-center">
            <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                <img src="img/paint.jpg" alt="paint">
                <img class="uk-transition-fade uk-position-cover" src="img/paint-2.jpg" alt="">
            </div>
        </div>
    </div>

    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.0/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.3.0/dist/js/uikit-icons.min.js"></script>
</body>

</html>