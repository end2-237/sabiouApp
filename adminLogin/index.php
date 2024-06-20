
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="log.php" method="post">
            <div class="header">
                <h1>connexion admin</h1>
            </div>
            <div class="space"></div>
            <div class="form">
                <div class="field">
                    <div class="input-field">
                       <input type="text" placeholder="User name" name="user" required>
                    </div>
                    <div class="input-field">
                       <input type="password" placeholder="Password" name="password" required>
                    </div>
                    <span class="error" name="erreur"></span>
                </div>
                <div class="submit">
                    <input type="submit" value="Connexion">
                </div>
                
            </div>
        </form>
        <div class="link">
                   <a href="#">mot de passe oublié?</a>
        </div>
    </div>
</body>
</html>