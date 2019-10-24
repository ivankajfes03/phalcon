<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
    	$this->view->users = Users::find();
    }

    public function testAction()
    {
    	return '<h1>bok sa testa</h1>';
    }

    public function deleteAction($id) 
    {
    	
    	$user = Users::find($id);
    	$user->delete();
    	return $this->response->redirect('index');
    }

    
}

