<?php include("conecta.php");?>
<?php include("banco-usuario.php");?>
<?php include("PHPMailerAutoload.php");?>


<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$pass = md5($_POST["pass"]);
$tel = $_POST["tel"];
$status = $_POST["status"];
$nivel = $_POST["nivel"];

	
 //Função de inserir usuário no banco

if(insertUser($conexao, $nome, $pass, $email, $tel, $status, $nivel)){
	/*$nome = "SGA - Sistema de Gerenciamento de Almoxarifado";
$email1 = "almoxarifesga@gmail.com";

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "almoxarifesga@gmail.com";
$mail->Password = "sga@1234";
$assunto = utf8_decode("E-mail de contato do Sistema SGA - Sistema de Gerenciamento de Almoxarifado");
$origem = utf8_decode("SGA - Sistema de Gerenciamento de Almoxarifado");
$mail->setFrom("almoxarifesga@gmail.com", $origem);
$mail->addAddress($email);
$mail->Subject = $assunto;
$msg = utf8_decode("<html>de: {$nome}<br>Email: {$email1}<br>mensagem: Olá <b>{$nome_fantasia}</b>, informamos que você está cadastrado em nosso SGA, obrigado pela preferência. Para seguir adiante, retorne ao SGA e faça o login utilizando seu email cadastrado, caso haja algum erro, por favor contatar o Administrador<br> </html>");
$mail->msgHTML($msg);
$mail->AltBody = "de: {$nome}\nemail: {$email1}\nmensagem: Olá {$nome}, Você foi cadastrado no SGA.";

if($mail->send()){
    $_SESSION["success"] = "Mensagem enviada com sucesso!";
    //header("Location: empresas-lista.php?cadastro=ok");
    ?>
<script type="text/javascript">window.location.href = "index.php?cadastro=Espera"; </script>
    <?php
}else{
    $_SESSION["danger"] = "Erro ao enviar mensagem ".$mail->ErrorInfo;
    //header("Location: empresa-formulario.php?cadastro=false");
}*/
?>
<script type="text/javascript">window.location.href = "index.php?cadastro=ok"; </script>

<?php
     
}else{
	//não funcionou
?>
<p class="alert-danger"> Usuário <?php echo $nome;?>  não foi cadastrado!</p>
<?php
}
?>
<?php
//comando pra fechar a conexão
mysqli_close($conexao);


 ?>