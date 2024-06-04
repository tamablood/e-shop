<?php
session_start();
include '../Controller/usersC.php';

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'tama';

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérification des erreurs de connexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Traitement des données de connexion
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérification de l'email et du mot de passe dans la base de données
    $sql = "SELECT id_user, role FROM users WHERE email_user='$email' AND password ='$password'";
    $result = mysqli_query($conn, $sql);

    // Vérification si les données correspondent à un utilisateur existant
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $user_id = $row['id_user']; // Corrected variable name
        $role = $row['role'];

        session_start();
        $_SESSION['user_id'] = $user_id; // Storing user ID in session

        if ($role === 'admin') {
            header('location: afficherProduit.php?user_id=' . $user_id); // Redirect to admin page with user ID
        } elseif ($role === 'client') {
            header('location: index.php?user_id=' . $user_id); // Redirect to client page with user ID
        }
        // Add any other role conditions here
    } else {
        // Les informations de connexion sont incorrectes
        header('location: signin.php?error=incorrect');
    }
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <style>
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #eef1f3;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 450px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #191919;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #8d8d8d;
        }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #dbdbdb;
            border-radius: 3px;
            color: #191919;
        }

        input[type="submit"] {
            display: block;
            margin: 0 auto;
            background-color: #fff;
            color: #191919;
            border: 1px solid #191919;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #191919;
            color: #fff;
        }

        .form-footer {
            margin-top: 20px;
            text-align: center;
            color: #8d8d8d;
        }
    </style>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div class="container">
        <h2>Let's get started!</h2>

        <?php
        if (isset($_GET['error']) && $_GET['error'] === 'incorrect') {
            echo '<p style="color: red;">Identifiants incorrects. Veuillez réessayer.</p>';
        }
        ?>
        <form id="loginForm" method="post" action="log.php">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="g-recaptcha" data-sitekey="6LeGNzUjAAAAAPye1rqpJ2zACIyKXCT_xkMduHZR"></div> 
            <input type="submit" value="Se connecter">
           
        </form>
      
        <p class="form-footer">Not registered yet? <a href="signupFront.php">Sign up</a></p>
    </div>
</body>
</html>
