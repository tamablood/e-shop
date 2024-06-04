<?php
include '../Controller/usersC.php';
$user=new usersC();

if(

    isset($_POST['register-nom_user'])
    &&isset($_POST['register-prenom_user'])
    &&isset($_POST['register-num_tel'])
    &&isset($_POST['register-adresse_user'])
    &&isset($_POST['register-role'])
    &&isset($_POST['register-email_user'])
    &&isset($_POST['register-password'])

){
    $users = new users($_POST['register-nom_user'],
    $_POST['register-prenom_user'],
    $_POST['register-num_tel'],
    $_POST['register-adresse_user'],
    $_POST['register-role'],
    $_POST['register-email_user'],
    $_POST['register-password']);
    $user->ajouteruser($users);
    header('Location: login.php');

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
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

        input[type="text"], input[type="email"], input[type="password"], select {
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
        <form id="myForm" method="post">
            <div class="form-group">
                <label for="nom">Name</label>
                <input type="text" id="nom" name="register-nom_user" >
                <span id="errornom"></span>
            </div>
            <div class="form-group">
                <label for="prenom">First name</label>
                <input type="text" id="prenom" name="register-prenom_user" >
                <span id="errorprenom"></span>
            </div>
            <div class="form-group">
                <label for="adresse"> Phone num</label>
                <input type="text" id="num" name="register-num_tel" >
                <span id="errornumero"></span>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" id="adresse" name="register-adresse_user" >
                <span id="erroradresse"></span>
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select id="role" name="register-role">
                    <option value="client">Client</option>
                </select>
                <span id="errorrole"></span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="mail" name="register-email_user" >
                <span id="erroremail"></span>
            </div>
            <div class="form-group">
                <label for="motdepasse">Password</label>
                <input type="password" id="mdp" name="register-password" >
                <span id="error"></span>
            </div>
            <div class="g-recaptcha" data-sitekey="6LeGNzUjAAAAAPye1rqpJ2zACIyKXCT_xkMduHZR"></div> 
            <input type="submit" value="Register">
      
        </form>
    
       <!-- <p class="form-footer">Déjà inscrit ? <a href="signinFront.php">Se connecter</a></p>-->
    </div>


   
</body>
</html>
