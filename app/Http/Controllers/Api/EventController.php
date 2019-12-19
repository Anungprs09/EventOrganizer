<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Event;

class EventController extends Controller
{
    
    public function index(){
       $data =  Event::all();
       return response()->json(['data' => $data],200);
    }

   
    public function create(Request $request){
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $message =[
            'name.required' => 'pastikan anda mengisi nama anda'
        ];

        $validasi= validator::make($request ->all(),[
            'name' =>'required|string',
            'detail' =>'required|string',
            'description' =>'required|string|max:255',
            'start' =>'required|date_format:h:i',
            'finish' =>'required|date_format:h:i',
            'quota' =>'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],$message);

        if($validasi ->fails()){
            $this->data['message'] = 'Error';
            $this->data['data'] = $validasi->errors();
            return $this->data;
        }

       try {
        $file = $request->file('file');
        $getimageName = time().'.'.$file->getClientOriginalExtension();
         $file->move(public_path('image/Event'), $getimageName);
           $event = Event::create([
            'name' =>$request->name,
            'detail' =>$request->detail,
            'description' =>$request->description,
            'start' =>$request->start,
            'finish' =>$request->finish,
            'quota' =>$request->quota,
            'image' => $file->getClientOriginalName()
           ]);
           return response()->json([
               'message'=>'data berhasil ditambahkan',
               'data'=> $event
           ],200);
       } catch (\Throwable $th) {
           return response()->json([
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
            'name.required' => 'pastikan anda mengisi nama anda'
        ];

        $validasi= validator::make($request ->all(),[
            'name' =>'required|string',
            'detail' =>'required|string',
            'description' =>'required|string',
            'start' =>'required|date_format:h:i',
            'finish' =>'required|date_format:h:i',
            'quota' =>'required|numeric',
            'foto' => 'image|mimes:jpg,jpeg,gif,png'
        ],$message);

        if($validasi ->fails()){
            $this->data['message'] = 'Error';
            $this->data['data'] = $validasi->errors();
            return $this->data;
        }

        try {
            $file = $request->file('file');
            $getImageName = time(). '.'.$file->getClientOriginalExtension();
            $file ->move(public_path ('image/Event'), $getImageName);
            $event = Event::where('id', $id)->update([
                'name' => $request->name,
                'detail' => $request->detail,
                'description' => $request->description,
                'start' => $request->start,
                'finish' => $request->finish,
                'quota' => $request->quota,
                'foto' => $file->getClientOriginalName()
            ]);

            return response()->json([
                'message'=>'data berhasil di update',
                'data'=> $event
            ],200);
            
        } catch (\Throwable $th) {
            return response() ->json([
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
            $data = Event::where('id', $id)
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
