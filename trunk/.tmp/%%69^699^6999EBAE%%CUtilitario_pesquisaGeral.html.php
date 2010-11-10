<?php /* Smarty version 2.6.13, created on 2010-11-02 16:46:39
         compiled from CUtilitario_pesquisaGeral.html */ ?>
<form name="formulario" method="post" action="<?php echo $this->_tpl_vars['action']; ?>
" >
<div class="container0 container0 ui-widget-content ui-corner-all">
	<div class="a"></div>
	<div class="b"></div>
	<div class="c"></div>
	<div class="d"></div>
	<div class="e"></div>
	<div class="f"></div>
	<div class="g"></div>
	<div class="h"></div>
	<h1 class="titulo ui-state-default ui-corner-all">Pesquisa Geral</h1>
	<div class="pesquisa">
		<center><?php echo $this->_tpl_vars['filtro']; ?>
 <?php if($this->_tpl_vars['listagens']) echo $this->_tpl_vars['nivel'];  echo $this->_tpl_vars['pesquisar']; ?>
</center>
	</div>
</div>
<?php if($this->_tpl_vars['listagens']) foreach($this->_tpl_vars['listagens'] as $listagem): ?>
<div class="container0 container0 ui-widget-content ui-corner-all">
	<div class="a"></div>
	<div class="b"></div>
	<div class="c"></div>
	<div class="d"></div>
	<div class="e"></div>
	<div class="f"></div>
	<div class="g"></div>
	<div class="h"></div>
	<h1 class="titulo ui-state-default ui-corner-all">
		<span><?php echo $listagem['nome']; ?> <b>(<?php echo $listagem['ocorrencias']; ?>)</b></span>
	</h1>
	<div class="texto">
			<a href="?c=<?php echo $listagem['controlePesquisa']; ?>">Pesquisa avançada de <?php echo $listagem['nome']; ?></a>
			<?php echo $listagem['listagem']; ?>
	</div>
</div>
<?php endforeach ?>
<div id='menu_corpo'>
	<?php echo $this->_tpl_vars['menuPrograma']; ?>

</div>
<script type="text/javascript" language="javascript">
</script>
</form>