<?php
class PacientesController extends AppController{
    public $helpers = array('Html');

    public function index(){
        $this->set('pacientes', $this->Paciente->find('all'));
    }

    public function view ($id){
        $paciente = $this->Paciente->findById($id);
        $this->set('paciente', $paciente);
    }
}
 ?>
