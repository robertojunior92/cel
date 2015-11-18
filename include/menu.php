<!DOCTYPE html> 
<html> 
<head> 
   <title>CEL</title> 
</head> 
<body>
<? // MENU ?>
   <div id="example" class="k-content"> 
      <div class="k-rtl"> 
         <ul id="menu"> 
          <li>CADASTROS
            <ul>
              <li>Itens<a href="<? echo $raiz; ?>../cel/cadastro/itens/index.php"></a></li>
            </ul>
            </div>
            <script>
            $(document).ready(function() {
            $("#menu").kendoMenu();
          });
      </script>
    </div>
   </body>
</html>  