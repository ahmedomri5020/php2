<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Emprunteur</title>
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
    <div class="container">
        <h1>Ajouter Emprunteur</h1>
        <form action="Ajout_Emprunteur.php" method="post" class="form-group">
            <label for="first_name">Prenom :</label>
            <input type="text" class="form-control" name="first_name" required><br>

            <label for="last_name">Nom :</label>
            <input type="text" class="form-control" name="last_name" required><br>

            <label for="tel">Telephone :</label>
            <input type="tel" class="form-control" name="tel" required><br>

            <label for="email">E-mail :</label>
            <input type="email" class="form-control" name="email" required><br>

            <label for="cin">CIN :</label>
            <input type="text" class="form-control" name="cin" required><br>

            <input type="submit" class="btn btn-primary" name="AjouterE" value="Ajouter">
            <a href="ListeMembres.php" class="btn btn-secondary">Retour</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
