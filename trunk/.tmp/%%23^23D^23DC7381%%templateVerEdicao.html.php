<?php /* Smarty version 2.6.13, created on 2010-11-02 15:34:56
         compiled from templateVerEdicao.html */ ?>
<!---------------------- TEMPLATE PADRÃO ---------------------->
<form name="formulario" method="post" action="«$action»" >
	<div class="container0 ui-widget-content ui-corner-all">
		<div class="a"></div>
		<div class="b"></div>
		<div class="c"></div>
		<div class="d"></div>
		<div class="e"></div>
		<div class="f"></div>
		<div class="g"></div>
		<div class="h"></div>
		<h1 class="ui-state-default ui-corner-all">«$tituloEspecifico»</h1>
		<div class="texto">
			«$<?php echo $this->_tpl_vars['chaveNegocio']; ?>
»
			<div class="tabela2">
				<?php $_from = $this->_tpl_vars['nomes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['indice'] => $this->_tpl_vars['propriedade']):
?>
					<div class="campo">
						<label for="<?php echo $this->_tpl_vars['propriedade']; ?>
">«$<?php echo $this->_tpl_vars['indice']; ?>
»:</label>
						<span>«$<?php echo $this->_tpl_vars['propriedade']; ?>
»</span>
					</div>
				<?php endforeach; endif; unset($_from); ?>
			</div>
	        <div id='menu_corpo'>
	            «$menuPrograma»
	        </div>
		</div>
	</div>
</form>
<!---------------------- TEMPLATE PADRÃO ---------------------->