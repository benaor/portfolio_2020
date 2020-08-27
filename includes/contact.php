<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {

    $to = 'benjamingirard25@gmail.com';
    $subject = 'new mail from Portfolio: '.$_POST['name'];
    $from = $_POST['email'];
    
    // Pour envoyer du courrier HTML, l'en-tête Content-type doit être défini.
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    
    // Créer les en-têtes de courriel
    $headers .= 'From: '.$from."\r\n".
        'Reply-To: '.$from."\r\n" .
        'X-Mailer: PHP/' . phpversion();
    
    // Composer un simple message électronique HTML
    $message = '<html><body>';
    $message .= '<p>'.$_POST['message'].'</p>';
    $message .= '</body></html>';
    
    // Envoi d'email
    if(mail($to, $subject, $message, $headers)){
        $mailStatus = 'Votre message a été envoyé avec succès!';
    }else{    
        $mailStatus = 'Votre message n\'a pas été envoyé. une erreur est survenue.';
    }
} else {
    $mailStatus = '';
}
?>

<!-- Start contact section -->
<section class="contact-section offwhite-bg section-gap" id="contact-section">
    <div class="container">
        <div class="row">
            <div class="section-title col-lg-12">
                <h1>Contactez Moi</h1>
                <h3>Si vous avez un projet ou une demande particulière</h3>
            </div>
        </div>
        <form class="row" method="POST" action="" id="contact_form">
            <div id="result"></div>
            <div class="col-md-6">
                <input type="text" name="name" id="name" placeholder="Entrez votre nom" />
            </div>
            <div class="col-md-6">
                <input type="email" name="email" id="email" placeholder="Entrez votre Email" />
            </div>
            <div class="col-md-12">
                <textarea name="message" id="message" placeholder="Entrez votre message"></textarea>
                <button type="submit" class="send_btn" id="submit_btn">Envoyer le message !</button>
            </div>
            <p> <?= $mailStatus; ?> </p>
        </form>
    </div>
</section>
<!-- End contact section -->