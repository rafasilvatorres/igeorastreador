<?php /* Smarty version 2.6.13, created on 2010-11-02 15:15:38
         compiled from CUtilitario_geradorDefinirSistema.html */ ?>
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
			<fieldset class="ui-widget-content ui-corner-all">
	            <legend><?php echo $this->_tpl_vars['textoSistema']; ?>
</legend>
	            <div class="tabela2">
	                <div class='campo'>
	                    <label><?php echo $this->_tpl_vars['textoPaginaInicial']; ?>
:</label>
	                    <span><?php echo $this->_tpl_vars['paginaInicial']; ?>
</span>
	                </div>
	                <div class='campo'>
	                    <label><?php echo $this->_tpl_vars['textoPaginaErro']; ?>
:</label>
	                    <span><?php echo $this->_tpl_vars['paginaErro']; ?>
</span>
	                </div>
	                <div class='campo'>
	                    <label><?php echo $this->_tpl_vars['textoAmbiente']; ?>
:</label>
	                    <span><?php echo $this->_tpl_vars['ambiente']; ?>
</span>
	                </div>
	            </div>
			</fieldset>
			<fieldset class="ui-widget-content ui-corner-all">
	            <legend><?php echo $this->_tpl_vars['textoControleAcesso']; ?>
</legend>
	            <div class="tabela2">
	                <div class='campo'>
	                    <label><?php echo $this->_tpl_vars['textoLiberadoCA']; ?>
:</label>
	                    <span><?php echo $this->_tpl_vars['liberadoCA']; ?>
</span>
	                </div>
	                <div class='campo'>
	                    <label><?php echo $this->_tpl_vars['textoClasseCA']; ?>
:</label>
	                    <span><?php echo $this->_tpl_vars['classeCA']; ?>
</span>
	                </div>
	                <div class='campo'>
	                    <label><?php echo $this->_tpl_vars['textoMetodoCA']; ?>
:</label>
	                    <span><?php echo $this->_tpl_vars['metodoCA']; ?>
</span>
	                </div>
	            </div>
	        </fieldset>
			<fieldset class="ui-widget-content ui-corner-all">
	            <legend><?php echo $this->_tpl_vars['textoControleMenu']; ?>
</legend>
	            <div class="tabela2">
	                <div class='campo'>
	                    <label><?php echo $this->_tpl_vars['textoClasseMenu']; ?>
:</label>
	                    <span><?php echo $this->_tpl_vars['classeMenu']; ?>
</span>
	                </div>
	                <div class='campo'>
	                    <label><?php echo $this->_tpl_vars['textoMetodoMenuPrincipal']; ?>
:</label>
	                    <span><?php echo $this->_tpl_vars['metodoMenuPrincipal']; ?>
</span>
	                </div>
	                <div class='campo'>
	                    <label><?php echo $this->_tpl_vars['textoMetodoMenuSistema']; ?>
:</label>
	                    <span><?php echo $this->_tpl_vars['metodoMenuSistema']; ?>
</span>
	                </div>
	            </div>
			</fieldset>
			<fieldset class="ui-widget-content ui-corner-all">
	            <legend><?php echo $this->_tpl_vars['textoBancos']; ?>
</legend>
	            <table summary="text" class="tabela2">
	                <tr>
	                    <th>Cód.</th>
	                    <th>Nome</th>
	                    <th>Tipo</th>
	                    <th>Servidor</th>
	                    <th>Porta</th>
	                    <th>Banco</th>
	                    <th>Usuario</th>
	                    <th>Senha</th>
	                    <th>Multipla</th>
	                </tr>
	            	<?php $_from = $this->_tpl_vars['conexao']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['a']):
?>
	                <tr>
	                    <td class="campo1"><?php echo $this->_tpl_vars['i']; ?>
:</td>
	                    <td class="campo2"><?php echo $this->_tpl_vars['conexao'][$this->_tpl_vars['i']]; ?>
</td>
	                    <td class="campo2"><?php echo $this->_tpl_vars['tipo'][$this->_tpl_vars['i']]; ?>
</td>
	                    <td class="campo2"><?php echo $this->_tpl_vars['servidor'][$this->_tpl_vars['i']]; ?>
</td>
	                    <td class="campo2"><?php echo $this->_tpl_vars['porta'][$this->_tpl_vars['i']]; ?>
</td>
	                    <td class="campo2"><?php echo $this->_tpl_vars['nome'][$this->_tpl_vars['i']]; ?>
</td>
	                    <td class="campo2"><?php echo $this->_tpl_vars['usuario'][$this->_tpl_vars['i']]; ?>
</td>
	                    <td class="campo2"><?php echo $this->_tpl_vars['senha'][$this->_tpl_vars['i']]; ?>
</td>
	                    <td class="campo2"><?php echo $this->_tpl_vars['multipla'][$this->_tpl_vars['i']]; ?>
</td>
	                </tr>
	            	<?php endforeach; endif; unset($_from); ?>
	            </table>
			</fieldset>
			<fieldset class="ui-widget-content ui-corner-all">
	            <legend><?php echo $this->_tpl_vars['textoDiretorios']; ?>
</legend>
	            <table summary="text" class="tabela2">
	                <tr>
	                    <th>Referência</th>
	                    <th>Caminho</th>
	                    <th>Interno da Entidade</th>
	                </tr>
	            <?php $_from = $this->_tpl_vars['dirId']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['a']):
?>
	                <tr>
	                    <td class="campo1"><?php echo $this->_tpl_vars['dirId'][$this->_tpl_vars['i']];  echo $this->_tpl_vars['dirId'][$this->_tpl_vars['i']]->pegarValue(); ?>
:</td>
	                    <td class="campo2"><?php echo $this->_tpl_vars['dirCaminho'][$this->_tpl_vars['i']]; ?>
</td>
	                    <td class="campo2"><?php echo $this->_tpl_vars['dirEntidade'][$this->_tpl_vars['i']]; ?>
</td>
	                </tr>
	            <?php endforeach; endif; unset($_from); ?>
	            </table>
			</fieldset>
			<fieldset class="ui-widget-content ui-corner-all">
	            <legend><?php echo $this->_tpl_vars['textoArquivos']; ?>
</legend>
	            <table summary="text" class="tabela2">
	                <tr>
	                    <th>Referência</th>
	                    <th>Arquivo</th>
	                </tr>
	            <?php $_from = $this->_tpl_vars['arqId']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['a']):
?>
	                <tr>
	                    <td class="campo1"><?php echo $this->_tpl_vars['arqId'][$this->_tpl_vars['i']];  echo $this->_tpl_vars['arqId'][$this->_tpl_vars['i']]->pegarValue(); ?>
:</td>
	                    <td class="campo2"><?php echo $this->_tpl_vars['arquivo'][$this->_tpl_vars['i']]; ?>
</td>
	                </tr>
	            <?php endforeach; endif; unset($_from); ?>
	            </table>
			</fieldset>
	        <div id='menu_corpo'>
	            <?php echo $this->_tpl_vars['menuPrograma']; ?>

	        </div>
		</div>
	</div>
</form>