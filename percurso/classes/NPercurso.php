<?php
/**
* Classe de representação de uma camada de negócio da entidade Percurso
* A camada de negócio é a parte que engloba as regras e efetua os comandos de execução de um sistema
* @package Sistema
* @subpackage Percurso
*/
class NPercurso extends negocioPadrao{
	/**
	* @gerador variavelPadrao
	* @var integer Código do Percurso
	*/
	public $idPercurso;
	/**
	* @gerador variavelPadrao
	* @var string Nome do Percurso
	*/
	public $nmPercurso;
	/**
	* @gerador variavelPadrao
	* @var integer Local Inicio
	*/
	public $idLocalInicio;
	/**
	* @gerador variavelPadrao
	* @var integer Local Fim
	*/
	public $idLocalFim;
	/**
	* @gerador variavelPadrao
	* @var string Tipo do Percurso
	*/
	public $csTipoPercurso;
	/**
	* Retorna o nome da propriedade que contém o valor chave de negócio
	* @gerador metodoPadrao
	* @return string
	*/
	function nomeChave(){ return 'idPercurso'; }
}
?>