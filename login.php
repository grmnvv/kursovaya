<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css" id="them">
	<link rel="icon" href="https://faviconka.ru/ico/1/faviconka.ru_1_117615.ico" type="image/x-icon" />
    <script>
        var results = document.cookie.match(/theme=(.+?)(;|$)/);
        let abc = document.getElementById('them');
        abc.href = 'css/login' + results[1];
    </script>
    <script src="js/logreg.js"></script>
</head>
<body>
<!--LOGIN DIV LOGIN DIV LOGIN DIV LOGIN DIV LOGIN DIV-->
<form method="post" class="container centered" action="back/log.php">
    <div class="container" id="vie">
        <div class="centered">
            <div class="login__text" id="logo">
                login
            </div>
            <div id="error">
                Неверный пароль!
            </div>
            <p style="width: 422px; padding: 0 0 20px 0">Email</p>
            <div class="login__insert">
                <input type="text" class="login__input__text" id="input" value="" placeholder="enter email" required name="email">
            </div>
            <hr>
            <p style="width: 422px; padding: 20px 0 20px 0">Password</p>
            <div class="login__insert" style="display: flex">
                <input type="password" class="login__input__text" value="" placeholder="enter password" name="password" required>
                <button class="login__input__button" type="submit" name="submit">
                    <svg width="13" height="8" viewBox="0 0 13 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.3536 4.35355C12.5488 4.15829 12.5488 3.84171 12.3536 3.64645L9.17157 0.464466C8.97631 0.269204 8.65973 0.269204 8.46447 0.464466C8.2692 0.659728 8.2692 0.976311 8.46447 1.17157L11.2929 4L8.46447 6.82843C8.2692 7.02369 8.2692 7.34027 8.46447 7.53553C8.65973 7.7308 8.97631 7.7308 9.17157 7.53553L12.3536 4.35355ZM0 4.5L12 4.5V3.5L0 3.5L0 4.5Z"/>
                    </svg>
                </button>
            </div>
            <hr>
            <div class="login__buttons">
                <button class="login__forgot">
                    <a href="back/sendemail.php" class="login__forgot_pass">forgot</a>
                </button>

                <button class="login__register">
                    <a href="registration.php" class="login__forgot_pass">register</a>
                </button>
            </div>
        </div>
    </div>
</form>


<script src="js/logreg.js"></script>
</body>
</html>

