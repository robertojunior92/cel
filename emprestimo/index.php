<?
	$raiz = "../";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<? echo $raiz; ?>css/kendo.common.min.css" />
    <link rel="stylesheet" href="<? echo $raiz; ?>css/kendo.default.min.css" />
    <link rel="stylesheet" href="<? echo $raiz; ?>css/kendo.black.min.css" />

    <script src="<? echo $raiz; ?>js/jquery.min.js"></script>
    <script src="<? echo $raiz; ?>js/kendo.all.min.js"></script>
    <script src="<? echo $raiz; ?>js/cultures/kendo.culture.pt-BR.min.js"></script>
    <script src="<? echo $raiz; ?>js/messages/kendo.messages.pt-BR.min.js"></script>
    
</head>
	<body>
		<?php
			include($raiz."include/menu.php");
		?>
		<div id="grid"></div>
		<script src="<? echo $raiz; ?>js/emprestimo.js"></script>
	</body>
</html>