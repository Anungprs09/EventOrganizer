<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class EventController extends Controller
{
    public function index(){
        $event = \App\Event::get();
        return view('admin.event.index')->with('event', $event);
        }
        
  public function create(){
        return view('admin.event.create');
        }

 public function edit($id)
        {
        $event = \App\Event::find($id);
        return view('admin.event.edit')->with('event',$event);
        }

 public function store(Request $request){
        $nama = $request->name;
        $detail = $request->detail;
        $description = $request->description;
        $start = $request->start;
        $finish = $request->finish;
        $quota = $request->quota;
        $event = new \App\Event;
        $event->foto = Input::get('file');
        if (Input::hasFile('file')) {
        $event= Input::file('file');
        $event->move(public_patch(). '/', $file->getClientOriginalName());
        $user->name= $event->getClientOriginalName();
        }
        $event->nama = $name;
        $event->destail = $detail;
        $event->description = $description;
        $event->start = $start;
        $event->finish = $finish;
        $event->quota = $quota;
        $event->save();
        return redirect('admin/event');
        }

     public function update(Request $request, $id){
        $name = $request->name;
        $description = $request->description;
        $tgl = $request->tgl;
        $quota = $request->quota;
        $event = \App\Event::find($id);
        $event->name = $name;
        $event->description = $description;
        $event->tgl = $tgl;
        $event->quota = $quota;
        $event->save();
        return redirect('admin/event');
        }

        }
