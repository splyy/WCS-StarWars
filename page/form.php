<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jediManager->setFirstName($_POST['firstname']);
    $jediManager->setLastName($_POST['lastname']);
    $jediManager->setSexe($_POST['sexe']);
    $jediManager->setFaction($_POST['faction']);

    if ($_POST['id'] !== "") {
        $jediManager->updateJedi($_POST['id']);
        header('Location: /?page=list&action=edit');
    } else {
        $jediManager->addJedi();
        header('Location: /?page=list&action=add');
    }

} else {
    if (isset($_GET["jid"])) {
        $id = $_GET["jid"];
        $jedi = $jediManager->getJedi($id);
        $firstname = $jedi["nom"];
        $lastname = $jedi["prenom"];
        $sexe = $jedi["sexe"];
        $faction = $jedi["faction"];
    }
?>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <form action="" method="post" role="form">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <legend>Deviens un Jedi</legend>

                <div class="form-group">
                    <label for="firstname">Nom</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Jean" value="<?php echo $firstname; ?>">
                </div>
                <div class="form-group">
                    <label for="lastname">Prénom</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Dupont" value="<?php echo $lastname; ?>">
                </div>
                <div class="form-group">
                    <label for="sexe">Sexe</label>
                    <select class="form-control" id="sexe" name="sexe">
                        <option value="homme">Homme</option>
                        <option value="femme">Femme</option>
                        <option value="wookie">Wookie</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="faction">Faction</label>
                    <select class="form-control" id="faction" name="faction">
                        <option value="rebel">L'Alliance Rebelle</option>
                        <option value="empire">L'Empire Galactique</option>
                        <option value="jedi">L'Ordre des Jedis</option>
                        <option value="sith">L'Ordre des Siths</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Postulez !</button>
            </form>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
    </div>

<?php }