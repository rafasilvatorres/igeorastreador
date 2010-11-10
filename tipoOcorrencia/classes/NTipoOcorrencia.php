<?php
/**
* Classe de representação de uma camada de negócio da entidade Tipo Ocorrência
* A camada de negócio é a parte que engloba as regras e efetua os comandos de execução de um sistema
* @package Sistema
* @subpackage Tipo Ocorrência
*/
class NTipoOcorrencia extends negocioPadrao{
	/**
	* @gerador variavelPadrao
	* @var integer Código
	*/
	public $idTipoOcorrencia;
	/**
	* @gerador variavelPadrao
	* @var string Tipo de Ocorrência
	*/
	public $dsTipoOcorrencia;
	/**
	* Retorna o nome da propriedade que contém o valor chave de negócio
	* @gerador metodoPadrao
	* @return string
	*/
	function nomeChave(){ return 'idTipoOcorrencia'; }
}
?>