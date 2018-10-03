<title>Gwendal ORINEL - Diplômes et Certifications </title>
<div class="list-group col-sm-10 col-sm-offset-1">
           <div class="page-header text-center text-muted" style="margin-top: -20px; font-family:'Segoe Script';color:rgb(96, 125, 139);">
               <h3>Diplômes et Certifications</h3>
           </div>
		<?php  $liste_diplomes->execute(); 
			while ($donnees = $liste_diplomes->fetch()){ ?>
           <a class="list-group-item">
               <h4 class="list-group-item-heading"><?php echo $donnees['titre']; ?></h4><span class="badge btn-default active " title="Durée de formation"><i class="fa fa-clock-o" aria-hidden="true"></i>    <?php echo $donnees['duree']; if($donnees['duree'] > 1){ echo " ans"; }else{ echo " an"; } ?></span>
               <p class="list-group-item-text"><?php echo $donnees['description']; ?></p>
           </a>
		<?php  } ?>
</div>