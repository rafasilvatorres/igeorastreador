<?php /* Smarty version 2.6.13, created on 2010-11-08 22:53:38
         compiled from CControleAcesso_verLogin.html */ ?>
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
					<label for='<?php echo $this->_tpl_vars['nmLogin']->pegarId(); ?>
'><?php echo $this->_tpl_vars['nomeNmLogin']; ?>
:</label>
					<span><?php echo $this->_tpl_vars['nmLogin']; ?>
</span>
				</div>
				<div class='campo'>
					<label for='<?php echo $this->_tpl_vars['nmSenha']->pegarId(); ?>
'><?php echo $this->_tpl_vars['nomeNmSenha']; ?>
:</label>
					<span><?php echo $this->_tpl_vars['nmSenha']; ?>
</span>
				</div>
				<div class='campo'>
					<label></label>
					<span><?php echo $this->_tpl_vars['btEnviar']; ?>
</span>
				</div>
			</div>
	        <div id='menu_corpo'>
	            <?php echo $this->_tpl_vars['menuPrograma']; ?>

	        </div>
		</div>
	</div>
</form>