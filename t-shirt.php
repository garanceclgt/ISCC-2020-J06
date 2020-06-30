<?php
$nom_produit ="T-shirt simple";
$couleur ="blanc";
$prix = 10.5;
$disponible = "true";
$quantité = 10;
?>

<h3>Tshirt simple</h3>
    <p>Le nom du produit est <?php echo ?nom_produit ?></p>
    <p>Il reste <?php echo $quantité ?></p>
    <p>Le <?php echo $nom_produit?> est de couleur <?php echo $couleur?></p>

    <h4>Opération simple</h4>
    <p><Acheter 3 produits coûterait <?php
    $nombre= 10.50*3;
    echo $nombre?></p>
    <p>Acheter la totalité des produits coûterait