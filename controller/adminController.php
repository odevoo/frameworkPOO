<?php 

/**
* 
*/
class AdminController extends Controller
{
    private $_request;

    public function init(Request $request)
    {
        // Init your controller here :)
        // $request is a instance of Request class
        $this->_request = $request;
    }
    public function indexAction()
    {
        $this->useView("admin/index");
        $this->useLayout("layout");
        $this->addTemplatevar("text", "vous êtes dans l'administaration");
        $this->run();
    }   
 
}


 ?>