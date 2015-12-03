<?php
    if(isset($_POST["submit"])) {
//        var_dump($_POST);
//        var_dump($_FILES); // FILES est la variable super globale à utiliser
        $repertoire_upload = "c://xampp//htdocs//formulaireUploadFichiers//uploads//"; // préalablement créer dans windows
        $fichier_upload = $repertoire_upload . basename($_FILES["ma_photo"]["name"]);
        echo $fichier_upload;
        
            if(move_uploaded_file($_FILES["ma_photo"]["tmp_name"], $fichier_upload)) {
                echo "L'upload est réussi";
            } else {
                echo "ERREUR ...";
        }
    } // l'upload sera déplacé de tmp vers le dossier spécifié
// réponse avec var_dump($_POST) : array(1) { ["submit"]=> string(7) "Envoyer" } array(1) { ["ma_photo"]=> array(5) { ["name"]=> string(9) "README.md" ["type"]=> string(24) "application/octet-stream" ["tmp_name"]=> string(24) "C:\xampp\tmp\php24AC.tmp" ["error"]=> int(0) ["size"]=> int(0) } } 
// réponse : array(1) { ["ma_photo"]=> array(5) { ["name"]=> string(9) "README.md" ["type"]=> string(24) "application/octet-stream" ["tmp_name"]=> string(23) "C:\xampp\tmp\php6AB.tmp" ["error"]=> int(0) ["size"]=> int(0) } } 
// le fichier est dans un répertoire tmp : "C:\xampp\tmp\php6AB.tmp"

?>


<!DOCTYPE html>

<html>
    <head>
        <title>Formulaire pour uplaod/téléversement de fichiers</title>
    </head> 
        <body>
            <form method="POST" enctype="multipart/form-data">
                <input type="file" name="ma_photo">
                <input type="submit" name="submit" value="Envoyer">
            </form>
        </body>
       
</html>



