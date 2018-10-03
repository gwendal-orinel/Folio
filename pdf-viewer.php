<?php
require("functions.php");
if(isset($_POST['id'])){ 
	$url_pdf->execute(array('id' => $_POST['id'])); 
	while ($donnees = $url_pdf->fetch()){
?>
	<object type="text/html" class="PDF col-xs-12" id="viewer-object" data="<?php echo $donnees['contenu']; ?>/preview"></object>
<?php } } ?>