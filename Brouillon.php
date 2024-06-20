<?php
while ($row = $result->fetch_assoc()) {
    echo "<tr>
    <td>" . $row["Nom_produit"] . "</td>
    <td>" . $row["Numero_produit"] . "</td>
    <td>" . $row["Etat_de_payement"] . "</td>
    <td class='warning'>" . $row["Statut_en_magasin"] . "</td>
    <td class='primary'>Details</td>
    </tr>";

    }

               echo     "<div class='item online'>
                        <div class='icon'>
                            <span class='material-icons-sharp'>"person"</span>
                        </div>    
                            <div class='right'>
                                <div class='info'>
                                    <h3>". $row["nom"] ."</h3>
                                    <small class='text-muted'>". $row["prenom"] ."</small>
                                </div>
                                <h5 class='sucess'>". $row["da_na"] ."</h5>
                                <h3>". $row["li_na"] ."</h3>
                            </div>
                       
                    </div>"
                    for ($i=0; $i =2 ; $i++) { 
                        # code...
                    }
                   
                    ?>