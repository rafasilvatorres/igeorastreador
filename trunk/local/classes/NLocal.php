<?php
/**
* Classe de representação de uma camada de negócio da entidade Local
* A camada de negócio é a parte que engloba as regras e efetua os comandos de execução de um sistema
* @package Sistema
* @subpackage Local
*/
class NLocal extends negocioPadrao{
	/**
	* @gerador variavelPadrao
	* @var integer Código
	*/
	public $idLocal;
	/**
	* @gerador variavelPadrao
	* @var integer Tipo de Local
	*/
	public $idTipoLocal;
	/**
	* @gerador variavelPadrao
	* @var string Nome do Local
	*/
	public $nmLocal;
	/**
	* @gerador variavelPadrao
	* @var string Latitude
	*/
	public $teLatitude;
	/**
	* @gerador variavelPadrao
	* @var string Longitude
	*/
	public $teLongitude;
	/**
	* Retorna o nome da propriedade que contém o valor chave de negócio
	* @gerador metodoPadrao
	* @return string
	*/
	function nomeChave(){ return 'idLocal'; }
}
?>