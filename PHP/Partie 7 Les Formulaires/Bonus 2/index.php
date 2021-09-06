<?php
$uploadDir = 'img/';
$infoFile = pathinfo($_FILES['fileToUpload']['name']);
$fileName = basename($_FILES['fileToUpload']['name']);
$fileExtension = mime_content_type($_FILES['fileToUpload']['tmp_name']);
$uploadFile = $uploadDir . basename($_FILES['fileToUpload']['name']);
$fileSize = $_FILES['fileToUpload']['size'];
$maxSize = 4000000;
$extensionsAllowed = ["image/gif", "image/jpeg", "image/jpg", "image/png"]; 
$scan = scandir('img');


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="assets/uploadPreview.css" rel="stylesheet" type="text/css">
    <title>Module d'enregistrement d'images</title>
</head>

<body>
    <div class="header">
        <p class="title fw-light">Module d'enregistrement d'images.</p>
        <p class="fw-lighter">Mise en pratique PHP : Upload d'images.</p>
    </div>
    <div class="container">
        <div class="module border">
            <form action="index.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3 ps-3 pt-3">
                    <label for="file" class="form-label">Veuillez choisir une image :</label>
                    <img id="imgPreview">
                    <p><input type="file" name="fileToUpload" id="fileToUpload">
                        <p>
                            <button class="btn btn-dark" type="submit">
                                <span><i class="bi bi-upload"></i></span> UPLOAD
                            </button>
                </div>
            </form>


<?php
    if (!in_array($fileExtension,$extensionsAllowed)){
        ?><p><?="Votre fichier n'est pas une image et n'a pas pu être uploadé."?></p>
        <?php
    } else if($fileSize > $maxSize){
        ?><p><?="Votre fichier doit faire moins de 4 Mo."?></p>
        <?php
    } else {
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadDir . uniqid() . '.' . $infoFile['extension']);
        ?><p><?="Le fichier $fileName a bien été uploadé"?></p>
        <?php
    }

?>
        </div>
        <p class="pt-3 ps-3">Contenu du dossier images :</p>
        <?php
foreach($scan as $file) {
    if (!is_dir("img/$file")) {
       ?> <p class="ps-3"><?= $file?></p>
       <?php
    }
 }
?>
    </div>



    <script src="assets/uploadPreview.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>