<?php

class Controller{
    protected $layout;
    protected $view;
    protected $folder;
    protected $data_view=[];
    protected $dao;
    protected $validator;

    public function render(){
       
      // echo $this->view;exit;
       $pathView="./views/".$this->folder."/".$this->view.".php";
       // echo"le patchview " .$pathView; exit;
        $pathLayout="./views/layout/".$this->layout.".php";
        // echo"le pathLayout " .$pathLayout;exit;
        if($this->view !="accueil"){
          ob_start();
             extract($this->data_view);
           require_once($pathView);
           $content_for_layout=ob_get_clean();
        }
         require_once($pathLayout);
    }
}

