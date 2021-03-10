<?php

    namespace App\Models;

    use MF\Model\Model;

    class Agendamento extends Model{
    
        public function getAgendamentos(){
            $query = "SELECT * FROM agendamentos";
            return $this->db->query($query)->fetchAll();
        }

    }

?>