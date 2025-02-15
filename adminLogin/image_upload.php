<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload image</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <h3><label for="image">Choisissez une image à télécharger:</label></h3>
            <input type="file" name="image" id="image" required>
            <input type="submit" value="Telecharger">
        </form>
    </div>
</body>

</html>