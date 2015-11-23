<?php
  
    $raiz = "../";

		include($raiz."include/conexaoMySQL.php");

    /*  $query = "select * from itens_telefone";
      $consulta = mysqli_query($conexao, $query) or die (mysqli_error());

      $dados = array();
      $cont = 0;

      while($obj = mysqli_fetch_array($consulta)) {                  
        $dado = array(
          'id'=> utf8_encode($obj[0]),
          'descricao' => utf8_encode($obj[1]),
          'quantidade' => utf8_encode($obj[2]),
          'serial_id' => utf8_encode($obj[3])       
        );
        $dados[$cont] = $dado;
        $cont++;
      }
      
      $saida = array();
      $saida['data'] = $dados;

      $saida['total'] = $cont++;*/

      if (isset($GET["create"])){ //VERIFICA SE O USUARIO CLICOU NO BOTÃO ADICIONAR

        $rows = $_SESSION ['itens'];
        $rows[$_GET ['id']] =
        array(
          'descricao'=> $_GET['Descricao'],
          'quantidade'=> $_GET['Quantidade'],
          'serial_id' => $_GET['ID']
          );
        $_SESSION['itens'] = $rows;
      }
      elseif (isset($_GET['save'])){
        $row = $_SESSION['itens'];

        unset($rows[trim($_GET['id'])]);

        $rows[$_GET['id']] = 
        array(
          'descricao'=>$_GET['Descricao'],
          'quantidade'=>$_GET['Quantidade'],
          'serial_id'=>$_GET['ID']
          );
        $_SESSION['itens'] = $rows;
      }
      elseif(isset($_GET['cancel'])){
        $rows = $_SESSION['itens'];
        unset($rows[trim($_GET['cancel'])]);
        $_SESSION['itens'] = $rows;
      }
      else{
        $query = "select * from itens_telefone";
        $rs = mysqli_query($conexao, $query) or die (mysqli_error());

        $dados = array();

        while($res = mysql_fetch_array($rs)) {
          $rows[$res["id"]] = array("descricao" => $res['descricao'],"quantidade" => $res['quantidade'], "serial_id" => $res['serial_id']);
        }

/*
        if(isset($_SESSION['itens'])){
          $rows = $_SESSION['itens'];
        }
*/
      }




      // Fechar a conexão com o Banco
      mysqli_close($conexao);

      // Configurar o tipo de reposta para JSON
      header('Content-Type: application/json');
      // Retornar o JSON
      echo json_encode($saida);
	?>