<?php
/**
* Classe de representação de uma camada de negócio da entidade Ocorrência
* A camada de negócio é a parte que engloba as regras e efetua os comandos de execução de um sistema
* @package Sistema
* @subpackage Ocorrência
*/
class NOcorrencia extends negocioPadrao{
	/**
	* @gerador variavelPadrao
	* @var integer Código da Ocorrência
	*/
	public $idOcorrencia;
	/**
	* @gerador variavelPadrao
	* @var integer Veículo
	*/
	public $idVeiculo;
	/**
	* @gerador variavelPadrao
	* @var integer Tipo de Ocorrência
	*/
	public $idTipoOcorrencia;
	/**
	* @gerador variavelPadrao
	* @var TData Data da Ocorrência
	*/
	public $dtOcorrencia;
	/**
	* @gerador variavelPadrao
	* @var string Observação
	*/
	public $teObservacao;
	/**
	* @gerador variavelPadrao
	* @var integer Lançamento Automático
	*/
	public $boLancamentoAutomatico;
	/**
	* Retorna o nome da propriedade que contém o valor chave de negócio
	* @gerador metodoPadrao
	* @return string
	*/
	function nomeChave(){ return 'idOcorrencia'; }
}
?>