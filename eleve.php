<?php include_once 'verif.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Comptabile" content="IE-edge">
        <meta name="viewport" content="width=device-wdth" initial-scale="1.0">
        <title>TB | Liste des élèves</title>
        <!--MATERIAL ICONS-->
        <link href="./font.css" rel="stylesheet">
        <!--STYLESHEET-->
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <div class="container">
            <aside>
                <div class="top">
                      <div class="logo">
                         <img src="./images/logo.png">
                         <h2>Ges <span class="danger">|  Ins</span></h2>
                      </div>
                      <div class="close" id="close-btn">
                         <span class="material-icons-sharp">close</span>
                      </div>
                </div>      
                <div class="sidebar">
                    <a href="index.php">
                        <span class="material-icons-sharp">grid_view</span>
                        <h3>Tableau De Bord</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">person_outline</span>
                        <h3>Administrateurs</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">receipt_long</span>
                        <h3>Plannings</h3>
                    </a>
                    <a href="./stats.php">
                        <span class="material-icons-sharp">insights</span>
                        <h3>Statistiques</h3>
                    </a>
                    <a href="./messages.php">
                        <span class="material-icons-sharp">mail_outline</span>
                        <h3>Messages</h3>
                        <span class="message-count">26</span>
                    </a>
                    <a href="#"  class="active">
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
                    <a href="./add.php">
                        <span class="material-icons-sharp">add</span>
                        <h3>Ajouter des commandes</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">logout</span>
                        <h3>Déconnexion</h3>
                    </a>
                </div>
            </aside>
            <!--END OF ASIDE-->
            <main>
                <h1>Tableau de  bord</h1>

                <div class="date">
                    <?php echo date("d-m-Y");?>
                </div>

               <!-- <div class="insights yes">
                    <div class="sales">
                        <span class="material-icons-sharp">analytics</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total d'Elèves</h3>
                                <?php
                                include_once 'conn.php';
                                         # code...
                                         $requete = "SELECT * FROM commande";
                                         $result = $conn->query($requete);

                                         while ($row = $result->fetch_assoc()) {
                                           $nb_ele = $nb_ele + 1;
                                          }
                                         echo "<h1>";
                                         echo "$nb_ele";
                                         echo "</h1>";
                                     
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>-->
                <!--END OF INSIGHTS-->
                
                <div class="recent-orders">
                    <h2>Récement</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Nom du client</th>
                                <th>Nb prod</th>
                                <th>Prix unitaire</th>
                                <th>Date de commande</th>
                                <th>Date de livraison</th>
                                <th>Lieu de livraison</th>
                                <th>Montant Total</th>
                                <th>Num réf</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                <?php                                  
                                   // read all row from database table
                                   $sql = "SELECT * FROM commande ORDER BY id DESC LIMIT 7";
                                   $result = $conn->query($sql);


                                   if (!$result) {
                                  die("Invalid query: " . $conn->error);
                                   }

                                  //read data of each row
                                  while ($row = $result->fetch_assoc()) {
                                   echo "<tr>
                                   <td>" . $row["nom_client"] . "</td>
                                   <td>" . $row["quantite"] . "</td>
                                   <td>" . $row["prix_unitaire"] . "</td>
                                   <td>" . $row["date_de_commande"] . "</td>
                                   <td>" . $row["date_de_livraison"] . "</td>
                                   <td>" . $row["lieu_de_livraison"] . "</td>
                                   <td class='warning'>" . $row["montant_total"] . "</td>
                                   <td>" . $row["num_ref"] . "</td>
                                   <td class='primary' data-open-modal><span class='material-icons-sharp'>app_registration</span></td>
                                    <td><a href=\"#\" onclick=\"return confirmDelete('./index.php?id=" . $row['id'] . "&code_com=" . $row['code_com'] . "', '" . $row['code_com'] . "')\"   class='btn'>supprimer</a></td>
                                   </tr>
                                   <dialog data-modal class='modal'>
                                   <div class='title primary'><big>Modifiez les informations de " . $row["nom_client"] . "</big></div>
                                   <div class='input-field'>
                                           <label>Nom<input type='text' placeholder=" . $row["nom_client"] . "></label>
                                           <label>Prenom<input type='text' placeholder=" . $row["prix_unitaire"] . "></label>
                                           <label>classe<input type='text' placeholder=" . $row["montant_total"] . "></label>
                                   </div>
                                   <div class='input-field'>
                                           <label>id <input type='text' placeholder=" . $row["id"] . "></label>
                                           <label>Téléphone<input type='text' placeholder=" . $row["lieu_de_livraison"] . "></label>
                                           <label>genre<input type='text' placeholder=" . $row["taille_produit"] . "></label>
                                   </div>
                                   <div class='input-field'>
                                           <label>quartier<input type='text' placeholder=" . $row["quantite"] . "></label>
                                           <label>né le<input type='text' placeholder=" . $row["date_de_commande"] . "></label>
                                           <label>à<input type='text' placeholder=" . $row["date_de_livraison"] . "></label>
                                   </div>
                                   <div class='endbtn'>
                                   <button data-close-modal class='closeBtn'>Fermer</button>
                                   <button data-close-modal class='closeBtn'>Mettre à jour</button>
                                   </div>
                                   </dialog>

                                   
                                   ";
                
                                   }
                               ?>
                               <script>
                            function confirmDelete(url, code_com) {
                                if (confirm("Voulez-vous vraiment supprimer cet élément ?")) {
                                    var enteredCode = prompt("Entrez le code de la commande ");
                                    if (enteredCode == code_com) {
                                        window.location.href = url;
                                        return true;
                                    } else {
                                        alert("Le code saisi ne correspond pas. Opération annulée.");
                                        return false;
                                    }
                                } else {
                                    return false;
                                }
                            }
                        </script>
                               <script>
                                   const openBtn = document.querySelector('[data-open-modal]')
                                   const closeBtn = document.querySelector('[data-close-modal]')
                                   const modal = document.querySelector('[data-modal]')
                           
                                   openBtn.addEventListener('click', () => {
                                       modal.showModal()
                                   })
                           
                                   closeBtn.addEventListener('click', () => {
                                       modal.close()
                                   })
                                </script>
                                <style>
                                dialog::backdrop{
                                    backdrop-filter: blur(2px);
                                }
                                .modal{
                                    position: relative;
                                    padding: 15px 30px;
                                    border: none;
                                    background: #f2f2f2;
                                    margin-top: 350px;
                                    margin-left: 650px;
                                    box-shadow: 10px 15px 15px 5px rgba(0, 0, 0, 0.2);
                        
                                }
                                .closeBtn{
                                    background: #111;
                                    border: none;
                                    padding: 15px 18px;
                                    color: #fff;
                                    position: relative;
                                    margin-top: 20px;
                                    margin-left: 10%;
                                    border-radius: 3px;
                                }
                                .title{
                                    position: relative;
                                    margin-top: 10px;
                                    display: flex;
                                }
                                .input-field{
                                    position: relative;
                                    display: flex;
                                    margin-top: 30px;
                                }
                                .input-field input{
                                    padding: 10px 15px;
                                    width: 100px;
                                    margin: 15px;
                                    border-radius: 10px;
                                    border:1px solid #222;
                                }
                                .endbtn{
                                    display:flex;
                                }
                            </style>
                        </tbody>
                    </table>
                    <a href="#">Voir Tout</a>
                </div>
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
                            <p>Hey, <b>David</b></p>
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
                    <h2>Derniers élèves inscrits</h2>
                            <?php                                  
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
                                                <h3>". $row["nom_client"] ."</h3>
                                                <small class='text-muted'>". $row["prix_unitaire"] ."</small>
                                            </div>
                                            <h5 class='primary'>". $row["date_de_commande"] ."</h5>
                                            <h3>". $row["lieu_de_livraison"] ."</h3>
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