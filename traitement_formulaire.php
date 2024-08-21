 <!-- <?php   
 $nom =$_POST['nom'];
 $telephone=$_POST['telephone'];
 $message=$_POST['message'];

 $destinataire="guymateke69@gmail.com";
 $sujet="Nouveau message de contact";
 $contenu="Nom: $nom\n";
 $contenu .="Téléphone:$telephone\n";
 $contenu .="Message:\n$message";

 $header="from:$nom <$destinataire>";
 if (mail($destinataire,$sujet,$contenu,$header)){
     echo "Votre message a été envoyé avec succès.";}
     else {
         echo "Une erreur s'est produite lors de l'envoi du message.";
 }
 


?>  -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $message = htmlspecialchars($_POST['message']);
    
    // Email où vous voulez recevoir les informations
    $to = 'guymateke69@gmail.com';
    $subject = 'Nouveau message du formulaire de contact';
    
    // Corps du message
    $body = "Nom: $nom\n";
    $body .= "Téléphone: $telephone\n";
    $body .= "Message:\n$message\n";
    
    // En-têtes de l'email
    $headers = "From: webmaster@example.com\r\n";
    $headers .= "Reply-To: $nom <$to>\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Envoi de l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
} else {
    echo "Méthode de requête non supportée.";
}
?>
