<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
        {
        public function index(){
            $users = User::get();
            return view('admin.users.index')->with('users', $users);
            
        }

        public function create(){
        return view('admin.users.create');
        }

        public function edit($id){
            $users = \App\User::find($id);
            return view('admin.users.edit')->with('users',$users);
            
        }

        public function store(Request $request){
        $nama = $request->nama;
        $email = $request->email;
        $password = $request->password;
        $password = bcrypt($password);
        $users = new User;
        $users->name = $nama;
        $users->email = $email;
        $users->password = $password;
        $users->save();
        return redirect('admin/users');
        }

        public function update(Request $request, $id)
        {
        $nama = $request->nama;
        $email = $request->email;
        $password = $request->password;
        $users = \App\User::find($id);
        $users->name = $nama;
        $users->email = $email;
        $users->password = $password;
        $users->save();
        return redirect('admin/users');
        }
        
        public function destroy($id){
        $users = \App\User::find($id);
        $users->delete();
        return redirect('admin/users');
        }


        }