<?php

class PostController extends BaseController{

  public function index(){
    $validator = Validator::make(Input::all(), array(
      'firstname' => 'required|exists:Student,first_name',
      'lastname' => 'required|exists:Student,last_name',
      'birthday' => 'required|exists:Student,birthday',
      'grade' => 'required|exists:Student,grade',
    ));

    if($validator->fails()){
      $this->layout->content = View::make('errors.user-not-found');
    }else{
      $this->layout->content = View::make('home.select');


      $student = Student::find_by_first_name_and_last_name_and_birthday_and_grade(Input::get('firstname'), Input::get('lastname'), Input::get('birthday'), Input::get('grade'));

      $categories = Category::all(array('conditions' => "`grade` = '".$student->grade."' "));
      $array = array();
      foreach($categories as $c){
        $sections = Section::all(array('conditions' => "`category_id` = '".$c->id."'"));
        foreach($sections as $s){
          $array[$c->name][$s->id] = $s->name;
        }
      }

      View::share('student', $student);
      View::share('array', $array);
    }
  }

}

?>
