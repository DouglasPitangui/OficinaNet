<?php
	
     include_once("C:\wamp\www\OficinaNet\conexao.php");

     $nome = $_POST['nome'];
     $endereco = $_POST['endereco'];
     $numero = $_POST['numero'];
     $cep = $_POST['cep'];
     $uf = $_POST['uf'];
     $bairro = $_POST['bairro'];
     $cidade = $_POST['cidade'];
     $email = $_POST['email'];
     $pessoa = $_POST['pessoa'];
     $documento = $_POST['documento'];
     $fixo = $_POST['fixo'];
     $cel = $_POST['cel'];


     mysqli_query($conexao,"insert into clientes (nome, tel_fixo, tel_cel, email, uf, endereco, numero, cep, flag_ativo, cidade, bairro, pessoa, documento) VALUES ('$nome', '$fixo', '$cel', '$email', '$uf', '$endereco', $numero, '$cep', 1, '$cidade', '$bairro', '$pessoa', '$documento')  ");
		echo "<script>
		alert('Cadastro efetuado com sucesso!');
		</script>";
?>