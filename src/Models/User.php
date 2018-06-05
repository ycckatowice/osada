<?php
namespace App\Models;

class User extends Elegant
{
    protected $table = 'users';
    protected $rules = [
//        'participation' => 'required|in:YES,NO',
//        'lastname' => ['required', 'regex:/^[^0-9\[\]\;\~\!\@\#\$\%\^\&\*\(\)\-\_\+\=\{\}\;\:\<\>\?\/\.\,\|]+$/'],
//        'firstname' => ['required', 'regex:/^[^0-9\[\]\;\~\!\@\#\$\%\^\&\*\(\)\-\_\+\=\{\}\;\:\<\>\?\/\.\,\|]+$/'],
//        'city' => ['required', 'regex:/^[^0-9\[\]\;\~\!\@\#\$\%\^\&\*\(\)\-\_\+\=\{\}\;\:\<\>\?\/\.\,\|]+$/'],
//        'pesel' => 'required|distinct|digits:11',
//        'phone' => ['required', 'regex:/^(\(?\+([0-9]){2}\)? )?((([0-9]){3}\-){2}(([0-9]){3})|([0-9]){9})/'],
//        'email' => 'required|email',
//        'eng_level' => 'required|in:Zaawansowany,Średni,Początkujący,Zerowy',
//        'room' => 'required|in:YES,NO',
//        'group' => ['required', 'regex:/([0-9]){1,3}/'],
//        'prepayment' => 'required',
    ];
}