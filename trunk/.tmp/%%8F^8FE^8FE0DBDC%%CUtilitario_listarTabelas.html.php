<?php /* Smarty version 2.6.13, created on 2010-11-02 18:26:03
         compiled from CUtilitario_listarTabelas.html */ ?>
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
		<div class="lista">
			Gerar <a href="?c=CUtilitario_gerarTodosCadastros">todos</a> os cadastros de todas as tabelas.<br/><br/>
			<ul>
			<?php $_from = $this->_tpl_vars['listagem']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nome']):
?>
				<li>
					<span class="ui-state-default ui-corner-all"><a href="?c=CUtilitario_listarCamposTabela&tabela=<?php echo $this->_tpl_vars['nome']; ?>
" >Ver</a></span>
					<span class="ui-state-default ui-corner-all"><a href="?c=CUtilitario_geradorDefinirEntidade&tabela=<?php echo $this->_tpl_vars['nome']; ?>
" >Gerar cadastro</a></span>
					<?php echo $this->_tpl_vars['nome']; ?>

				</li>
			<?php endforeach; endif; unset($_from); ?>
			</ul>
	        <div id='menu_corpo'>
	            <?php echo $this->_tpl_vars['menuPrograma']; ?>

	        </div>
		</div>
	</div>
</form>