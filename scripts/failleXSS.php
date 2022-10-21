<?php

//VERSION 1 (FORMULAIRE AVEC FAILLE)
if(isset($_GET['rechercheXSSFaille'])): ?>
<p>Aucun résultat pour <?php echo $_GET['rechercheXSSFaille']; ?></p>
<?php endif;



//VERSION 2 (FORMULAIRE AVEC ÉCHAPPEMENT CARACTÈRES)
if (isset($_GET['rechercheXSSFailleReparee'])): ?>
    <p>Aucun résultat pour <?php echo htmlentities($_GET['rechercheXSSFailleReparee']); ?></p>
<?php endif;