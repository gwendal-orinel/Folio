<title>Gwendal ORINEL</title>
<blockquote class="col-sm-12">
    <div class="col-sm-11 col-sm-offset-1">
		<p class="text-center">
			<?php  $presentation->execute(); while ($donnees = $presentation->fetch()){ echo $donnees['contenu']; }?>
		</p>
    </div>
    <div class="col-sm-12" style="margin-top:20px;">
        <footer>Gwendal Orinel - <cite>
                <?php echo Age(); ?> ans</cite>
            <address>
                <?php  $localisation->execute(); while ($donnees = $localisation->fetch()){ echo $donnees['contenu']; }?>
            </address>
        </footer>
    </div>
</blockquote>