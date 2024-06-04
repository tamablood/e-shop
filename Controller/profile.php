<?php
include '..\config.php';
include '..\Model\user.php';

class Profile {
    function getUserProfile($user_id) {
        $db = config::getConnexion();
        $sql = "SELECT nom_user, email_user FROM users WHERE id_user = :user_id";

        try {
           
            $stmt = $db->prepare($sql);

            
            $stmt->bindParam(':user_id', $user_id);

            
            $stmt->execute();

           
            $userProfile = $stmt->fetch(PDO::FETCH_ASSOC);

           
            return $userProfile;
        } catch (Exception $e) {
            
            die('Error: ' . $e->getMessage());
        }
    }
}
?>
