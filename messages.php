<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Comptabile" content="IE-edge">
        <meta name="viewport" content="width=device-wdth" initial-scale="1.0">
        <title>TB | Messages</title>
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
                    <a href="#"  class="active">
                        <span class="material-icons-sharp">mail_outline</span>
                        <h3>Messages</h3>
                        <span class="message-count">26</span>
                    </a>
                    <a href="./eleve.php">
                        <span class="material-icons-sharp">inventory</span>
                        <h3>Liste Des Elèves</h3>
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
                        <h3>Ajouter commande</h3>
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

                
                <!--END OF INSIGHTS-->
                <div class="recent-orders">
                    <h2>Nouveaux Méssages</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Nom produit</th>
                                <th>Matricule Elève</th>
                                <th>Payement Elève</th>
                                <th>Status Elève</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                <?php
                                include_once 'conn.php';
                                   // read all row from database table
                                   $sql = "SELECT * FROM commande LIMIT 5";
                                   $result = $conn->query($sql);


                                   if (!$result) {
                                  die("Invalid query: " . $conn->error);
                                   }

                                   //read data of each row
                                   while ($row = $result->fetch_assoc()) {
                                    echo "<tr>
                                    <td>" . $row["id"] . "</td>
                                    <td>" . $row["id"] . "</td>
                                    <td>" . $row["id"] . "</td>
                                    <td>" . $row["id"] . "</td>
                                    <td class='warning'>" . $row["id"] . "</td>
                                    <td class='primary'>Details</td>
                                    <td><a href='./index.php?id=".$row['id']."' class='btn'>supprimer</a></td>
                                    </tr>";
                 
                                    }
                               ?>
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
                                                <h3>". $row["id"] ."</h3>
                                                <small class='text-muted'>". $row["id"] ."</small>
                                            </div>
                                            <h5 class='primary'>". $row["id"] ."</h5>
                                            <h3>". $row["id"] ."</h3>
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