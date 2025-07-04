<?php
    class Conexion{
        private $cnx;
        private $datos=[];
        public function __construct($param){
            foreach($param as $key=>$value){
                $this->datos[$key] = $value;

            }
        }
        public function getConexion() {
    $intentos = 5;
    $espera = 2; // segundos entre intentos

    while ($intentos > 0) {
        try {
            $url = "{$this->datos['driver']}";
            $url .= ":host={$this->datos['host']};port={$this->datos['port']}";
            $url .= ";dbname={$this->datos['database']}";
            $url .= ";charset={$this->datos['charset']}";

            $this->cnx = new PDO($url, $this->datos['user'], $this->datos['pass']);
            return $this->cnx;
        } catch (Throwable $e) {
            $intentos--;
            if ($intentos <= 0) {
                http_response_code(500);
                echo json_encode(["error" => $e->getMessage()]);
                exit;
            }
            sleep($espera); // espera antes de intentar otra vez
        }
    }
}

    }

