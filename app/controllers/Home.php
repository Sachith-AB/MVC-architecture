<?php 
 class Home {

    use Controller;
    public function index(){

        $data['username'] = empty($_SESSION['USER']) ? 'User' : $_SESSION['USER']->password;
        $this->view('home',$data);

        //$user = new User;

       // $arr['name'] = 'abey';
        //$arr['price'] = 30;

        //$result = $user->findAll();
        //show($result);


    }
 }

 