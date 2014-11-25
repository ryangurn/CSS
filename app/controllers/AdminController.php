<?php

class AdminController extends BaseController{

  public function index(){
    if(Sentry::check() == false){
      $this->layout->content = View::make('admin.login');
    }else{
      $this->layout->content = View::make('admin.index');

      View::share('users', User::all());
      View::share('sections', Section::all());
      View::share('categories', Category::all());
    }
  }

  public function post_login(){
    $validator = Validator::make(Input::all(), array(
      'email' => 'required|email',
      'password' => 'required',
    ), array(
      'required' => ucfirst(':attribute is required'),
      'email' => 'Valid email address is required'
    ));

    if($validator->fails()){
      $array = array();
      foreach($validator->messages()->all() as $message){
        $array[] = $message;
      }

      return Redirect::route('get-admin')
      ->with('errors_title', 'Error')
      ->with('errors', json_encode($array));
    }else{
      $array = array();
      try
      {
        // Login credentials
        $credentials = array(
          'email'    => Input::get('email'),
          'password' => Input::get('password'),
        );

        // Authenticate the user
        $user = Sentry::authenticate($credentials, false);
        if(Sentry::check() == true){
          return Redirect::route('get-admin');
        }
      }
      catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
      {
        $array[] = 'Login field is required.';
      }
      catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
      {
        $array[] = 'Password field is required.';
      }
      catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
      {
        $array[] = 'Wrong password, try again.';
      }
      catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
      {
        $array[] = 'User was not found.';
      }
      catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
      {
        $array[] = 'User is not activated.';
      }
      catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
      {
        $array[] = 'User is suspended.';
      }
      catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
      {
        $array[] = 'User is banned.';
      }

      if(!empty($array)){
        return Redirect::route('get-admin')
        ->with('errors_title', 'Error')
        ->with('errors', json_encode($array));
      }
    }
  }

}

?>
