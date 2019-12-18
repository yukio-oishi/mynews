<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
<<<<<<< HEAD
  // 以下を追記
=======
    // 以下を追記
>>>>>>> a5692f5effbcd134e2afedabc1394b612c1a9d7a
  public function add()
  {
      return view('admin.profile.create');
  }
  
  public function create()
  {
      return redirect('admin/profile/create');
  }
  
  public function edit()
  {
      return view('admin.profile.edit');
  }
  
  public function update()
  {
      return redirect('admin/profile/edit');
  }
}
