<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*DATATABELS FUNCTIONS*/

    /*users*/
    public function FetchDatatableUserRecords($request)
    {
        return DB::table('learn-laravel_users')
                 ->select('id', 'name')
                 ->where('user_type_idFk', 1)
                 ->orderBy('id', 'DESC')
                 ->paginate(5);
    }

    public function UpdateIndexUsersDataTables($request)
    {
        if ( $request->termFlag )
        {
            $term = $request->term;
            
            return  DB::table('learn-laravel_users')
                      ->select('id' ,'name')
                      ->where('firstname', 'like', "%$term%")->orWhere('lastname', 'like', "%$term%")
                      ->where('user_type_idFk', 1)
                      ->orderBy('id', 'DESC')
                      ->paginate($request->range);
        }

        return DB::table('learn-laravel_users')
                 ->where('user_type_idFk', 1)
                 ->select('id' ,'name')
                 ->orderBy('id', 'DESC')
                 ->paginate($request->range);    
    }

    public function SearchIndexUsersDataTables($request)
    {
        $term = $request->term;

        return DB::table('learn-laravel_users')
                 ->select('id' ,'name')
                 ->where('firstname', 'like', "%$term%")
                 ->where('user_type_idFk', '1')
                 ->orWhere('lastname', 'like', "%$term%")
                 ->where('user_type_idFk', '1')
                 ->orderBy('id', 'DESC')
                 ->paginate($request->range);
    }
}
