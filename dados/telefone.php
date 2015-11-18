<?php
  
    $raiz = "../";

		include($raiz."include/conexaoMySQL.php");

      $query = "select * from telefone";
      $consulta = mysqli_query($conexao, $query) or die (mysqli_error());

      $dados = array();
      $cont = 0;

      while($obj = mysqli_fetch_array($consulta)) {                  
        $dado = array(
          'id'   => utf8_encode($obj[0]),
          'aparelho' => utf8_encode($obj[1]),
          'tipo' => utf8_encode($obj[2]),
          'serial_id' => utf8_encode($obj[3]),
          'numero' => utf8_encode($obj[4]),
          'ativo' => utf8_encode($obj[5])
        );
        $dados[$cont] = $dado;
        $cont++;
      }
      
      $saida = array();
      $saida['data'] = $dados;

      $saida['total'] = $cont++;

      // Fechar a conexão com o Banco
      mysqli_close($conexao);

      // Configurar o tipo de reposta para JSON
      header('Content-Type: application/json');
      // Retornar o JSON
      echo json_encode($saida);
	?>