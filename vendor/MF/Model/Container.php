<?php

    namespace MF\Model;
    use App\Connection; 

    class Container{

        public function getModel($model){

            $class = "App\\Models\\".ucfirst($model);
            $conn = Connection::getDb();
            //retornar o modelo solicitado já instânciado, já com a conexão com db
            return new $class($conn);
            
        }

    }


?>