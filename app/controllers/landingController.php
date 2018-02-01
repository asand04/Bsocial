<?php

use Phalcon\Mvc\Controller;

class landingController extends Controller
{

    public function indexAction()
    {

    }
    
    public function inscriptionAction(){
        $req = user::find();
        $this->view->tab = $req;
        if ($this->request->isPost()) {

            $nom = $this->request->getPost("nom");
            $prenom = $this->request->getPost("prenom");
            $email = $this->request->getPost("email");
            $passwordHash = $this->request->getPost("passwordHash");
            $cpassword = $this->request->getPost("cpassword");
            $req = user::findFirst([
                        "email = :email:", "bind" => [
                            "email" => $email,
                        ]
            ]);

            if ($req == NULL) {
                if ($passwordHash == $cpassword) {
                    //  var_dump($password);
                    // die(var_dump($cpassword));

                    $ets = new user();
                    $ets->nom = $nom;
                    $ets->prenom = $prenom;
                    $ets->email = $email;

                    $ets->passwordHash = sha1($passwordHash);

                    // die(var_dump($ets));
                    $var = $ets->save();
                    //  die(var_dump($var));
                    $this->flashSession->success("Enregistrement effectue avec sucess");
                    return $this->response->redirect($this->url->getBaseUri() . "landing/timeline", true);
                }
            }
        }
    }

    public function timelineAction(){

    }
}
