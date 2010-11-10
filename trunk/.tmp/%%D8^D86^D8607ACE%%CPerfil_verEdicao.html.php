<?php /* Smarty version 2.6.13, created on 2010-11-03 14:57:21
         compiled from CPerfil_verEdicao.html */ ?>
<form name="formulario" method="post" action="<?php echo $this->_tpl_vars['action']; ?>
" >
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
			<?php echo $this->_tpl_vars['idPerfil']; ?>

			<div class="tabela2">
				<div class='campo'>
					<label for='<?php echo $this->_tpl_vars['nmPerfil']->pegarId(); ?>
'><?php echo $this->_tpl_vars['nomeNmPerfil']; ?>
:</label>
					<span><?php echo $this->_tpl_vars['nmPerfil']; ?>
</span>
				</div>
				<div class='campo'>
					<label for='<?php echo $this->_tpl_vars['boLogAcesso']->pegarId(); ?>
'><?php echo $this->_tpl_vars['nomeBoLogAcesso']; ?>
:</label>
					<span><?php echo $this->_tpl_vars['boLogAcesso']; ?>
</span>
				</div>
			</div>
	        <div id='menu_corpo'>
	            <?php echo $this->_tpl_vars['menuPrograma']; ?>

	        </div>
		</div>
	</div>
</form>