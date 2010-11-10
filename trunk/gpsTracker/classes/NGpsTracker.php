<?php
/**
* Classe de representação de uma camada de negócio da entidade GPS Tracker
* A camada de negócio é a parte que engloba as regras e efetua os comandos de execução de um sistema
* @package Sistema
* @subpackage GPS Tracker
*/
class NGpsTracker extends negocioPadrao{
	/**
	* @gerador variavelPadrao
	* @var integer Código do Tracker
	*/
	public $idTracker;
	/**
	* @gerador variavelPadrao
	* @var string Serial
	*/
	public $nrSerial;
	/**
	* @gerador variavelPadrao
	* @var string Número Autorizado
	*/
	public $nrAutorizado;
	/**
	* @gerador variavelPadrao
	* @var string Tipo de Mensagem
	*/
	public $csTipoMensagem;
	/**
	* @gerador variavelPadrao
	* @var string Tempo UTC
	*/
	public $nrTempoUtc;
	/**
	* @gerador variavelPadrao
	* @var string Estado do Sinal
	*/
	public $csEstadoSinal;
	/**
	* @gerador variavelPadrao
	* @var string Latitude
	*/
	public $nrLatitude;
	/**
	* @gerador variavelPadrao
	* @var string Latitude Tipo
	*/
	public $csLatitudeTipo;
	/**
	* @gerador variavelPadrao
	* @var string Longitude
	*/
	public $csLongitude;
	/**
	* @gerador variavelPadrao
	* @var string Longitude Tipo
	*/
	public $csLongitudeTipo;
	/**
	* @gerador variavelPadrao
	* @var string Velocidade em Nós
	*/
	public $nrVelocidade;
	/**
	* @gerador variavelPadrao
	* @var string Curso
	*/
	public $csCurso;
	/**
	* @gerador variavelPadrao
	* @var string Data (ddmmyy)
	*/
	public $dtGps;
	/**
	* @gerador variavelPadrao
	* @var string Variação Magnética
	*/
	public $vlVariacaoMagnetica;
	/**
	* @gerador variavelPadrao
	* @var string Modo GPS
	*/
	public $csModoGps;
	/**
	* @gerador variavelPadrao
	* @var string Checksum GPRMC
	*/
	public $nrChecksumGprmc;
	/**
	* @gerador variavelPadrao
	* @var string Indicador de Sinal GPS
	*/
	public $csIndicadorSinal;
	/**
	* @gerador variavelPadrao
	* @var string Imei
	*/
	public $nrImei;
	/**
	* @gerador variavelPadrao
	* @var string Número GPS
	*/
	public $nrGps;
	/**
	* @gerador variavelPadrao
	* @var string Altitude
	*/
	public $nrAltitude;
	/**
	* @gerador variavelPadrao
	* @var string Força da Bateria
	*/
	public $vlBateria;
	/**
	* @gerador variavelPadrao
	* @var string Carregador Conectado
	*/
	public $csCarregando;
	/**
	* @gerador variavelPadrao
	* @var string Tamanho da String GPRS
	*/
	public $nrTamanhoString;
	/**
	* @gerador variavelPadrao
	* @var string Checksum
	*/
	public $nrChecksum;
	/**
	* @gerador variavelPadrao
	* @var string Código do País
	*/
	public $nrCodigoPais;
	/**
	* @gerador variavelPadrao
	* @var string Código da Rede
	*/
	public $nrCodigoRede;
	/**
	* @gerador variavelPadrao
	* @var string Código de Área
	*/
	public $nrCodigoArea;
	/**
	* @gerador variavelPadrao
	* @var string Identificador do Celular
	*/
	public $nrIdCelular;
	/**
	* Retorna o nome da propriedade que contém o valor chave de negócio
	* @gerador metodoPadrao
	* @return string
	*/
	function nomeChave(){ return 'idTracker'; }
}
?>