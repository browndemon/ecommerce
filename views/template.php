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
				<a href="/"><li>Home</li></a>
				<a href="/empresa"><li>Empresa</li></a>
				<?php foreach($menu as $menuitem): ?>
				<a href="/categorias/ver/<?php echo $menuitem['id']; ?>"><li><?php echo $menuitem['titulo']; ?></li></a>
				<?php endforeach; ?>
				<a href="/contato"><li>Contato</li></a>
			</ul>
		</div>
	</div>
	<div class="container">
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	</div>
	<div class="rodape"></div>
</body>
</html>