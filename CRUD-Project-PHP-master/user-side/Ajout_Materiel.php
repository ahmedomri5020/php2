<?php
include_once('../database/config.php');
include_once('../controllers/StockController.php');

$stockController = new StockController();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['AjouterP'])) {
    $piece_name = $_POST['piece_name'];
    $qte = $_POST['qte'];

    $newMateriel = new Stock($piece_name, $qte);

    $stockController->insert($newMateriel);
    header("Location: ListeMateriel.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Matériel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"],
        .btn-secondary {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        .btn-secondary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Ajouter Matériel</h1>

    <form action="Ajout_Materiel.php" method="post" class="form-group">
        <div class="form-group">
            <label for="piece_name">Nom de Pièce :</label>
            <input type="text" class="form-control" name="piece_name" required>
        </div>

        <div class="form-group">
            <label for="qte">Quantité :</label>
            <input type="text" class="form-control" name="qte" required>
        </div>

        <input type="submit" class="btn btn-success" name="AjouterP" value="Ajouter">
        <a href="ListeMembres.php" class="btn btn-secondary">Retour</a>

    </form>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
