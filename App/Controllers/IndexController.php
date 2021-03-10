<?php

    namespace App\Controllers;

    //os recursos do miniframwork
    use MF\Controller\Action;
    use MF\Model\Container;
    // os models
    use App\Models\Agendamento;

    class indexController extends Action{

        public function index(){

            $agendamento = Container::getModel('Agendamento');

            $agendamentos = $agendamento->getAgendamentos();

            $this->view->dados = $agendamentos;
           
            $this->render("index", 'layout1');
        }

        public function agendamento(){

           $agendamento = Container::getModel('agendamento');

            $agendamentos = $agendamento->getAgendamentos();

            $this->view->dados = $agendamentos;
           
            $this->render("index", 'layout1');
        }

    }
    
?>