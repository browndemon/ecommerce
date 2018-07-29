<div class="produto_foto">
	<img src="<?php echo BASE_URL; ?>assets/img/<?php echo $produto['imagem']; ?>" border="0" width="300" height="300"/>
</div>
<div class="produto_info">
	<h2><?php echo $produto['nome']; ?></h2>
	<p><?php echo $produto['descricao']; ?></p>
	<h3>Preço: <?php echo 'R$ '.number_format($produto['preco'],2,',','.'); ?></h3>
	<a href="<?php echo BASE_URL; ?>carrinho/add/<?php echo $produto['id']; ?>">Adicionar Ao Carrinho</a>
</div>
<div style="clear:both;"></div>