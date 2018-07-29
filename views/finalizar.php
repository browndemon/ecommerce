<h1>Finalizar compra</h1>
<form method="POST">
	<?php if(!empty($erro)): ?>
		<div class="erro"><?php echo $erro; ?></div>
	<?php endif;?>
<fieldset>
	<legend>Informações do Usuário</legend>
	Nome: <br/>
	<input type="text" name="nome"><br/><br/:>
	E-Mail:<br/>
	<input type="email" name="email"><br/><br/:>
	Senha: <br/>
	<input type="password" name="senha"><br/><br/:>
</fieldset>
<br/>
<fieldset>
	<legend>Informações de Endereço</legend>
	<textarea name="Endereço">
		
	</textarea>
</fieldset>
<br/>
<fieldset>
	<legend>Resumo da compra</legend>
	Total a pagar: <?php echo $total; ?>
</fieldset>
<br/>
<fieldset>
	<legend>Informações de Pagamento</legend>
	<?php foreach($pagamentos as $pg):?>
		<input type="radio" name="pg" value="<?php echo $pg['id'];?>"><?php echo utf8_encode($pg['nome']); ?><br/><br/>
	<?php endforeach;?>
</fieldset>
<br/>
<input type="submit" value="Efetuar Pagamento">
</form>
