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
        $this->beforeFilter('auth', array('except' => 'showLogin'));

        $this->beforeFilter('csrf', array('on' => 'post'));

        $this->afterFilter('log', array('only' => array('')));
    }
    /**
     * getIndex shows the user view
     * @param $id int user id
     * @return View::make('user')
     */
    public function getIndex($id)
    {
        $user = User::find($id);

        return View::make('users', array('user' => $user));
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
     * doAuth authorize the user (login)
     * @param $username string username
     * @param $password string password
     * @return View::make('user')
     */
    public function doAuth($username, $password)
    {
        return View::make('users', array('user' => array($username, $password)));
    }

    /**
     * createUser create a new user
     * @param mixed $data
     * @return View::make('user')
     */
    public function createUser(array $data)
    {
        if(!is_array($data)) {
            throw new \Symfony\Component\Finder\Exception\AccessDeniedException(e);
        }

        return View::make('users', array('user' => $data['username'], 'data' => $data));
    }
}