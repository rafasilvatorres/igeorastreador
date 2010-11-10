<?php /* Smarty version 2.6.13, created on 2010-11-02 17:24:11
         compiled from CPessoa_verPesquisa.html */ ?>
<form name="formulario" method="post" action="<?php echo $this->_tpl_vars['action']; ?>
">
	<div class="container0 ui-widget-content ui-corner-all">
		<div class="a"></div>
		<div class="b"></div>
		<div class="c"></div>
		<div class="d"></div>
		<div class="e"></div>
		<div class="f"></div>
		<div class="g"></div>
		<div class="h"></div>
		<h1 class="ui-state-default ui-corner-all"><?php echo $this->_tpl_vars['tituloEspecifico']; ?>
</h1>
		<div class="texto">
			<div class="tabela2">
				<div class='campo'>
					<label for='<?php echo $this->_tpl_vars['csPessoa']->pegarId(); ?>
'><?php echo $this->_tpl_vars['nomeCsPessoa']; ?>
:</label>
					<span><?php echo $this->_tpl_vars['csPessoa']; ?>
</span>
				</div>
				<div class='campo'>
					<label for='<?php echo $this->_tpl_vars['nmPessoa']->pegarId(); ?>
'><?php echo $this->_tpl_vars['nomeNmPessoa']; ?>
:</label>
					<span><?php echo $this->_tpl_vars['nmPessoa']; ?>
</span>
				</div>
				<div class='campo'>
					<label for='<?php echo $this->_tpl_vars['nmBairro']->pegarId(); ?>
'><?php echo $this->_tpl_vars['nomeNmBairro']; ?>
:</label>
					<span><?php echo $this->_tpl_vars['nmBairro']; ?>
</span>
				</div>
				<div class='campo'>
					<label for='<?php echo $this->_tpl_vars['txEndereco']->pegarId(); ?>
'><?php echo $this->_tpl_vars['nomeTxEndereco']; ?>
:</label>
					<span><?php echo $this->_tpl_vars['txEndereco']; ?>
</span>
				</div>
			</div>
	        <div id='menu_corpo'>
	            <?php echo $this->_tpl_vars['menuPrograma']; ?>

	        </div>
			<div class="container2">
				<div class="a"></div>
				<div class="b"></div>
				<div class="c"></div>
				<div class="d"></div>
				<div class="e"></div>
				<div class="f"></div>
				<div class="g"></div>
				<div class="h"></div>
				<h1 class="ui-state-default ui-corner-all"><img src=".sistema/icones/application_view_list.png" /> Listagem</h1>
				<div class="texto">
					<?php echo $this->_tpl_vars['listagem']; ?>

				</div>
			</div>
		</div>
	</div>
</form>