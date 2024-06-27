<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $recaptchaToken = $_POST['recaptchaToken'];

    $recaptchaSecret = '6LddOPwpAAAAAKiPF7cwIfcyurjdqrHvd-Nh9rbw';
    $recaptchaResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecret&response=$recaptchaToken");
    $recaptchaData = json_decode($recaptchaResponse);

    if ($recaptchaData->success && $recaptchaData->score >= 0.5) {
        // Verifique as credenciais do usuário aqui (por exemplo, no banco de dados)
        // Se o login for bem-sucedido:
        // $_SESSION['user'] = $username; // Por exemplo, configurar uma sessão
        header('Location: home.php');
    } else {
        // Falha na verificação do reCAPTCHA
        echo 'Falha na verificação do reCAPTCHA. Por favor, tente novamente.';
    }
} else {
    header('Location: index.php');
}
?>
