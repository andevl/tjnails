<?php

namespace App;
use Validator;
use Input;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username', 'email', 'password'];

        public static function check_login($user_input,$password){
        $array1=array('user_input'=>$user_input);
        $rules=array("user_input"=>"email");
        if(Validator::make($array1,$rules)->fails())
            $check=User::where("username","=",$user_input)->where("password","=",$password)->count();
        else
            $check=User::where("email","=",$user_input)->where("password","=",$password)->count();
        if($check>0)
            return true;
        else return false;
    }
    public static function check_username($username){
        if(User::where("username","=",$username)->count()>0)
            return false;
        else return true;
    }
    public static function check_email($email){
        if(User::where("email","=",$email)->count()>0)
            return false;
        else return true;
    }

}
