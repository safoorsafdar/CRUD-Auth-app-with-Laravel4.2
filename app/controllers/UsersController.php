<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author safoor
 */
class UsersController extends BaseController {

    public function __construct() {
        $this->beforeFilter('csrf', array('on' => 'post'));
    }

    public function getRegister() {
        return View::make('users.register');
    }

    public function postCreate() {
        $validator = Validator::make(Input::all(), User::$rules);

        if ($validator->passes()) {
            $user = new User;
            $user->firstname = Input::get('firstname');
            $user->lastname = Input::get('lastname');
            $user->email = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $user->save();
            return Redirect::to('user/login')->with('message', 'Thanks for registering!');
        } else {
            return Redirect::to('user/register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
        }
    }

    public function getLogin() {
        return View::make('users.login');
    }

    public function postSignin() {
        if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
            return Redirect::to('product')->with('message', 'You are now logged in!');
        } else {
            return Redirect::to('user/login')
                            ->with('message', 'Your username/password combination was incorrect')
                            ->withInput();
        }
    }

    public function getLogout() {
        Auth::logout();
        return Redirect::to('user/login')->with('message', 'Your are now logged out!');
    }

}
