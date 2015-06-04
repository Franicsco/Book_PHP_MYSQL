<?php 
//Criando Sessão
if(@$_REQUEST["action"]== "sent"){
	
	//Verifico se o campo não esta vazio, caso esteja, cai no ELSE
	if(@!trim($_POST["campoUsuario"]) == ""){
		
		session_start();
		$_SESSION["usuario"] = $_POST["campoUsuario"];		
		echo "<script>location.href = 'sessao01_recebe.php';</script>";
			}
			else{
				echo "<script>alert('Digite o Nome'); location.href = 'sessao01.php';</script> ";				
				}
	
	}
	else{
?>
<form action="sessao01.php?action=sent" method="post">
	Digite seu nome:
    <input type="text" name="campoUsuario" />
    <input type="submit" value="Enviar" />
</form>

<?php }?>