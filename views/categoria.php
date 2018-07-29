<h1><?php echo $categoria;?></h1>
<?php foreach($produtos as $produto): ?>
<a href="<?php echo BASE_URL; ?>/produto/ver/<?php echo $produto['id'];?>">
<div class="produto">
	<img src="" border="0" width="180" height="180">
	<strong><?php echo $produto['nome']; ?></strong><br/>
	<?php echo 'R$ '.number_format($produto['preco'],2,',','.') ;?>
</div>
</a>
<?php endforeach; ?>
<div style="clear: both;"></div>