<title>Gwendal ORINEL - Projets MSIR SIIC </title>
<script language="JavaScript">

    function afficher(atype){ //affichage des articles filtrés
        document.getElementById('viewer').innerHTML = '<div id=\"loading\" class=\"text-center\"><i class=\"fa fa-spinner fa-pulse fa-3x fa-fw\"></i></br><cite>Chargement..</cite></div>';
        document.getElementById('loading').visibility = 'Visible';
        listed = document.getElementsByName("listeitem");
        for(var x=0;x<listed.length;x++){  listed[x].className = "list-group-item";  }
        document.getElementById(atype).className = "list-group-item active";


        var path = "pdf-viewer.php";
        //path = path.replace('nb', atype );
        $.ajax({
            type: "POST",
            data: "id=" + atype ,
            url: path,
            success: function(htmlResponse) {
                if (htmlResponse == '') {
                    document.getElementById('viewer').innerHTML = '<div class=\"alert alert-info\">Document non trouvé !</div>'
                } else {
                    document.getElementById('viewer').innerHTML = htmlResponse;
                    document.getElementById('viewer-object').style.height = "500px";
                }
            }
        });
    }
</script>
<div class="col-sm-3 col-xs-12">
    <div class="list-group">
         <?php  $liste_msir->execute(); 
				while ($donnees = $liste_msir->fetch()){ ?>
            <button type="button" name="listeitem" id="<?php echo $donnees['id']; ?>" class="list-group-item" onclick="afficher(this.id)"><?php echo $donnees['titre']; ?></button>
        <?php  } ?>
    </div>
</div>
<div class="col-sm-9 col-xs-12" id="viewer"></div>
<script>
    afficher('40');
</script>