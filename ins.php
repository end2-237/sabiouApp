<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style_add.css">
    <link rel="stylesheet" href="./style_add1.css">
</head>
<body>
<main>
                <div class="wrapper">
                    <div class="title">
                        Formulaire d'Enregistrement
                    </div>
                    <div class="form">
                        <div class="input_field">
                            <label for="">Nom</label>
                            <input type="text" class="input">
                        </div>
                        <div class="input_field">
                            <label for="">Prenom</label>
                            <input type="text" class="input">
                        </div>
                        <div class="input_field">
                            <label for="">Lieu de naissance</label>
                            <input type="text" class="input">
                        </div>
                        <div class="input_field">
                            <label for="">Date de naissance</label>
                            <input type="date" class="input">
                        </div>
                        <div class="input_field">
                            <label for="">Genre</label>
                            <div class="custom_select">
                                <select>
                                    <option value="">Selectionner</option>
                                    <option value="Homme">Homme</option>
                                    <option value="Femme">Femme</option>
                                </select>
                            </div>
                        </div>
                        <div class="input_field">
                            <label for="">Classe</label>
                            <div class="custom_select">
                                <select>
                                    <option value="">Selectionner</option>
                                    <option value="6 ième">6 ième</option>
                                    <option value="5 ième">5 ième</option>
                                </select>
                            </div>
                        </div>
                        <div class="input_field">
                            <label for="">Numéro de téléphone</label>
                            <input type="number" class="input">
                        </div>
                        <div class="input_field">
                            <label for="">Cartier</label>
                            <input type="text" class="input">
                        </div>
                        <div class="input_field terms">
                            <label for="" class="check">
                            <input type="checkbox" :checked>
                            <span class="checkmark"></span>
                            </label>
                            <p>Accepter les terms et les conditions</p>
                        </div>
                        <div class="input_field">
                            <input type="submit" value="Enregistrer"class="btn">
                        </div>
                    </div>
                </div>


            </main>  
</body>
</html>