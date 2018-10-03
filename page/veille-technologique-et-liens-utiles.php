<title>Gwendal ORINEL - Liens Utiles </title>
<div class="container-fluid">
    <div class="col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading text-center">Liens Ressources</div>
        </div>
    </div>
    <?php 
	$liste_lien_ressources->execute(); 
	$img_dir="src/";
	while ($donnees = $liste_lien_ressources->fetch()){ 
			$data=explode("##",$donnees['contenu']); ?>
                <div class="col-lg-3 col-sm-4 col-md-3 col-xs-6" >
                    <div class="thumbnail">
                        <a href="<?php echo $data[0]; ?>" target="_blank">
                            <div style="max-width: 135px; max-height: 135px" class="center-block">
                                <img src="<?php echo $img_dir.$data[1]; ?>" style="width: 100%; height: 100%;">
                            </div>
                            <div class="caption">
                                <h5 class="text-center"><?php echo $donnees['titre']; ?></h5>
                            </div>
                        </a>
                    </div>
                </div>
    <?php  } ?>

    <div class="col-xs-12">
        <div class="panel panel-green">
            <div class="panel-heading text-center">Liens Utiles</div>
            <div class="list-group">
               <?php  $liste_liens_utiles->execute(); 
				while ($donnees = $liste_liens_utiles->fetch()){ ?>
                        <a href="<?php echo $donnees['contenu']; ?>" class="list-group-item text-center" target="_blank"><?php echo $donnees['titre']; ?></a>
                <?php  } ?>
            </div>
        </div>
    </div>
</div>