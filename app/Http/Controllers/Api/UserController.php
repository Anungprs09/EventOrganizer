<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = User::all();
        return response()->json(['data' => $data],200);
    }


/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
    //
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request){
    $message =[
        'name.required' => 'pastikan anda mengisi nama anda',
        'email.required' => 'pastikan anda megisi email anda',
        'password.required' => 'pastikan password anda isi'
    ];

    $validasi= validator::make($request ->all(),[
        'name' => 'required|alpha',
        'email' => 'required|email',
        'password' => 'required|numeric',
    

    ],$message);

    if($validasi ->fails()){
        $this->data['message'] = 'Error';
        $this->data['data'] = $validasi->errors();
        return $this->data;
    }

    try{
        $user = User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' =>$request->password,
        ]);

        return response()->json([
            'message'=>'data berhasil ditambahkan',
            'data'=> $user
        ],200);
    } catch (\Throwable $th) {
        return response ()->json ([
            'message'=>'data gagal ditambahkan',
            'data'=> null
        ],400);
    }
}

/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function show($id)
{
    //
}

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    //
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, $id){
    $message =[
        'name.required' => 'pastikan anda mengisi nama anda',
        'email.required' => 'pastikan anda megisi email anda',
        'password.required' => 'pastikan password anda isi'
    ];

    $validasi= validator::make($request ->all(),[
        'name' => 'required|alpha',
        'email' => 'required|email',
        'password' => 'required|numeric'
    ],$message);

    if($validasi ->fails()){
        $this->data['message'] = 'Error';
        $this->data['data'] = $validasi->errors();
        return $this->data;
    }

    try {
        $user = User::where('id' , $id)->update([
            'name' => $request ->name,
            'email' => $request ->email,
            'password' => $request ->password,
        ]);
        return response()->json ([
            'message'=>'data berhasil di update',
            'data'=>$user
        ],200);
    } catch (\Throwable $th) {
        return response()->json ([
            'message'=>'data gagal di update',
            'data'=> null
        ],400);
    }
    
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id){
    try {
        $data = User::where('id', $id)
        ->delete();

        return response ()->json ([
            'message'=>'data berhasil di hapus',
            'data'=> $data
        ],200);
     } catch (\Throwable $th) {
     return response()->json([
         'message'=>'data gagal dihapus',
         'data'=> $th
     ],400);
    }
    
}
}
