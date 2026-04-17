<?php
/**
 * Script de contato para HostGator (Plano P)
 * Envia e-mails via PHP mail()
 */

// Configurações
$to_email = "comercial@cmglobalservices.com.br"; // Substitua pelo e-mail que receberá os contatos
$subject = "Novo Contato via Site: " . $_POST['subject'];

// Verificação de segurança simples
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject_type = strip_tags(trim($_POST["subject"]));
    $message = strip_tags(trim($_POST["message"]));

    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Ops! Ocorreu um problema com o seu envio. Por favor, complete o formulário e tente novamente.";
        exit;
    }

    $email_content = "Nome: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Assunto: $subject_type\n\n";
    $email_content .= "Mensagem:\n$message\n";

    $email_headers = "From: Form Site <no-reply@cmglobalservices.com.br>\r\n";
    $email_headers .= "Reply-To: $email\r\n";

    if (mail($to_email, $subject, $email_content, $email_headers)) {
        http_response_code(200);
        echo "Obrigado! Sua mensagem foi enviada com sucesso.";
    } else {
        http_response_code(500);
        echo "Ops! Algo deu errado e não conseguimos enviar sua mensagem.";
    }

} else {
    http_response_code(403);
    echo "Houve um problema com o seu envio, por favor tente novamente.";
}
?>
