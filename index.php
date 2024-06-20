<?php 
  session_start();

  if(isset($_SESSION['user_name'])){
    $user_name = $_SESSION['name'];
    echo"bienvenue";
  }
  else {
    echo"Pas de sesion connecté ";
    header("Location: ./adminLogin/index.php");
  }
?>
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
                    <a href="#" class="active">
                        <span class="material-icons-sharp">grid_view</span>
                        <h3>Tableau De Bord</h3>
                    </a>
                    <a href="http://localhost/project_continouis/admin_index.php">
                        <span class="material-icons-sharp">person_outline</span>
                        <h3>Administrateur</h3>
                    </a>
                    <a href="#">
                        <span class="material-icons-sharp">receipt_long</span>
                        <h3>Plannings</h3>
                    </a>
                    <a href="./stats.php">
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
                <h1>Gestion de commandes</h1>

                <div class="date">
                    <?php echo date("d-m-Y");?>
                </div>

                <div class="insights">
                    <div class="sales">
                        <span class="material-icons-sharp">analytics</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total des commandes</h3>
                                <?php
                                   include_once 'conn.php';
                                   $nb_ele = "0";
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
                            <div class="progress"><div>
                               <canvas id="myChart1"></canvas>
                               </div>

                               <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                               <script>
                                 const ctx = document.getElementById('myChart1');

                                 new Chart(ctx, {
                                   type: 'pie',
                                   data: {
                                     labels: ['PointM', 'Commandes'],
                                     datasets: [{
                                       label: '# of Votes',
                                       data: [1000, <?php echo "$nb_ele";?>],
                                       borderWidth: 1
                                     }]
                                   },
                                   options: {
                                     scales: {
                                       y: {
                                         beginAtZero: true
                                       }
                                     }
                                   }
                                 });
                               </script>
                            </div>
                        </div>
                        <small class="text-muted">Dernière 24 Heures</small>
                    </div>
                    <!--END OF SALES-->
                    
                    <div class="icome">
                        <span class="material-icons-sharp">bar_chart</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Ventes Total</h3>
                                <?php
                                   $nb_vente = "0";
                                         # code...
                                         $requete = "SELECT montant_total FROM commande";
                                         $result = $conn->query($requete);

                                         while ($row = $result->fetch_assoc()) {
                                           $nb_vente = $nb_vente + $row["montant_total"];
                                          }
                                         echo "<h1>";
                                         echo "$nb_vente FCFA";
                                         echo "</h1>";
                                     
                                ?>
                            </div>
                            <div class="progress">
                                <div>
                                 <canvas id="myChart2"></canvas>
                                </div>

                                <script>
                                  const ctx = document.getElementById('myChart2');

                                  new Chart(ctx, {
                                    type: 'pie',
                                    data: {
                                      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                                      datasets: [{
                                        label: '# of Votes',
                                        data: [12, 19, 3, 5, 2, 3],
                                        borderWidth: 1
                                      }]
                                    },
                                    options: {
                                      scales: {
                                        y: {
                                          beginAtZero: true
                                        }
                                      }
                                    }
                                  });
                                </script>
                            </div>
                        </div>
                        <small class="text-muted">Dernière 24 Heures</small>
                    </div>
                    <!--END OF EXPENSES-->
                    
                    <div class="expenses">
                        <span class="material-icons-sharp">stacked_line_chart</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total de carton</h3>
                                <?php
                                   $nb_carton = "0";
                                         # code...
                                         $requete = "SELECT quantite FROM commande";
                                         $result = $conn->query($requete);

                                         while ($row = $result->fetch_assoc()) {
                                           $nb_carton = $nb_carton + $row["quantite"];
                                          }
                                         echo "<h1>";
                                         echo "$nb_carton";
                                         echo "</h1>";
                                     
                                ?>
                            </div>
                        </div>
                        <small class="text-muted">Dernière 24 Heures</small>
                    </div>
                    <!--END OF INCOMES-->
                </div>
                <!--END OF INSIGHTS-->
                <div class="recent-orders">
                    <h2>Récement</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Téléphone client</th>
                                <th>Nom client</th>
                                
                                <th>Premier versement</th>
                                <th>Reste à payer</th>
                                <th>Date de livraison</th>
                                <th>Montant Total</th>
                                <th>Nombre carton</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                <?php
                                include_once 'conn.php';

                                   if (isset($_GET['id'])) {
                                    $id =  $_GET['id'];
                                    $requete ="DELETE FROM `commande` WHERE `id`='$id'";
                                    $delete= $conn->query($requete)
                                    ;
                                   }
                                  
                                   // read all row from database table
                                   $sql = "SELECT * FROM commande ORDER BY id DESC LIMIT 7";
                                   $result = $conn->query($sql);


                                   if (!$result) {
                                  die("Invalid query: " . $conn->error);
                                   }

                                  //read data of each row
                                  while ($row = $result->fetch_assoc()) {
                                   echo "<tr>
                                   <td>" . $row["telephone"] . "</td>
                                   <td>" . $row["nom_client"] . "</td>
                                   <td>" . $row["PV"] . "</td>
                                   <td>" . $row["RAP"] . "</td>
                                   <td class='warning'>" . $row["date_de_livraison"] . "</td>
                                   <td class=''>" . $row["montant_total"] . "FCFA</td>
                                   <td class=''>" . $row["quantite"] . "</td>
                                   <td class='primary' data-open-modal><span class='material-icons-sharp'>app_registration</span></td>
                                   <td><a href='./index.php?id=".$row['id']."' class='btn'>supprimer</a></td>
                                   </tr>
                                   <dialog data-modal class='modal'>
                                   <div class='title primary'><big>Modifiez les informations de " . $row["nom_client"] . "</big></div>
                                   <div class='input-field'>
                                           <label>Nom<input type='text' placeholder=" . $row["nom_client"] . "></label>
                                           <label>Prenom<input type='text' placeholder=" . $row["prix_unitaire"] . "></label>
                                           <label>classe<input type='text' placeholder=" . $row["lieu_de_livraison"] . "></label>
                                   </div>
                                   <div class='input-field'>
                                           <label>id <input type='text' placeholder=" . $row["id"] . "></label>
                                           <label>Téléphone<input type='text' placeholder=" . $row["quantite"] . "></label>
                                           <label>genre<input type='text' placeholder=" . $row["taille_produit"] . "></label>
                                   </div>
                                   <div class='input-field'>
                                           <label>quartier<input type='text' placeholder=" . $row["date_de_commande"] . "></label>
                                           <label>né le<input type='text' placeholder=" . $row["date_de_livraison"] . "></label>
                                           <label>à<input type='text' placeholder=" . $row["montant_total"] . "></label>
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
                            <p>Hey, <b><?php// echo"$user_name"; ?></b></p>
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
                                                <h3>". $row["id"] ."</h3>
                                                <small class='text-muted'>". $row["montant_total"] ."</small>
                                            </div>
                                            <h5 class='primary'>". $row["lieu_de_livraison"] ."</h5>
                                            <h3>". $row["nom_client"] ."</h3>
                                        </div>
                                   
                                </div>";
                
                                   }
                            ?>
                    <div class="item add-product">
                        <div class="">
                            <span class="material-icons-sharp">add</span>
                            <h3>Ajouter un client</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="./index.js"></script>
    </body>
</html>