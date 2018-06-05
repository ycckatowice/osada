<?php
namespace App\Controllers;

use App\Models\User;
use Illuminate\Database\Capsule\Manager as DB;

class UserController extends BaseController
{
    public function getAll($request, $response, $args)
    {
        $formData = (array)$request->getParsedBody();
        $users = User::all();
      
        exit(json_encode([
            'success' => false,
            'data' => $users,
            'extra_msg' => $this->errors
        ]));
    }
}