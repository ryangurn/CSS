<?php

class GetController extends BaseController{

  public function index(){
    $this->layout->content = View::make('login._form');
  }

}

?>
