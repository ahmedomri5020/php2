<?php
include_once('../database/config.php');
include_once('../controllers/UtilisateurController.php');

$utilisateurController = new UtilisateurController();
$allUsers = $utilisateurController->utilisateurList();
if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST["Connecter"])) {
    $enteredUsername = $_POST['username'];
    $enteredPassword = $_POST['password'];
    
    foreach ($allUsers as $user) {
        if ($user['username'] === $enteredUsername && $user['password'] === $enteredPassword) {
            header("Location: home.php");
            exit();
        }
    }
    $url = 'login.php?showAlert=true';
    header('Location: ' . $url);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <style>
        body {
            background-color: #3498db;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative; /* Position relative pour que les éléments internes utilisent position: absolute */
        }
        .form_main {
            width: 280px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: rgb(255, 255, 255);
            padding: 30px 30px 30px 30px;
            border-radius: 30px;
            box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.062);
            margin-top: -58px;
            margin-left: 50px;
            
        }
  
        .heading {
            font-size: 2.5em;
            color: #2e2e2e;
            font-weight: 700;
            margin: 15px 0 30px 0;
        }
  
        .inputContainer {
            width: 100%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }
  
  .inputIcon {
    position: absolute;
    left: 10px;
  }
  
  .inputField {
    width: 100%;
    height: 40px;
    background-color: transparent;
    border: none;
    border-bottom: 2px solid rgb(173, 173, 173);
    border-radius: 30px;
    margin: 10px 0;
    color: black;
    font-size: .8em;
    font-weight: 500;
    box-sizing: border-box;
    padding-left: 30px;
  }
  
  .inputField:focus {
    outline: none;
    border-bottom: 2px solid rgb(199, 114, 255);
  }
  
  .inputField::placeholder {
    color: rgb(80, 80, 80);
    font-size: 1em;
    font-weight: 500;
  }
  
  #button {
    position: relative;
    width: 100%;
    border: 2px solid #8000ff;
    background-color: #8000ff;
    height: 40px;
    color: white;
    font-size: .8em;
    font-weight: 500;
    letter-spacing: 1px;
    border-radius: 30px;
    margin: 10px;
    cursor: pointer;
    overflow: hidden;
  }
  
  #button::after {
    content: "";
    position: absolute;
    background-color: rgba(255, 255, 255, 0.253);
    height: 100%;
    width: 150px;
    top: 0;
    left: -200px;
    border-bottom-right-radius: 100px;
    border-top-left-radius: 100px;
    filter: blur(10px);
    transition-duration: .5s;
  }
  
  #button:hover::after {
    transform: translateX(600px);
    transition-duration: .5s;
  }
  
  .signupContainer {
    margin: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 20px;
  }
  
  .signupContainer p {
    font-size: .9em;
    font-weight: 500;
    color: black;
  }
  
  .signupContainer a {
    font-size: .7em;
    font-weight: 500;
    background-color: #2e2e2e;
    color: white;
    text-decoration: none;
    padding: 8px 15px;
    border-radius: 20px;
  }
  .cyberrobot-title {
            position: absolute;
            top: 20px;
            left: 20px; /* Aligner le titre à gauche */
            font-size: 2em;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            /* Autres styles que vous souhaitez appliquer */
        }
        #button {
        /* Vos autres styles pour le bouton */
        background-color: #3498db; /* Couleur du fond de la page */
    }
        .cyberrobot-image {
            width: 80px; /* Ajustez la taille de l'image selon vos besoins */
            height: auto;
            margin-left: -1030px; /* Espacement entre le titre et l'image */
            top: 4px; /* Ajuster la position verticale si nécessaire */
            position: absolute;
        }
        .container {
            margin-left: 300px; /* Espacement entre le formulaire et le titre/image */
        }
  
  
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <form class="form_main p-4 border rounded" method="post" action="login.php">
                <h2 class="heading text-center mb-4">Login</h2>
                <div class="form-group inputContainer">
                    <svg viewBox="0 0 16 16" fill="#2e2e2e" height="16" width="16" xmlns="http://www.w3.org/2000/svg" class="inputIcon"></svg>
                    <input placeholder="Username" id="username" class="form-control inputField" type="text" name="username">
                </div>
                <div class="form-group inputContainer">
                    <svg viewBox="0 0 16 16" fill="#2e2e2e" height="16" width="16" xmlns="http://www.w3.org/2000/svg" class="inputIcon"></svg>
                    <input placeholder="Password" id="password" class="form-control inputField" type="password" name="password">
                </div>
                <input type="submit" value="Connecter" name="Connecter" id="button" class="btn btn-primary btn-block">
            </form>
        </div>
    </div>
</div>

<h1 class="cyberrobot-title">CyberRobot</h1>
<img class="cyberrobot-image" src="392758040_807265274736959_3177572792725712946_n.png" alt="Image CyberRobot">

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const urlParams = new URLSearchParams(window.location.search);
        const showAlert = urlParams.get('showAlert');
        if (showAlert === 'true') {
            alert("Incorrect username or password");
        }
    });
</script>

</body>
</html>
