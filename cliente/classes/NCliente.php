<?php
/**
* Classe de representação de uma camada de negócio da entidade Cliente
* A camada de negócio é a parte que engloba as regras e efetua os comandos de execução de um sistema
* @package Sistema
* @subpackage Cliente
*/
class NCliente extends negocioPadrao{
	/**
	* @gerador variavelPadrao
	* @var integer Código do Cliente
	*/
	public $idCliente;
	/**
	* @gerador variavelPadrao
	* @var string Tipo do Cliente
	*/
	public $csTipoCliente;
	/**
	* @gerador variavelPadrao
	* @var string Nome do Cliente
	*/
	public $nmCliente;
	/**
	* @gerador variavelPadrao
	* @var integer Estado
	*/
	public $idEstado;
	/**
	* @gerador variavelPadrao
	* @var string Cidade
	*/
	public $teCidade;
	/**
	* @gerador variavelPadrao
	* @var string Bairro
	*/
	public $teBairro;
	/**
	* @gerador variavelPadrao
	* @var string Endereço
	*/
	public $teEndereco;
	/**
	* @gerador variavelPadrao
	* @var TCep CEP
	*/
	public $nrCep;
	/**
	* @gerador variavelPadrao
	* @var TTelefone Telefone
	*/
	public $nrTelefone;
	/**
	* @gerador variavelPadrao
	* @var string Email
	*/
	public $teEmail;
	/**
	* Retorna o nome da propriedade que contém o valor chave de negócio
	* @gerador metodoPadrao
	* @return string
	*/
	function nomeChave(){ return 'idCliente'; }
}
?>