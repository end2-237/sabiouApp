<?php include_once '../verif.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Administrateur</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="container">
        <h2 class="welcome">Welcome Admin </h2>

        <div class="admin_details">
            <img src="<?php echo $user_pp; ?>" alt="Photo de profil" class="profile">
            <div class="">
                <h3><?php echo htmlspecialchars($user_name); ?></h3>
                <h5><?php echo htmlspecialchars($user_id); ?></h5>
            </div>
        </div>

        <div class="settings">
            <div class="items">
                <span class="material-symbols-outlined">image</span>
                <a href="image_upload.php">
                   <p class="itemsdet">Changer votre photo de profil</p>
                </a>
            </div>
            <div class="items">
                <span class="material-symbols-outlined">settings</span>
                <p class="itemsdet">Modifier votre mot de passe</p>
            </div>
            <div class="items">
                <span class="material-symbols-outlined">info</span>
                <p class="itemsdet">Help center!</p>
            </div>
            <div class="items">
                <span class="material-symbols-outlined">grid_view</span>
                <a href="../index.php">
                    <p class="itemsdet">Tableau de bord</p>
                </a>
            </div>
        </div>
    </div>
</body>

</html>