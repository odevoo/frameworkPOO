<?php 
require_once 'models/user.php';
/**
* 
*/
class ProfileController extends Controller
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
        $user = new User();
        $this->useView("profile/index");
        $this->useLayout("layout");
        //$this->addTemplatevar("text", "bonjour". $user->getName());
        $this->addTemplatevar("user", $user);
        $this->run();
    }   
 
}


 ?>