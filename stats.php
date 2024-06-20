<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Comptabile" content="IE-edge">
        <meta name="viewport" content="width=device-wdth" initial-scale="1.0">
        <title>TB | Statistiques</title>
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
                    <a href="#"  class="active">
                        <span class="material-icons-sharp">insights</span>
                        <h3>Statistiques</h3>
                    </a>
                    <a href="./messages.php">
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
                        <h3>Ajouter produits</h3>
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
                <div class="progress"><div>
                               <canvas id="myChart1"></canvas>
                               </div>

                               <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                               <script>
                                 const ctx = document.getElementById('myChart1');

                                 new Chart(ctx, {
                                   type: 'bar',
                                   data: {
                                     labels: ['Janvier','Février','Mars','Avril','Mai','juin','Juillet','Aout','Septembre','Octobre','Novembre','Decembre'],
                                     datasets: [{
                                       label: 'nombre de commandes variantes',
                                       data: [10, 24,34,37,0,0,0,0,0,0,0,0],
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
                    <h2>Récement</h2>
                    <div class="item online">
                        <div class="icon">
                            <span class="material-icons-sharp">shopping_cart</span>
                        </div>    
                            <div class="right">
                                <div class="info">
                                    <h3>ONLINE ORDERS</h3>
                                    <small class="text-muted">Déniere 24 Heures</small>
                                </div>
                                <h5 class="sucess">+39%</h5>
                                <h3>3849</h3>
                            </div>
                       
                    </div>
                    <div class="item offline">
                        <div class="icon">
                            <span class="material-icons-sharp">local_mall</span>
                        </div>
                            <div class="right">
                                <div class="info">
                                    <h3>OFFLINE ORDERS</h3>
                                    <small class="text-muted">Déniere 24 Heures</small>
                                </div>
                                <h5 class="danger">-17%</h5>
                                <h3>2681</h3>
                            </div>
                    </div>
                    <div class="item customers">
                        <div class="icon">
                            <span class="material-icons-sharp">person</span>
                        </div> 
                            <div class="right">
                                <div class="info">
                                    <h3>Nouveaux Articles</h3>
                                    <small class="text-muted">Déniere 24 Heures</small>
                                </div>
                                <h5 class="sucess">+25%</h5>
                                <h3>8439</h3>
                            </div>
                    </div>
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