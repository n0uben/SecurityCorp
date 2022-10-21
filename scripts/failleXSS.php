<?php

//VERSION 1 (FORMULAIRE AVEC FAILLE)
if(isset($_POST['rechercheXSSFaille'])): ?>
<p>Aucun résultat pour <?php echo $_POST['rechercheXSSFaille']; ?></p>
<?php endif;



//VERSION 2 (FORMULAIRE AVEC ÉCHAPPEMENT CARACTÈRES)
if (isset($_POST['rechercheXSSFailleReparee'])): ?>
    <p>Aucun résultat pour <?php echo htmlentities($_POST['rechercheXSSFailleReparee']); ?></p>
<?php endif;