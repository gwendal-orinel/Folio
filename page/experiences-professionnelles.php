<title>Gwendal ORINEL - Expériences Professionelles </title>
<div class="col-sm-12">
    <div class="page-header text-center " style="margin-top: -20px; font-family:'Segoe Script'; color:rgb(96, 125, 139); ">
        <h3>Expériences Professionelles</h3>
    </div>
		<div class="col-sm-6" style="padding: 0px;">
        <?php $ligne=1;
        $liste_experiences->execute();
        while ($donnees = $liste_experiences->fetch()){ ?>
        <?php if($ligne==1){?>
            <div class="col-sm-12">
                <div class="panel panel-blue_grey" >
                    <div class="panel-heading"><?php echo $donnees['dates']; ?></div>
                    <div class="panel-body">
                        <?php echo $donnees['description']; ?>
                    </div>
                </div>
            </div>
        <?php } $ligne++; if($ligne==3){ $ligne=1; }} ?>
		</div>
		<div class="col-sm-6" style="padding: 0px;">
        <?php $ligne=1;
        $liste_experiences->execute();
        while ($donnees = $liste_experiences->fetch()){ ?>
        <?php if($ligne==2){?>
            <div class="col-sm-12">
                <div class="panel panel-blue_grey" >
                    <div class="panel-heading"><?php echo $donnees['dates']; ?></div>
                    <div class="panel-body">
                        <?php echo $donnees['description']; ?>
                    </div>
                </div>
            </div>
        <?php } $ligne++; if($ligne==3){ $ligne=1; }} ?>
		</div>
</div>
