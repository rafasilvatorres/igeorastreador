<?php
/**
* Classe de representação de uma camada de negócio da entidade Encomenda
* A camada de negócio é a parte que engloba as regras e efetua os comandos de execução de um sistema
* @package Sistema
* @subpackage Encomenda
*/
class NEncomenda extends negocioPadrao{
	/**
	* @gerador variavelPadrao
	* @var integer Código da Encomenda
	*/
	public $idEncomenda;
	/**
	* @gerador variavelPadrao
	* @var integer Percurso para Entrega
	*/
	public $idPercurso;
	/**
	* @gerador variavelPadrao
	* @var integer Cliente
	*/
	public $idCliente;
	/**
	* @gerador variavelPadrao
	* @var string Código de Rastreamento
	*/
	public $cdRastreamento;
	/**
	* @gerador variavelPadrao
	* @var string Descrição da Encomenda
	*/
	public $dsEncomenda;
	/**
	* @gerador variavelPadrao
	* @var string Observação
	*/
	public $teObservacao;
	/**
	* @gerador variavelPadrao
	* @var TData Data de Cadastro
	*/
	public $dtCadastro;
	/**
	* @gerador variavelPadrao
	* @var integer Entrega Realizada
	*/
	public $csEntregue;
	/**
	* @gerador variavelPadrao
	* @var TData Data de Entrega
	*/
	public $dtEntrega;
	/**
	* Retorna o nome da propriedade que contém o valor chave de negócio
	* @gerador metodoPadrao
	* @return string
	*/
	function nomeChave(){ return 'idEncomenda'; }
}
?>