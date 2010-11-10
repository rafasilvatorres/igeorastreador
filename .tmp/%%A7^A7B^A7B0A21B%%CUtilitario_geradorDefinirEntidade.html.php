<?php /* Smarty version 2.6.13, created on 2010-11-02 14:38:08
         compiled from CUtilitario_geradorDefinirEntidade.html */ ?>
<form id="affForm" name="formulario" method="post" action="<?php echo $this->_tpl_vars['action']; ?>
" >
	<h3>Acessado via: <?php echo $this->_tpl_vars['acesso']; ?>
</h3>

	<style type="text/css">
.d-table{display:table; border:1px solid #c0c0c0; padding: 1px;}
.d-caption{display:table-caption; background:#c0c0c0;}
.d-th{display:table-cell; background:#c0c0c0; padding: 2px;}
.d-tr{display:table-row;}
.d-td{display:table-cell; padding: 5px; border: 1px solid #c0c0c0; padding: 1px;}
.campoListagem{
	width: 95%;
}
input.campoListagem{
	border-left-width: 0px;
	border-top-width: 0px;
	border-right-width: 0px;
	border-bottom-width: 0px;
}
.focado{
	background-color: #D8E4F3;
}
.atalho{
	font-weight: bold;
	color: #7b2929;
}
	</style>
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
			<div class="descricaoDeAjuda help ui-state-highlight ui-corner-all"><?php echo $this->_tpl_vars['textoAjudaDefinicao']; ?>
</div>
			<div class="container0" id='camada'>
				<div class="a"></div>
				<div class="b"></div>
				<div class="c"></div>
				<div class="d"></div>
				<div class="e"></div>
				<div class="f"></div>
				<div class="g"></div>
				<div class="h"></div>
				<div class="texto">
					<div class="tabela2">
						<label>Nome: </label>
						<span><?php echo $this->_tpl_vars['entidade']; ?>
</span>
					</div>
					<div id="tabs">
						<ul>
							<li><a id="guia_1" class="guia" href="#tabs-1" accesskey="1"><label class="atalho">1.</label>Propriedades</a></li>
							<li><a id="guia_2" class="guia" href="#tabs-2" accesskey="2"><label class="atalho">2.</label>Negócio</a></li>
							<li><a id="guia_3" class="guia" href="#tabs-3" accesskey="3"><label class="atalho">3.</label>Persistente</a></li>
							<li><a id="guia_4" class="guia" href="#tabs-4" accesskey="4"><label class="atalho">4.</label>Visualização</a></li>
							<li><a id="guia_5" class="guia" href="#tabs-5" accesskey="5"><label class="atalho">5.</label>Configurações</a></li>
							<li><a id="guia_6" class="guia" href="#tabs-6" accesskey="6"><label class="atalho">6.</label>Caso de Uso</a></li>
						</ul>
						<div id="tabs-1">
							<div class="d-table t-linhas tabela1 ui-corner-all" id="ent">
								<div class="d-tr">
									<div class="d-th ui-state-default" title="O nome da característica da entidade">Nome da Propriedade</div>
									<div class="d-th ui-state-default" title="A abreviação da característica da entidade">Nome abreviado</div>
									<div class="d-th ui-state-default" title="A descrição da característica da entidade">Descrição (Tooltip)</div>
									<div class="d-th ui-state-default" title="Clique para remover esta coluna."></div>
								</div>
							</div><br />
							<input type="button" value="Adicionar nova propriedade" class="adicionar" accesskey="A"/>
						</div>
						<div id="tabs-2">
							Sugerir nomes das <a href="#" id="sugerirNomesPropriedades" accesskey="P"><label class="atalho">p</label>ropriedades</a>.<br /><br />
							<div class="d-table t-linhas tabela1 ui-corner-all" id="neg">
								<div class="d-tr">
									<div class="d-th ui-state-default" title="O nome da propriedade da entidade">Propriedade</div>
									<div class="d-th ui-state-default" title="O nome da propriedade na camada de negócio">Propriedade de Negócio</div>
									<div class="d-th ui-state-default" title="O tipo de dado da propriedade">Tipo</div>
									<div class="d-th ui-state-default" title="O tamanho em caracteres da propriedade">Tamanho</div>
									<div class="d-th ui-state-default" title="Chave primária">PK</div>
									<div class="d-th ui-state-default" title="Não Nulo">NN</div>
									<div class="d-th ui-state-default" title="Chave única">UK</div>
									<div class="d-th ui-state-default" title="Chave extrangeira">FK</div>
									<div class="d-th ui-state-default" title="Selecione um método ou defina um domínio Ex:[1,Sim][2,Não]">Dominio ou Método de Leitura</div>
								</div>
							</div>
						</div>
						<div id="tabs-3">
							Sugerir nome de <a href="#" id="sugerirNomeTabela" accesskey="T"><label class="atalho">t</label>abela</a> de <a href="#" id="sugerirNomeSequence" accesskey="S"><label class="atalho">s</label>equence</a> e nomes dos <a href="#" id="sugerirNomesCampos" accesskey="M">ca<label class="atalho">m</label>pos</a>.<br /><br />
							<div class="texto">
								<div class='campo'>
									<label>Tabela: </label>
									<span><?php echo $this->_tpl_vars['nomeTabela']; ?>
</span>
								</div>
								<div class='campo'>
									<label>Sequence: </label>
									<span><?php echo $this->_tpl_vars['nomeSequence']; ?>
</span>
								</div>
							</div><br />
							<div class="d-table t-linhas tabela1 ui-corner-all" id="per">
								<div class="d-tr">
									<div class="d-th ui-state-default" title="O nome da propriedade da entidade">Propriedade</div>
									<div class="d-th ui-state-default" title="O nome do campo na tabela do banco">Campo da tabela</div>
									<div class="d-th ui-state-default" title="A prioridade de ordenação do campo na tabela do banco">Ordenação</div>
									<div class="d-th ui-state-default" title="O tipo de ordenação do campo">Decrescente</div>
									<div class="d-th ui-state-default" title="Caso chave extrangeira identifique o nome da tabela de referência ">Referencia a tabela</div>
									<div class="d-th ui-state-default" title="Caso chave extrangeira identifique o nome do campo de referência ">Referencia ao campo</div>
								</div>
							</div>
						</div>
						<div id="tabs-4">
							Sugerir <a href="#" id="sugerirComponentes" accesskey="C"><label class="atalho">c</label>omponentes</a> de visualização.<br /><br />
							<div class="d-table t-linhas tabela1 ui-corner-all" id="vis">
								<div class="d-tr">
									<div class="d-th ui-state-default" title="O nome da propriedade da entidade">Propriedade</div>
									<div class="d-th ui-state-default" title="Definição do componente de apresentação da propriedade">Componente</div>
									<div class="d-th ui-state-default" title="A ordem na listagem de apresentação">Ordem na listagem</div>
									<div class="d-th ui-state-default" title="A ordem na apresentação descritiva Ex: '001 - Campo01 - Campo02'">Ordem na descrição</div>
									<div class="d-th ui-state-default" title="A largura da coluna na listagem de apresentação (em %)">Largura</div>
								</div>
							</div>
						</div>
						<div id="tabs-5">
							Gerar os <a href="#" id="gerarArquivos" accesskey="R">a<label class="atalho">r</label>quivos</a> das <a href="#" id="gerarClasses" accesskey="L">c<label class="atalho">l</label>asses</a>, dos <a href="#" id="gerarTemplates" accesskey="E">t<label class="atalho">e</label>mplates</a> e dos <a href="#" id="gerarXml" accesskey="X"><label class="atalho">x</label>mls</a>.
							<br/>
							<br/>
							<div class="d-table tabela1" id="arq">
								<div class="d-tr">
									<div class="d-th ui-state-default"></div>
									<div class="d-th ui-state-default">Banco de dados</div>
								</div>
								<div class="d-tr"><div class="d-td"><?php echo $this->_tpl_vars['recriarBase']; ?>
</div><div class="d-td">Recriar a tabela no banco de dados</div></div>
								<div class="d-tr">
									<div class="d-th ui-state-default"></div>
									<div class="d-th ui-state-default" title="Selecione o arquivo para salvá-lo">Arquivos</div>
								</div>
							</div>
						</div>
						<div id="tabs-6">
							<div class="d-table tabela1">
								<div class="d-tr">
									<div class="d-th ui-state-default">Caso de uso do cadastro</div>
								</div>
							</div>
						</div>
					</div><br />
					<div id='menu_corpo'>
						<?php echo $this->_tpl_vars['menuPrograma']; ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<?php if ($this->_tpl_vars['dados']): ?>
<script type="text/javascript">
var definicao = eval('<?php echo $this->_tpl_vars['dados']; ?>
');
</script>
<?php else: ?>
<script type="text/javascript">
var definicao = false;
</script>
<?php endif; ?>