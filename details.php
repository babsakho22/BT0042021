<?php

    require ('Connexion.php');
    require ('header2.php');


    $id = $_GET['id'];

    $sql = 'SELECT * FROM etudiants WHERE id=:id';

    $preparation = $db->prepare($sql);

    ?>

<?php if ($preparation->execute([':id' => $id])): 

$customer = $preparation->fetchAll(PDO::FETCH_OBJ);


?>


<div class="container">
        <div class=" mt-5">
            <div class="header">
                <h2>Informations de L'Etudiant</h2>
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

                    </tr>

                    <?php endforeach; ?>


                </table>

            </div>

        </div>
    </div>
    <?php endif; ?>

<br>
<br>
<br>
<br>
<br>
<br>
<?php require('footer.php'); ?>