<title>Gwendal ORINEL - Entreprises </title>
<div class="col-sm-10 col-sm-offset-1">
    <?php  $liste_entreprises->execute(); 
	while ($donnees = $liste_entreprises->fetch()){ ?>
        <div class="media">
            <div class="media-left">
                <a href="<?php echo $donnees['lien']; ?>" target="_blank">
                    <img class="media-object" src="<?php echo $donnees['icon']; ?>" title="Visiter le site">
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading"><?php echo $donnees['nom']; ?></h4>
                <?php echo $donnees['description']; ?>
            </div>
            <div class="media-right">
                <a href="<?php echo $donnees['localisation']; ?>" target="_blank">
                    <img class="media-object" src="src/localisation.jpg">
                </a>
            </div>
        </div>
    <?php  } ?>
</div>
