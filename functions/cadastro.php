<?php
$dns = 'mysql:host=localhost;dbname=banco1';
$username = 'root';
$password = '';

try {
    $db = new PDO($dns, $username, $password);
} catch (Exception $e) {
    die('conexao falhou' . $e->getMessage());
}

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST ['email'];
$senha = $_POST['senha'];
$confirmar_senha = $_POST['confirmar_senha'];
$cpf = $_POST['cpf'];




cadastro($nome , $sobrenome , $email, $senha, $confirmar_senha, $cpf);

function cadastro(
    $nome,
    $sobrenome,
    $email,
    $senha,
    $confirmar_senha,
    $cpf,
) {
    global $db;

    $stmt = $db->prepare(
        'insert into tb_cadastro_funcionarios (nome, sobrenome,, email, senha,confirmar_senha , cpf) values (:nome,:sobrenome, :email, :senha,:confirmar_senha, :cpf)'
    );

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':sobrenome', $sobrenome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(':confirmar_senha', $confirmar_senha);
    $stmt->bindParam(':cpf', $cpf);



    if ($stmt->execute()) {
        echo 'O seu cadastro foi cadastrado com sucesso'. '<div class="row mx-md-n5 mt-5">
        <a class="btn btn-primary btn-xl " type="Imput"
        href="http://localhost/phptest/site/cadastro_funcionarios.php">Voltar</a></li>
        </div>';;
    } else {
        echo 'O cadastro nao foi efetudo, favor verificar se todas as opcoes do formulario de cadastro estao corretamentas';
    }
}

?>
