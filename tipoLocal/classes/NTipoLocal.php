<?php
/**
* Classe de representação de uma camada de negócio da entidade Tipo Local
* A camada de negócio é a parte que engloba as regras e efetua os comandos de execução de um sistema
* @package Sistema
* @subpackage Tipo Local
*/
class NTipoLocal extends negocioPadrao{
	/**
	* @gerador variavelPadrao
	* @var integer Código
	*/
	public $idTipoLocal;
	/**
	* @gerador variavelPadrao
	* @var string Tipo de Local
	*/
	public $dsTipoLocal;
	/**
	* Retorna o nome da propriedade que contém o valor chave de negócio
	* @gerador metodoPadrao
	* @return string
	*/
	function nomeChave(){ return 'idTipoLocal'; }
}
?>