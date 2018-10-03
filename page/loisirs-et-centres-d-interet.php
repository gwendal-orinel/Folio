<title>Gwendal ORINEL - Loisirs et Centres d'intérêt </title>
<div class="col-md-12">
    <div class="page-header text-center text-muted" style="margin-top: -20px; font-family:'Segoe Script' ;color:rgb(96, 125, 139);">
        <h3>Loisirs et Centres d'intérêt</h3>
    </div>
    <div class="col-md-12">
        <p>
        <div class="btn btn-default">Centres d'intérêt</div>
        </p>
    </div>
    <?php  $liste_interets->execute(); 
				while ($donnees = $liste_interets->fetch()){ ?>
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo $donnees['icon']; ?>" >
                    <div class="caption">
                        <h5 class="text-center"><?php echo $donnees['nom']; ?></h5>
                    </div>
                </div>
            </div>
    <?php  } ?>
    <div class="col-md-12">
        <p>
            <div class="btn btn-default">Loisirs</div>
        </p>
    </div>
    <?php  $liste_loisirs->execute(); 
				while ($donnees = $liste_loisirs->fetch()){ ?>
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo $donnees['icon']; ?>" >
                    <div class="caption">
                        <h5 class="text-center"><?php echo $donnees['nom']; ?></h5>
                    </div>
                </div>
            </div>
    <?php  } ?>
</div>
