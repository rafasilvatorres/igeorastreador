<?php
/**
* Classe de representação de uma camada de negócio da entidade Detalhe Veículo
* A camada de negócio é a parte que engloba as regras e efetua os comandos de execução de um sistema
* @package Sistema
* @subpackage Detalhe Veículo
*/
class NDetalheVeiculo extends negocioPadrao{
	/**
	* @gerador variavelPadrao
	* @var integer Código
	*/
	public $idDetalheVeiculo;
	/**
	* @gerador variavelPadrao
	* @var integer Identificador Veículo
	*/
	public $idVeiculo;
	/**
	* @gerador variavelPadrao
	* @var string Tipo de Detalhe
	*/
	public $csTipoDetalhe;
	/**
	* @gerador variavelPadrao
	* @var TData Data de Cadastro
	*/
	public $dtDetalhe;
	/**
	* @gerador variavelPadrao
	* @var integer Valor
	*/
	public $vlDetalhe;
	/**
	* Retorna o nome da propriedade que contém o valor chave de negócio
	* @gerador metodoPadrao
	* @return string
	*/
	function nomeChave(){ return 'idDetalheVeiculo'; }
}
?>