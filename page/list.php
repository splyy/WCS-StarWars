<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $id = $_POST['jid'];
    if(isset($_POST['removeJedi'])){
        $jediManager->removeJedi($id);
        header('Location: /?page=list&action=remove');
    }
    if(isset($_POST['updateJedi'])){
        header('Location: /?page=form&jid='.$id);
    }
}

$data = $jediManager->listJedi();

if (isset($_GET["action"])):
    if ($_GET["action"] == "add"): ?>
        <div class="alert alert-success" role="alert"><strong>Congrats!</strong> Your Jedi has been added in our list :)</div>
    <?php endif;
    if ($_GET["action"] == "edit"): ?>
        <div class="alert alert-info" role="alert"><strong>Thanks!</strong> Your Jedi has been updated :D</div>
    <?php endif;
    if ($_GET["action"] == "remove"): ?>
        <div class="alert alert-danger" role="alert"><strong>Oups!</strong> Your Jedi has been deleted :(</div>
    <?php endif;
endif;

?>

<div class="row">
    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading text-center">Liste des Jedis</div>
            <form action="" method="POST" id="formList" name="formList">
                <input type="hidden" name="jid" id="jid" value="">
                <table class="table">
                    <tr>
                        <th class="text-center">Prénom</th>
                        <th class="text-center">Nom</th>
                        <th class="text-center">Sexe</th>
                        <th class="text-center">Faction</th>
                        <th class="text-center">DO IT</th>
                    </tr>
                    <?php foreach ($data as $record):
                        switch ($record['faction']) {
                            case "rebel":
                                $faction = "L'Alliance Rebelle";
                                break;
                            case "empire":
                                $faction = "L'Empire Galactique";
                                break;
                            case "jedi":
                                $faction = "L'Ordre des Jedis";
                                break;
                            case "site":
                                $faction = "L'Ordre des Siths";
                                break;
                            default :
                                $faction = "Inconnue aux bataillons";
                                break;
                        }
                    ?>
                        <tr>
                            <td class="text-center"><?php echo $record['prenom']; ?></td>
                            <td class="text-center"><?php echo $record['nom']; ?></td>
                            <td class="text-center form-sexe"><?php echo $record['sexe']; ?></td>
                            <td class="text-center"><?php echo $faction; ?></td>
                            <td class="text-center">
                                <button name="updateJedi" type="submit" id="updateJedi_<?php echo $record['id']; ?>" class="btn btn-default" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-pencil listUpdate" aria-hidden="true"></span>
                                </button>
                                <button name="removeJedi" type="submit" id="removeJedi_<?php echo $record['id']; ?>" class="btn btn-default" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-remove listRemove" aria-hidden="true"></span>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </form>
        </div>
    </div>
</div>