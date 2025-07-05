<?php
    class Conexion{
        private $cnx;
        private $datos=[];
        public function __construct($param){
            foreach($param as $key=>$value){
                $this->datos[$key] = $value;

            }
        }
       public function getConexion(){
            try{
                $url = "{$this->datos['driver']}";
                $url .= ":host={$this->datos['host']}:{$this->datos['port']}";
                $url .= ";dbname={$this->datos['database']}";
                $url .= ";charset={$this->datos['charset']}";
                
                $this->cnx= new PDO($url,$this->datos['user'],$this->datos['pass']);
                return $this->cnx;
            }catch(Throwable $e){
    http_response_code(500); // Opcional, marca como error
    echo json_encode(["error" => $e->getMessage()]);
    exit;
}
        }




    }

