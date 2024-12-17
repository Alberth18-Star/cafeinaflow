<?php
if (isset($_POST['registrar'])) {
    if (!empty($_POST['nombre']) && !empty($_POST['nombreArt']) && !empty($_POST['email']) && !empty($_POST['telefono'])) {
        $nombre = $_POST['nombre'];
        $nombreArt = $_POST['nombreArt'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        
        $header = "From: alberthrosario@gmail.com\r\n";
        $header .= "Reply-To: alberthrosario@gmail.com\r\n";
        $header .= "X-Mailer: PHP/" . phpversion();
        
        $mail = mail($email, $nombreArt, $telefono, $header);
        
        if ($mail) {
            echo "<h4>Email Enviado Exitosamente</h4>";
        } else {
            echo "<h4>Error al enviar el email</h4>";
        }
    } else {
        echo "<h4>Por favor, completa todos los campos.</h4>";
    }
}
?>
