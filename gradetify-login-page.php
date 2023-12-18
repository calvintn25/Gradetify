<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gradetify</title>
        <link rel="stylesheet" href="gradetify styles/gradetify-login-page.css">
        <link rel="stylesheet" href="gradetify styles/gradetify-login-page-general.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    </head>
    <body>
    <main>
        <div class="container-login-page">
            <div class="login-page">
                <div class="hello">
                    <p>Hello!</p>
                    <p>Welcome to Gradetify</p>
                </div>
                <img class="logo-gradetify" src="Logo Gradetify.png">
                <div class="started-button">
                    <p class="started-text">Let's get started!</p>

                    <form action="login.php" method="post">
                    
                    <div class="inputbox">
                        <div class="login-icon">
                            <span class="profile-image"></span>
                        </div>
                        <input class="input-bar" placeholder="Username" type="text" name="username">
                    </div>

                    <div class="inputbox2">
                        <div class="login-icon">
                            <span class="padlock-image"></span>
                            <!-- <img class="login-icon-picture" src="padlock-png-hd--1600.png"> -->
                        </div>
                        <input class="input-bar" placeholder="Password" type="password" name="password">
                    </div>

                    <button onclick="
                    moveLoginPage2();
                    " class="login-button-js login-button" type="submit">Login</button>
                </div>
            </div>
        </div>
    </form>
    </main>
    <script src="Gradetify script/gradetify-login-page.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
  </body>
</html>
