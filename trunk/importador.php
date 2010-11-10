#!/usr/bin/php -q
<?php

// Tornar o tempo de execucao Ilimitado
set_time_limit (0);

include( ".sistema/debug.php" );
$stEntrada = "101017193522,06184042241,GPRMC,193522.000,A,1549.8564,S,04803.7881,W,0.00,36.76,171010,,,A*52,F,, imei:011412001070485,05,1209.7,F:3.92V,0,139,16845,,,01CD,0855";


// Setando variaveis de IP e Porta onde o listener recebera as informacoes do GPS
$host  = "192.168.2.104";
$porta = 1234;

// Criando o Socket
$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("\n NÃO FOI POSSÍVEL CRIAR O SOCKET!! - iGeoRastreador \n");

// Vincular o socket criado a porta
$rsSocket = socket_bind($socket, $host, $porta) or die("\n Não Foi Possível Vincular a Porta ao Socket Criado!! - iGeoRastreador \n");

// Iniciar a "escuta" por conexoes
$rsSocket = socket_listen($socket, 3) or die("\n Impossível iniciar a escuta no Socket!! - iGeoRastreador \n");

echo "\n Importador de Dados do iGeoRastreador Aguardando por conexoes... \n";

// aceitar conexoes de entrada
$socketGPS = socket_accept($socket) or die("\n Não Foi Possível Aceitar uma Conexão de Entrada!! - iGeoRastreador \n");

// Escreve uma mensagem de afirmação quanto ao pedido de ligação recebido
echo "\n iGeoRastreador: Conexão com o GPS Iniciada! \n";

// Escreve uma mensagem de boas vindas ao cliente
$stBemVindo = "\n Integrador do iGeoRastreador Iniciado! \n";
socket_write($socketGPS, $stBemVindo, strlen ($stBemVindo)) or die("\n Não Foi Possível Enviar a Mensagem!! - iGeoRastreador \n");

// Manter o loop verificando entrada de informacoes por parte do cliente
do
{

    // Lendo a entrada do cliente
    $stEntrada = socket_read($socketGPS, 1024, 1) or die("Impossível Ler a Mensagem Enviada Pelo Cliente!! - iGeoRastreador \n");
    $stringGps = explode( ',', $stEntrada );

    if ( trim($stEntrada) != "" && ( count($stringGps) && strlen($stringGps[0]) == 12 ) )
    {
        //$stringData = date("d/m/Y");;
        //$stringHora = date("H:i:s");
        //echo "($stringData $stringHora) Mensagem Recebida: $stEntrada\n";

        //Prepara a string de dados para ser inserida no banco.

        $arDados = array();

        $arDados['nr_serie']            = $stringGps[0];
        $arDados['telefone_autorizado'] = $stringGps[1];
        $arDados['tipo_mensagem']       = $stringGps[2];
        $arDados['tempo_utc']           = $stringGps[3];
        $arDados['estado']              = $stringGps[4];
        $arDados['latitude']            = $stringGps[5];
        $arDados['latitude_tipo']       = $stringGps[6];
        $arDados['longitude']           = $stringGps[7];
        $arDados['longitude_tipo']      = $stringGps[8];
        $arDados['velocidade_nos']      = $stringGps[9];
        $arDados['curso']               = $stringGps[10];
        $arDados['data_ddmmyy']         = $stringGps[11];
        $arDados['variacaomagnetica']   = $stringGps[12];
        $arDados['modo_gps']            = $stringGps[13];
        $arDados['checksum']            = $stringGps[14];
        $arDados['indicador_sinal_gps'] = $stringGps[15];
        $arDados['imei']                = str_replace( " imei:", "", $stringGps[17] );
        $arDados['numero_gps']          = $stringGps[18];
        $arDados['altitude']            = $stringGps[19];
        $arDados['forca_bateria']       = $stringGps[20];
        $arDados['carregando']          = $stringGps[21];
        $arDados['tamanho_string']      = $stringGps[22];
        $arDados['crc_checksum']        = $stringGps[23];
        $arDados['codigo_pais']         = $stringGps[24];
        $arDados['codigo_rede']         = $stringGps[25];
        $arDados['lac']                 = $stringGps[26];
        $arDados['cell_id']             = $stringGps[27];

        //x($stringGps,$arDados);die();

        //inicia a conexão com o banco de dados

        #$string_conexao = "host=localhost dbname=seulogin user=seulogin password=suasenha";
        #$conexao = pg_connect($string_conexao);

        $sqlInserir = "

            INSERT INTO gps_tracker 
            (
                gps_nr_serial,
                gps_nr_autorizado,
                gps_cs_tipo_mensagem,
                gps_nr_tempo_utc,
                gps_cs_estado_sinal,
                gps_nr_latitude,
                gps_cs_latitude_tipo,
                gps_cs_longitude,
                gps_cs_longitude_tipo,
                gps_nr_velocidade,
                gps_cs_curso,
                gps_dt_gps,
                gps_vl_variacao_magnetica,
                gps_cs_modo_gps,
                gps_nr_checksum_gprmc,
                gps_cs_indicador_gps,
                gps_nr_imei,
                gps_nr_gps,
                gps_nr_altitude,
                gps_vl_bateria,
                gps_cs_carregando,
                gps_nr_tamanho_string,
                gps_nr_checksum,
                gps_nr_codigo_pais,
                gps_nr_codigo_rede,
                gps_nr_codigo_area,
                gps_nr_id_celular
            )
            VALUES
            (
                '{$arDados['nr_serie']}',
                '{$arDados['telefone_autorizado']}',
                '{$arDados['tipo_mensagem']}',
                '{$arDados['tempo_utc']}',
                '{$arDados['estado']}',
                '{$arDados['latitude']}',
                '{$arDados['latitude_tipo']}',
                '{$arDados['longitude']}',
                '{$arDados['longitude_tipo']}',
                '{$arDados['velocidade_nos']}',
                '{$arDados['curso']}',
                '{$arDados['data_ddmmyy']}',
                '{$arDados['variacaomagnetica']}',
                '{$arDados['modo_gps']}',
                '{$arDados['checksum']}',
                '{$arDados['indicador_sinal_gps']}',
                '{$arDados['imei']}',
                '{$arDados['numero_gps']}',
                '{$arDados['altitude']}',
                '{$arDados['forca_bateria']}',
                '{$arDados['carregando']}',
                '{$arDados['tamanho_string']}',
                '{$arDados['crc_checksum']}',
                '{$arDados['codigo_pais']}',
                '{$arDados['codigo_rede']}',
                '{$arDados['lac']}',
                '{$arDados['cell_id']}'
            )

        ";
        
        x($sqlInserir);die();
        
        $inserir = pg_query( $sqlInserir );

        // Para dar fim a sessao, é necessário que o cliente envie a mensagem FIM
        if (trim($stEntrada) == "FIM")
        {

            // Fechar o socket "filho"
            socket_close($socketGPS);
            // parar o loop
            break;

        } else {

            // Fecha o socket primario
            socket_close($socketGPS);
            echo "\n Fim do Socket! - iGeoRastreador \n";

            // Permite que o socket aceite novas conexoes de entrada (Continuando assim a escuta da porta)
            $socketGPS = socket_accept($socket) or die("\n Não Foi Possível Aceitar Uma Conexão De Entrada! - iGeoRastreador \n");

        }
    }

} while (true);

// fechar o socket primario
socket_close($socket);
echo "\n Fim do Importador de Dados - iGeoRastreador!! \n";

?>