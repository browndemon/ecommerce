<h1>Carrinho de compras</h1>
<table border="0" width="100%">
	<tr>
		<th align="left">Imagem</th>
		<th align="left">Nome do produto</th>
		<th align="left">Valor</th>
		<th align="left">Ações</th>
	</tr>
	<?php $subtotal = 0;?>
	<?php foreach($produtos as $produto): ?>
		<tr>
			<td><img src="<?php echo BASE_URL; ?>/assets/img/<?php echo $produto['imagem']; ?>" border="0" width="60" /></td>
			<td><?php echo $produto['nome']; ?></td>
			<td><?php echo 'R$ '.number_format($produto['preco'],2,',','.'); ?></td>
			<td><a href="<?php echo BASE_URL; ?>carrinho/del/<?php echo $produto['id']; ?>">Remover</a></td>
		</tr>
	<?php $subtotal += $produto['preco']; ?>
	<?php endforeach; ?>
		<tr>
			<td colspan="2"></td>
			<td align="left">Total: <?php echo 'R$ '.number_format($subtotal,2,',','.');?></td>
			<td>
				<a href="<?php echo BASE_URL; ?>carrinho/finalizar">Finalizar Compra</a>
			</td>
		</tr>
</table>