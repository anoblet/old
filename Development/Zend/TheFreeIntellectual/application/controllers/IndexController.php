<?php

class IndexController extends Zend_Controller_Action
{

	public function init()
	{
		Zend_Dojo::enableView($this->view);
		$this->view->dojo()->enable();
		
	}

    public function indexAction()
    {
        // action body
    }


}

