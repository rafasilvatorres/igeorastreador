<?php
/**
* Classe de representação de uma camada de negócio da entidade Veiculo
* A camada de negócio é a parte que engloba as regras e efetua os comandos de execução de um sistema
* @package Sistema
* @subpackage Veiculo
*/
class NVeiculo extends negocioPadrao{
	/**
	* @gerador variavelPadrao
	* @var integer Código
	*/
	public $idVeiculo;
	/**
	* @gerador variavelPadrao
	* @var integer Empresa
	*/
	public $idEmpresa;
	/**
	* @gerador variavelPadrao
	* @var TData Data de Inicio da Operação
	*/
	public $dtInicioOperacao;
	/**
	* @gerador variavelPadrao
	* @var integer Número do Imei
	*/
	public $nrImei;
	/**
	* Retorna o nome da propriedade que contém o valor chave de negócio
	* @gerador metodoPadrao
	* @return string
	*/
	function nomeChave(){ return 'idVeiculo'; }
}
?>