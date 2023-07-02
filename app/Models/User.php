<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Request;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    static public function getEmailSingle($email)
    {
        return User::where('email', '=', $email)->first();
    }
    static public function getSingle($id)
    {
        return self::find($id);
    }
    static public function getTokenSingle($remember_token)
    {
        return User::where('remember_token', '=', $remember_token)->first();
    }



    public static function getAdmin()
    {
        $query = self::select('users.*')
            ->where('user_type', '=', 1)
            ->where('is_delete', '=', 0);

        if (!empty(Request::get('name'))) {
            $query->where('name', 'like', '%' . Request::get('name') . '%');
        }
        if (!empty(Request::get('date'))) {
            $query->whereDate('created_at', '=', Request::get('date'));
        }
        if (!empty(Request::get('email'))) {
            $query->where('email', 'like', '%' . Request::get('email') . '%');
        }

        $query->orderBy('id', 'desc');
        $result = $query->paginate(3);

        return $result;
    }
    public static function getStudent()
    {
        $return = self::select('users.*', 'class.name as class_name')
            ->leftJoin('class', 'class.id', '=', 'users.class_id')
            ->where('users.user_type', '=', 3)
            ->where('users.is_delete', '=', 0)
            ->orderBy('users.id', 'desc')
            ->paginate(20);

        return $return;
    }
    public static function getTeacher()
    {
        $query = self::select('users.*', 'subject.name as subject_name')
            ->leftJoin('subject', 'subject.id', '=', 'users.subject_id')
            ->where('users.user_type', '=', 2)
            ->where('users.is_delete', '=', 0);
            if (!empty(Request::get('name'))) {
                $query->where('users.name', 'like', '%' . Request::get('name') . '%');
            }
            
            if (!empty(Request::get('email'))) {
                $query->where('users.email', 'like', '%' . Request::get('email') . '%');
            }
            
            if (!empty(Request::get('date'))) {
                $query->whereDate('users.created_at', '=', Request::get('date'));
            }
            
            $query->orderBy('users.id', 'desc');
            $result = $query->paginate(20);

        return $result;
    }
}
