<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    protected $guarded = ['id'];

    /**
     * Login Validation module
     *
     * @param array
     * @return Response
     */
    public static function checkLogin($credentials = [])
    {
        if ($credentials) {
            // Checking user in database
            $user = User::where('username', $credentials['username'])->get()->first();

            if (!isset($user) || empty($user)) {
                // Return if username not found
                return Response::json(['error' => true, 'data' => 'Username not found']);
            }

            if (Auth::attempt($credentials)) {

                // if user is not active
                if (Auth::user()->status == 0) {
                    Auth::logout();
                    Session::flush();
                    return Response::json(['error' => true, 'data'  => 'Username don\'t have access']);
                }
                // returning success response
                return Response::json(['error' => false, 'data'  => 'Login success']);

            } else {
                // returning error response
                return Response::json(['error' => true, 'data'  => 'Login credentials are not correct']);

            }
        } else {
            return Response::json(['error' => true, 'data' => 'Login credentials required']);
        }
    }

    public static function getUserByUsername($username = '')
    {
        if (!empty($username)) {
            return User::where('username', $username)->get()->first();
        } else {
            return Response::json(['error' => true, 'data' => 'Missing arrguments username']);
        }
    }

    public function emoloyee()
    {
        return $this->hasOne('employee');
    }

}
