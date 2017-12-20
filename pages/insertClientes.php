<?php
	
     include_once("C:/xampp/htdocs/oficinanet/conexao.php");

     $nome = $_GET['nome'];
     $endereco = $_GET['endereco'];
     $numero = $_GET['numero'];
     $cep = $_GET['cep'];
     $uf = $_GET['uf'];
     $bairro = $_GET['bairro'];
     $cidade = $_GET['cidade'];
     $email = $_GET['email'];
     $pessoa = $_GET['pessoa'];
     $documento = $_GET['documento'];
     $fixo = $_GET['fixo'];
     $cel = $_GET['cel'];


     mysqli_query($conexao,"insert into clientes (nome, tel_fixo, tel_cel, email, uf, endereco, numero, cep, flag_ativo, cidade, bairro, pessoa, documento) VALUES ('$nome', '$fixo', '$cel', '$email', '$uf', '$endereco', $numero, '$cep', 1, '$cidade', '$bairro', '$pessoa', '$documento')  ");
		echo "<script>
		alert('Cadastro efetuado com sucesso!'); location= '../index.php';
		</script>";
?>