<title>Gwendal ORINEL - Compétences </title>
    <style>
        #competences button{
            margin-bottom: 5px;
        }
    </style>
<div class="col-sm-10 col-sm-offset-1" id="competences">
    <div class="page-header text-center text-muted" style="margin-top: -20px; font-family:'Segoe Script' ;color:rgb(96, 125, 139);">
        <h3>Compétences</h3>
    </div>
	<?php  $liste_competences->execute(); 
			while ($donnees = $liste_competences->fetch()){ 
			$data=explode(";",$donnees['contenu'])?>
	
    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo $donnees['nom']; ?>   :
                <?php if($donnees['niveau']=="Aucune"){?>
                    <p class="pull-right text-default"><?php echo $donnees['niveau']; ?>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                            <i class="fa fa-star-o" aria-hidden="true"></i>
                    </p>
                <?php  } ?>
				<?php if($donnees['niveau']=="Debutant"){?>
                    <p class="pull-right text-warning"><?php echo $donnees['niveau']; ?>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </p>
                <?php  } ?>
				<?php if($donnees['niveau']=="Intermediaire"){?>
                    <p class="pull-right text-primary"><?php echo $donnees['niveau']; ?>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </p>
                <?php  } ?>
				<?php if($donnees['niveau']=="Avancé"){?>
                    <p class="pull-right text-success"><?php echo $donnees['niveau']; ?>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </p>
                <?php  } ?>
				<?php if($donnees['niveau']=="Expert"){?>
                    <p class="pull-right text-success"><?php echo $donnees['niveau']; ?>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </p>
                <?php  } ?>
        </div>
        <div class="panel-body">
            <?php foreach($data as $item){ ?>
            <button type="button" class="btn btn-primary" aria-label="Left Align"><?php echo $item; ?></button>
            <?php  } ?>
        </div>
    </div>
    <?php  } ?>
</div>
