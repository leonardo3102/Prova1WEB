<?php
class ProcedimentosController extends AppController{
    public $helpers = array('Html');

    public function index(){
        $this->set('procedimentos', $this->Procedimento->find('all'));
    }

    public function view ($id){
        $procedimento = $this->Procedimento->findById($id);
        $this->set('procedimento', $procedimento);
    }
}
 ?>
