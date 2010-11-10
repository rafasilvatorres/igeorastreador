<?php /* Smarty version 2.6.13, created on 2010-11-02 15:34:56
         compiled from classesNegocio.html */ ?>
<?php echo '<?php'; ?>

/**
* Classe de representação de uma camada de negócio da entidade <?php echo $this->_tpl_vars['entidade']; ?>

* A camada de negócio é a parte que engloba as regras e efetua os comandos de execução de um sistema
* @package Sistema
* @subpackage <?php echo $this->_tpl_vars['pacote']; ?>

*/
<?php echo $this->_tpl_vars['classe']; ?>
 <?php echo $this->_tpl_vars['negocioNome']; ?>
 extends negocioPadrao{
	<?php $_from = $this->_tpl_vars['nomes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['indice'] => $this->_tpl_vars['propriedade']):
?>
/**
	* @gerador variavelPadrao
	* @var <?php echo $this->_tpl_vars['tipos'][$this->_tpl_vars['indice']]; ?>
 <?php echo $this->_tpl_vars['nomesPropriedades'][$this->_tpl_vars['indice']]; ?>

	*/
	public $<?php echo $this->_tpl_vars['propriedade']; ?>
;
	<?php endforeach; endif; unset($_from); ?>
/**
	* Retorna o nome da propriedade que contém o valor chave de negócio
	* @gerador metodoPadrao
	* @return string
	*/
	function nomeChave(){ return '<?php echo $this->_tpl_vars['chave']; ?>
'; }
}
<?php echo '?>'; ?>