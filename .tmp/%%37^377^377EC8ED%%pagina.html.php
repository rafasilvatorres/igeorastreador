<?php /* Smarty version 2.6.13, created on 2010-11-03 14:57:02
         compiled from .sistema/temas/branco//pagina.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" href=".sistema/icones/favicon.ico" type="image/x-icon" id="iconeBarraEnderecos"/>
	<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['cssGlobal']; ?>
" media="screen" id="cssGlobalDoSistema"></link>
	<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['cssEntidade']; ?>
" media="screen" id="cssEntidade"></link>
	<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['cssLocal']; ?>
" media="screen" id="cssLocal"></link>
	<?php echo $this->_tpl_vars['cssExtra']; ?>

	<script  language='javascript' type="text/javascript" id="jsInternacionalizacao">
		var JS_ERRO_DATA = '<?php echo $this->_tpl_vars['mensagemErroData']; ?>
';
		var JS_ERRO_DIA  = '<?php echo $this->_tpl_vars['mensagemErroDia']; ?>
';
		var JS_ERRO_MES  = '<?php echo $this->_tpl_vars['mensagemErroMes']; ?>
';
		var JS_ERRO_ANO  = '<?php echo $this->_tpl_vars['mensagemErroAno']; ?>
';
		var JS_ERRO_HORA = '<?php echo $this->_tpl_vars['mensagemErroHora']; ?>
';
		var JS_ERRO_EMAIL= '<?php echo $this->_tpl_vars['mensagemErroEmail']; ?>
';
		var JS_DIRETORIO_RAIZ = '.sistema/scripts/';
	</script>
	<script language="javascript" type="text/javascript" src=".sistema/scripts/jquery/js/jquery-1.4.2.min.js" id="jsJQuery" ></script>
	<script language="javascript" type="text/javascript" src=".sistema/scripts/jquery/js/ui/jquery-ui-1.8.2.custom.js" id="jsJQueryUI" ></script>
	<script language="javascript" type="text/javascript" src=".sistema/scripts/jquery/js/jquery.livequery.min.js" ></script>
	<script language="javascript" type="text/javascript" src=".sistema/scripts/jquery/js/jquery.maskedinput-1.2.2.js" ></script>
	<script language="javascript" type="text/javascript" src=".sistema/scripts/jquery/js/jquery.price_format.1.0.js"></script>
	<script language="javascript" type="text/javascript" src=".sistema/scripts/jquery/js/jquery.message.min.js"></script>
	<script language="javascript" type="text/javascript" src=".sistema/scripts/jquery/js/fullcalendar.min.js"></script>
	<script language="javascript" type="text/javascript" src=".sistema/scripts/jquery/js/jquery.bgiframe.js"></script>
	<script language="javascript" type="text/javascript" src=".sistema/scripts/jquery/js/jquery.clickmenu.js"></script>
	<script language="javascript" type="text/javascript" src=".sistema/scripts/calixto.funcoes.js" id="jsGlobalDoSistema"></script>
	<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['jsTema']; ?>
" id="jsTema"></script>
	<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['jsEntidade']; ?>
" id="jsEntidade"></script>
	<script language="javascript" type="text/javascript" src="<?php echo $this->_tpl_vars['jsLocal']; ?>
" id="jsLocal"></script>
	<?php echo $this->_tpl_vars['jsExtra']; ?>

	<title><?php echo $this->_tpl_vars['titulo']; ?>
 [<?php echo $this->_tpl_vars['tituloEspecifico']; ?>
]</title>
</head>
<body>
	<div id="pagina">
		<div class="conteudo ui-widget-content">
			<div id="topo">
				<img alt="iGeoRastreador" src=".sistema/imagens/logobranca.jpg"  />
			</div>
			<?php echo $this->_tpl_vars['menuPrincipal']; ?>

			<?php echo $this->_tpl_vars['comunicacaoSistema']; ?>

			<?php echo $this->_tpl_vars['menuModulo']; ?>

	    	<?php if ($this->_tpl_vars['descricaoDeAjuda']): ?><div class="descricaoDeAjuda help ui-state-highlight ui-corner-all"><span class='ui-icon ui-icon-info' style='float:left;'></span><?php echo $this->_tpl_vars['descricaoDeAjuda']; ?>
</div><?php endif; ?>
			<?php echo $this->_tpl_vars['pagina']; ?>

		</div>
	</div>
</body>
</html>