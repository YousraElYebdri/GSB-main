<div>
    <form method="POST" action="index.php?uc=suivreFichesFrais&action=voirFiches">
        <div>
            <label for="name">Choisir le visiteur: </label>
            <select name="visiteur" id="name">
                <?php foreach ($visiteurs as $visiteur) { ?>
                    <option value="<?php echo $visiteur['id'] ?>"> <?php echo $visiteur['nom'] ." ".$visiteur['prenom']?></option>
                <?php } ?>
            </select>
            <select name="mois" id="name">
                <?php foreach ($date as $mois) { ?>
                    <option value="<?php echo $mois[0] ?>"> <?php echo $mois['date']  ?></option>
                <?php } ?>
            </select>
            <input type="submit" value="Envoyer">
        </div>
        <?php if(isset($curr_user) == true){ ?>
        <div>
            <h4>Visiteur : <?php echo $curr_user['nom'].' '. $curr_user['prenom']  ?></h4>
        </div>
        <?php }?>
    </form>
</div>

