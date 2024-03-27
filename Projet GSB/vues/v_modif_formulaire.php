<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Modifier un rapport</title>
    <link href="../CSS/style.css" type="text/css" rel="stylesheet" media="all">
</head>
<body>
    <h1>Modifier un rapport</h1>
    <form method="POST" action="../controleurs/c_modifier_rapport_action.php">
        <label for="motif">Motif de la visite :</label>
        <input type="text" name="motif" id="motif" value="Motif existant du rapport" required><br><br>

        <label for="bilan">Bilan de la visite :</label>
        <textarea name="bilan" id="bilan" rows="4" required>Contenu existant du bilan</textarea><br><br>

        <input type="submit" value="Enregistrer les modifications">
    </form>
</body>
</html>
