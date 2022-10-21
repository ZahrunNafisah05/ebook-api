<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller{
      public function me(){
            return [
                  'Nis' => 3103120237,
                  'Name' => 'Zahrun Nafisah',
                  'Phone' => '081228577187',
                  'Class' => 'XII RPL 7'
            ];
      }
} 