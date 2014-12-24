<?php
/**
 * UserController provides getIndex, doAuth and createUser
 *
 * @author David Pitzel
 * @date: 12/11/2014
 */

class UserController extends BaseController
{
    /**
     * Instantiate a new UserController instance
     */
    public function __construct()
    {
        //$this->beforeFilter('csrf', array('on' => 'post'));

         $this->afterFilter('log', array('only' => array('')));
    }
    /**
     * getIndex shows the user view
     * @param $id int user id
     * @return View::make('user')
     */
    public function getIndex($id = 0)
    {
        $this->beforeFilter('auth', array('except' => 'showLogin'));
        
        $users = User::all();

        return View::make('list', array('users' => $users));
    }

    /**
     * showLogin display the login form
     * @return View::make(login);
     */
    public function showLogin()
    {
        return View::make('login');
    }
    
     /**
     * showRegister display the registration form
     * @return View::make(register);
     */
    public function showRegister()
    {
        return View::make('register');
    }

    /**
     * doAuth authorize the user (login)
     * @param $username string username
     * @param $password string password
     * @return View::make('user')
     */
    public function doAuth()
    {
        if(Auth::attempt(array('username'  => Input::get('username'),
            'password' => Input::get('password')))) {
            $users = User::all();
            $id = Auth::id();
            return View::make('users', array('users' => $users, 'id' => $id));
        } else {
            return View::make('login', 
                    array('error' => 'Invalid username or password'));
        }
    }
    
    /**
     * logOut log the current user out
     * @return View::make('/');
     */
    public function logOut()
    {
        Auth::logout();
        return View::make('main');
    }

    /**
     * createUser create a new user
     * @param mixed $data
     * @return View::make('user')
     */
    public function createUser()
    {
        $data = Input::except('submit', '_token');
        $data['password'] = Hash::make($data['password']);
        User::insert($data);
        $users = User::all();
        return View::make('users', array('users' => $users));
    }
}