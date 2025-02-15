<?php include_once 'verif.php';?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comptabile" content="IE-edge">
    <meta name="viewport" content="width=device-wdth" initial-scale="1.0">
    <title>TB | Gestion des Inscritions</title>
    <!--MATERIAL ICONS-->
    <link href="./font.css" rel="stylesheet">
    <!--STYLESHEET-->
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./style_add.css">
</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="./images/logo.png">
                    <h2>Ges <span class="danger">| Ins</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="./index.php">
                    <span class="material-icons-sharp">grid_view</span>
                    <h3>Tableau De Bord</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>Administrateur</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>Plannings</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">insights</span>
                    <h3>Statistiques</h3>
                </a>
                <a href="messages.php">
                    <span class="material-icons-sharp">mail_outline</span>
                    <h3>Messages</h3>
                    <span class="message-count">26</span>
                </a>
                <a href="./eleve.php">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Liste Des Commandes</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">report_gmailerrorred</span>
                    <h3>Rapports</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">settings</span>
                    <h3>Paramètres</h3>
                </a>
                <a href="#" class="active">
                    <span class="material-icons-sharp">add</span>
                    <h3>Ajouter commande</h3>
                </a>
                <a href="deco.php">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Déconnexion</h3>
                </a>
            </div>
        </aside>
        <!--END OF ASIDE-->
        <main>
            <h1>Tableau de bord</h1>

            <div class="date">
                <?php echo date("d-m-Y");?>
            </div>
            <form action="./con-bd.php" method="post">
                <div class="wrapper">
                    <div class="title">
                        Nouvelle commande
                    </div>
                    <div class="form">
                        <div class="input_field code">
                            <label for="">Code de la commande</label>
                            <input type="text" class="input" name="code_com" placeholder="E4ADR7">
                        </div>
                        <div class="input_field">
                            <label for="">Nom du client </label>
                            <input type="text" class="input" name="nom_client" placeholder="Mohamadou sabiou">
                        </div>
                        <div class="input_field">
                            <label for="">Numéro réf </label>
                            <input type="text" class="input" name="num_ref" placeholder="#10239">
                        </div>

                        <div class="input_field">
                            <label for="">Téléphone client </label>
                            <input type="number" class="input" name="telephone" placeholder="690909090">
                        </div>
                        <div class="input_field">
                            <label for="">Adresse client</label>
                            <input type="text" class="input" name="adresse_client" placeholder="Douala RUE 5N 037">
                        </div>

                        <!--  selection du type de produit-->
                        <div class="input_field">
                            <div class="custom_select">
                                <label for="type_produit">Type de produit</label>
                                <select name="type_produit" class="input" id="type_produit">
                                    <option value="" selected>Selectionnez le type de produit</option>
                                    <option value="unique">Produit unique</option>
                                    <option value="carton">Produit en carton</option>
                                </select>
                            </div>
                        </div>


                        <div class="input_field">
                            <label for="">Prix unitaire</label>
                            <input type="number" class="input" name="prix" placeholder="120 FCFA">
                        </div>
                        <div class="input_field">
                            <label for="">Marque du produit</label>
                            <input type="text" class="input" name="mp" placeholder="Entrez la marque">
                        </div>
                        <div class="input_field">
                            <label for="">Date de commande</label>
                            <input type="date" class="input" name="date_de_commande">
                        </div>
                        <div class="input_field">
                            <label for="">Date de Livraison</label>
                            <input type="date" class="input" name="livraison">
                        </div>
                        <div class="input_field">
                            <label for="">Lieu de livraison</label>
                            <input type="text" class="input" name="lieu_de_livraison" placeholder="Douala, Ndokoti">
                        </div>

                        <!--<div class="input_field">
                            <label for="">Grammage</label>
                            <input type="number" class="input" name="taille" placeholder="Taille du produit ( en gramme)">
                            </div>
                        -->

                        <div class="input_field  off">
                            <div class="custom_select">
                                <label for="taille">Grammage</label>
                                <select name="taille" class="input">
                                    <option value="">Selectionnez le grammage</option>
                                    <option value="150">150 g</option>
                                    <option value="180">180 g</option>
                                    <option value="350">350 g</option>
                                    <option value="400">400 g</option>
                                </select>
                            </div>
                        </div>


                        <!--
                        <div class="input_field">
                            <label for="">Téléversser une image</label>
                            <input type="file" name="fichier" class>
                        </div>-->
                        <div class="input_field">
                            <label for="">Cout de transport:</label>
                            <input type="number" class="input" name="ct" placeholder="Prix du transport (FCFA)">
                        </div>

                        <div class="input_field messages off">
                            <p>La quantite est en carton pour les produits en carton</p>
                        </div>

                        <div class="input_field">
                            <label for="">Quantité </label>
                            <input type="number" class="input" name="quantite" placeholder="100">
                        </div>

                        <div class="input_field">
                            <label for="">Premier versement:</label>
                            <input type="number" class="input" name="PV" placeholder="100000 FCFA">
                        </div>
                        <div class="input_field terms">
                            <label for="" class="check">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <p>Accepter les terms et les conditions</p>
                        </div>
                        <div class="input_field">
                            <input type="submit" value="Confirmer commande" class="btn">
                        </div>
                    </div>
                </div>
            </form>


        </main>
        <!------------------------END MAIN----------------->
        <div class="right">
        <div class="top">
                    <button id="menu-btn">
                        <span class="material-icons-sharp">menu</span>
                    </button>
                    <div class="theme-toggler">
                        <span class="material-icons-sharp active">light_mode</span>
                        <span class="material-icons-sharp">dark_mode</span>
                    </div>
                    <div class="profile">
                        <div class="info">
                            <p>Hey, <b><?php echo"$user_name"; ?></b></p>
                            <small class="text-muted">Admin</small>
                        </div>
                        <div class="profile-photo">
                            <img src="./images/profile-1.jpg">
                        </div>
                    </div>
                </div>
            <!--END OF TOP-->
            <div class="recent-updates">
                <h2>Mise à Jour Récement</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./images/profile-2.jpg">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b> Petit text de test pour remplir</p>
                            <small class="text-muted">Il y a 2 Minutes</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./images/profile-3.jpg">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b> Petit text de test pour remplir</p>
                            <small class="text-muted">Il y a 2 Minutes</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./images/profile-4.jpg">
                        </div>
                        <div class="message">
                            <p><b>Mike Tyson</b> Petit text de test pour remplir</p>
                            <small class="text-muted">Il y a 2 Minutes</small>
                        </div>
                    </div>
                </div>
            </div>
            <!------------------------END OF RECENT UPDATES----------------->

            <div class="sales-analytics">
                <h2>Derniers Produits</h2>
                <?php
                            include_once 'conn.php';                                 
                                   // read all row from database table
                                   $sql = "SELECT * FROM commande ORDER BY id DESC LIMIT 3 ";
                                   $result = $conn->query($sql);


                                   if (!$result) {
                                  die("Invalid query: " . $conn->error);
                                   }
                                   $item_c = array('online', 'offline', 'customers');
                                  //read data of each row
                                  while ($row = $result->fetch_assoc()) {
                                    echo     "<div class='item customers'>
                                    <div class='icon'>
                                        <span class='material-icons-sharp'>person</span>
                                    </div>    
                                        <div class='right'>
                                            <div class='info'>
                                                <h3>". $row["Mp"] ."</h3>
                                                <small class='text-muted'>". $row["lieu_de_livraison"] ."</small>
                                            </div>
                                            <h5 class='primary'>". $row["ct"] ."</h5>
                                            <h3>". $row["montant_total"] ."</h3>
                                        </div>
                                   
                                </div>";
                
                                   }
                            ?>
                <div class="item add-product">
                    <div class="">
                        <span class="material-icons-sharp">add</span>
                        <h3>Ajouter un élève</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./index.js"></script>
</body>

</html>