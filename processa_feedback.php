<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = htmlspecialchars(trim($_POST['nome']));
    $mensagem = htmlspecialchars(trim($_POST['mensagem']));

    // Define o caminho do arquivo
    $caminho_arquivo = 'feedbacks/feedback.txt';

    // Cria a string a ser escrita no arquivo
    $feedback = "Nome: $nome\nMensagem: $mensagem\n\n";

    // Escreve os dados no arquivo
    if (file_put_contents($caminho_arquivo, $feedback, FILE_APPEND | LOCK_EX) !== false) {
        echo "Feedback enviado com sucesso!";
    } else {
        echo "Erro ao enviar feedback. Tente novamente.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
