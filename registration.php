
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
	<link rel="icon" href="https://faviconka.ru/ico/1/faviconka.ru_1_117615.ico" type="image/x-icon" />
    <link rel="stylesheet" href="css/login.css" id="them">
    <script>
        var results = document.cookie.match(/theme=(.+?)(;|$)/);
        let abc = document.getElementById('them');
        abc.href = 'css/login' + results[1];
    </script>
</head>
<body>
<!--REGISTRATION DIV REGISTRATION DIV REGISTRATION DIV REGISTRATION DIV REGISTRATION DIV-->
<form method="post" class="container centered" action="back/reg.php">
    <div class="container" id="vie">
        <div class="centered">
            <div class="login__text" id="logo">
                register
            </div>
            <div id="error">
                Введите свой email!
            </div>
            <p style="width: 422px; padding: 0 0 20px 0">Email</p>
            <div class="login__insert">
                <input type="email" class="login__input__text" id="input" value="" placeholder="enter email" required name="email">
            </div>
            <hr>
            <p style="width: 422px; padding: 0 0 20px 0">Username</p>
            <div class="login__insert">
                <input type="text" class="login__input__text" id="input" value="" placeholder="enter username" required name="username">
            </div>
            <hr>
            <p style="width: 422px; padding: 0 0 20px 0">Password</p>
            <div class="login__insert" style="display: flex">
                <input type="password" class="login__input__text" value="" placeholder="enter password" name="password" required>
                <button class="login__input__button" type="submit" name="submit">
                    <svg class = "svg" width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.3536 4.35355C12.5488 4.15829 12.5488 3.84171 12.3536 3.64645L9.17157 0.464466C8.97631 0.269204 8.65973 0.269204 8.46447 0.464466C8.2692 0.659728 8.2692 0.976311 8.46447 1.17157L11.2929 4L8.46447 6.82843C8.2692 7.02369 8.2692 7.34027 8.46447 7.53553C8.65973 7.7308 8.97631 7.7308 9.17157 7.53553L12.3536 4.35355ZM0 4.5L12 4.5V3.5L0 3.5L0 4.5Z"/>
                    </svg>
                </button>
            </div>
            <hr>
        </div>
    </div>
</form>


<script src="js/logreg.js"></script>
</body>
</html>

