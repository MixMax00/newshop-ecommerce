<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminContoller extends Controller
{
  public function admin()
  {
      return view('Admin.admin.admin');
  }
}
