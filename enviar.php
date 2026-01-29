<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Configurações (Mude para o seu e-mail)
    $email_destino = "gustavodesete@gmail.com"; 
    $assunto = "Novo Cadastro: Chapa Top";

    // 2. Coleta os dados do formulário
    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];
    $funcao = $_POST['funcao'];

    // 3. Monta o corpo do e-mail
    $corpo = "Você recebeu um novo cadastro pelo site:\n\n";
    $corpo .= "Nome: " . $nome . "\n";
    $corpo .= "Cidade: " . $cidade . "\n";
    $corpo .= "Função: " . $funcao . "\n";

    // 4. Cabeçalhos do e-mail
    $headers = "From: contato@seusite.com.br" . "\r\n" .
               "Reply-To: " . $email_destino . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // 5. Envia o e-mail
    if(mail($email_destino, $assunto, $corpo, $headers)){
        echo "<script>alert('Cadastro enviado com sucesso!'); window.location.href='index.html';</script>";
    } else {
        echo "Erro ao enviar. Tente novamente.";
    }
}
?>