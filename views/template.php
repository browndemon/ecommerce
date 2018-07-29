<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<meta charset="utf-8">
	<title>Loja Virtual</title>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/template.css">
	<script type="text/javascript" src="<?php echo BASE_URL;?>asset/js/arquivo.js"	></script>
</head>
<body>
	<div class="topo"></div>
	<div class="menu">
		<div class="menuint">
			<ul>
				<a href="<?php echo BASE_URL;?>"><li>Home</li></a>
				<a href="<?php echo BASE_URL;?>empresa"><li>Empresa</li></a>
				<?php foreach($menu as $menuitem): ?>
				<a href="<?php echo BASE_URL;?>categoria/ver/<?php echo $menuitem['id']; ?>"><li><?php echo $menuitem['titulo']; ?></li></a>
				<?php endforeach; ?>
				<a href="<?php echo BASE_URL;?>contato"><li>Contato</li></a>
			</ul>
			<a href="<?php echo BASE_URL;?>carrinho">
			<div class="carrinho">
				Carinho:<br/>
				<?php echo (isset($_SESSION['carrinho']))?count($_SESSION['carrinho']):'0'; ?>
			</div>
			</a>
		</div>
	</div>
	<div class="container">
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	</div>
	<div class="rodape"></div>
</body>
</html>