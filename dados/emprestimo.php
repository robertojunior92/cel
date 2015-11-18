<?php
  
    $raiz = "../";

		include($raiz."include/conexaoMySQL.php");

      $query = "select * from emprestimo";
      $consulta = mysqli_query($conexao, $query) or die (mysqli_error());

      $dados = array();
      $cont = 0;

      while($obj = mysqli_fetch_array($consulta)) {                  
        $dado = array(
          'id'   => utf8_encode($obj[0]),
          'id_telefone' => utf8_encode($obj[1]),
          'id_responsavel' => utf8_encode($obj[2]),
          'data_emprestimo' => utf8_encode($obj[3]),       
          'data_devolucao' => utf8_encode($obj[4])
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