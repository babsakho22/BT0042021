<?php 
    require('Connexion.php');

    $sql = 'SELECT * FROM etudiants';
    
    $preparation = $db->prepare($sql);

    $preparation->execute();

    $customer = $preparation->fetchAll(PDO::FETCH_OBJ);


    require('header2.php');
?>


<div class="container">
        <div class=" mt-5">
            <div class="header">
                <h2>Tous les etudiants</h2>
            </div>

            <div class="body">
                <table class="table table-bordered">
                    <tr>
                        <th>ID  </th>
                        <th>Nom utilisateur  </th>
                        <th>Nom  </th>
                        <th>Prénom  </th>
                        <th>Email  </th>
                        <th>Age  </th>
                        <!-- <th>Genre</th> -->
                        <th>Niveau  </th>
                        <th>Tél  </th>
                        <th>Adresse  </th>
                        <th>Mot de passe  </th>
                        <th>Action  </th>
                    </tr>
                    <?php foreach($customer as $person): ?>
                    <tr>
                        <td><?=$person->id;  ?></td>
                        <td><?=$person->Nom_utilisateur;  ?></td>
                        <td><?=$person->Nom;  ?></td>
                        <td><?=$person->Prenom;  ?></td>
                        <td><?=$person->Email;  ?></td>
                        <td><?=$person->Age;  ?></td>
                      
                        <td><?=$person->Niveau;  ?></td>
                        <td><?=$person->Tel;  ?></td>
                        <td><?=$person->Adresse;  ?></td>
                        <td><?=$person->Mot_passe;  ?></td>
                        
                        <td>
                            <a href="modifier.php?id=<?= $person->id;?>" class=""><i class="fa fa-edit" style="font-size:15px;color:green"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a onclick="return confirm('Voulez-vous vraiment supprimer cet enrégistrement?')" href="supprimer.php?id=<?= $person->id;?>" class=""><i class="fa fa-trash-o" style="font-size:15px;color:red"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="details.php?id=<?= $person->id;?>" class=""><i class="fa fa-eye" style="font-size:15px;color:blue"></i></a>

                        </td>
                    </tr>

                    <?php endforeach; ?>


                </table>

            </div>

        </div>
    </div>

<?php require('footer.php'); ?>