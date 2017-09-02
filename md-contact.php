    <?php
    // S'il y des données de postées
    if ($_SERVER['REQUEST_METHOD']=='POST') {
     
     
    // Récupération des variables et sécurisation des données
    $nom = htmlentities($_POST['Nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
    $email = htmlentities($_POST['Email']);
	$objet =   htmlentities($_POST['Sujet']);
    $message = htmlentities($_POST['Message']);
     
    // Variables concernant l'email
     
    $destinataire = 'aghiles12@gmail.com'; // Adresse email du webmaster (à personnaliser)
    $sujet = 'Demande de contact via http://aaitsalem.github.io/webeur/'; // Titre de l'email
    $contenu = '<html><head><title>Un contact</title></head><body>';
    $contenu .= '<p>Bonjour, vous avez reçu un message à partir de http://aaitsalem.github.io/webeur/</p>';
    $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
    $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
	$contenu .= '<p><strong>Sujet : </strong>: '.$objet.'</p>';
	
    $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
    $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
     
    // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
     
    // Envoyer l'email
    mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
    echo '<h2> Message envoy&eacute;!</h2>'; // Afficher un message pour indiquer que le message a été envoyé
    echo '<h2> Nous vous remercions pour votre demande.</h2>';
	echo '<h2> Nous vous r&eacute;pondrons dans les plus brefs d&eacute;lais.</h2>';
	// (2) Fin du code pour traiter l'envoi de l'email
    }
    ?>