<?php
/**
* Classe de representação de uma camada de negócio da entidade Trecho
* A camada de negócio é a parte que engloba as regras e efetua os comandos de execução de um sistema
* @package Sistema
* @subpackage Trecho
*/
class NTrecho extends negocioPadrao{
	/**
	* @gerador variavelPadrao
	* @var integer Código
	*/
	public $idTrecho;
	/**
	* @gerador variavelPadrao
	* @var integer Percurso
	*/
	public $idPercurso;
	/**
	* @gerador variavelPadrao
	* @var string Latitude Inicial
	*/
	public $nrLatitudeInicial;
	/**
	* @gerador variavelPadrao
	* @var string Longitude Inicial
	*/
	public $nrLongitudeInicial;
	/**
	* @gerador variavelPadrao
	* @var string Latitude Final
	*/
	public $nrLatitudeFinal;
	/**
	* @gerador variavelPadrao
	* @var string Longitude Final
	*/
	public $nrLongitudeFinal;
	/**
	* @gerador variavelPadrao
	* @var integer Ordem
	*/
	public $nrOrdem;
	/**
	* Retorna o nome da propriedade que contém o valor chave de negócio
	* @gerador metodoPadrao
	* @return string
	*/
	function nomeChave(){ return 'idTrecho'; }
}
?>