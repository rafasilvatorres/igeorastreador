<?php /* Smarty version 2.6.13, created on 2010-11-08 22:51:27
         compiled from CPerfil_verSelecionarAcessos.html */ ?>
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
					<label><?php echo $this->_tpl_vars['nomeNmPerfil']; ?>
:</label>
					<span><?php echo $this->_tpl_vars['idPerfil'];  echo $this->_tpl_vars['nmPerfil']; ?>
</span>
				</div>
			</div>
	        <div id='menu_corpo'>
	            <?php echo $this->_tpl_vars['menuPrograma']; ?>

	        </div>
		</div>
	</div>
	<div class="container0">
		<div class="a"></div>
		<div class="b"></div>
		<div class="c"></div>
		<div class="d"></div>
		<div class="e"></div>
		<div class="f"></div>
		<div class="g"></div>
		<div class="h"></div>
		<h1 class="ui-state-default ui-corner-all"><img src=".sistema/icones/application_view_list.png" /> Acessos</h1>
		<div class="texto">
			<a href='javascript:marcar(true);'>Todos</a>
			<a href='javascript:marcar(false);'>Nenhum</a>
			<table summary="text" class="tabela1">
				<tr><th>Entidade</th><th colspan='2'>Acesso</th></tr>
				<?php echo $this->_tpl_vars['listagem']; ?>

			</table>
		</div>
	</div>
</form>
<script type="text/javascript" language="javascript">
function marcar(valor,controle) {
	valor = valor || false;
	controle = controle || false;
	if(controle){
		var re = new RegExp('^' + controle + '');
		for ( var i=0; i < document.formulario.elements.length; i++ ) {
			var componente = document.formulario.elements[i];
			if ( componente.type == "checkbox") {
				var res = re.exec(componente.value);
				if(res) componente.checked = valor;
			}
		}
	}else{
		for ( var i=0; i < document.formulario.elements.length; i++ ) {
			var componente = document.formulario.elements[i];
			if ( componente.type == "checkbox") {
				componente.checked = valor;
			}
		}
	}
}
</script>