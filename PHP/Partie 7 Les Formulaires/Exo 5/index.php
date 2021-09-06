<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Exo 5</title>
</head>

<body>
    <div class="container">
        <form action="index.php" method="POST">
            <div class="mb-3">
                <label for="civility-select">Civilité :</label>
                <select class="form-select form-select-md mb-3" name="civility">
                    <option selected value="M.">M.</option>
                    <option value="Mme">Mme</option>
                    <option value="Mx">Mx</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="firstname" class="form-label">Prenom :</label>
                <input type="text" class="form-control" id="firstname" name="firstname">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Nom :</label>
                <input type="text" class="form-control" id="lastname" name="lastname">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>