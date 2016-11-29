<?php 
require_once 'models/calc.php';
/**
* 
*/
class CalculController extends Controller
{
    private $_request;
    private $calculate;
    public function init(Request $request)
    {
        $this->calculate = new Calcul();
        // Init your controller here :)
        // $request is a instance of Request class
        $this->_request = $request;
    }
    public function indexAction()
    {
        $this->useView("calc/index");
        $this->useLayout("layout");
        $this->addTemplatevar("text", "");
        $this->run();
    }   

    public function addAction()
    {   
        $operation = json_decode($_POST['data']);
        echo json_encode($this->calculate->add($operation));
    }   

    public function multAction()
    {
        
        $this->calculate->multiply();
    }
 
}


 ?>