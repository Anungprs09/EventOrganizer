<?php
namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid;

class EventController extends Controller
{
    public function index(){
        $event = Event::get();
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
        $image = $request->image;

        $event = new Event;
        if ($request->hasFile('image')) {
        $image = $request->file('image');
        $uuid4 = Uuid::uuid4();
        $name = $uuid4->toStrong(). '.' .$image->getClientOriginalExtension();
        $destination = public_path('/images/event');
        $imagePath = $destinationPath. '/' .$name;
        $image->move(destinationPath, $name);
        $event->image = $name;
        }

        $event->name = $request->name;
        $event->detail = $request->detail;
        $event->description = $request->description;
        $event->start = $request->start;
        $event->finish = $request->finish;
        $event->quota = $request->quota;
        $event->save();
        return redirect('admin/event');
        }

     public function update(Request $request, $id){

        $event = Event::find($id);
        if ($request->hasFile('image')) {
        $image = $request->file('image');
        $uuid4 = Uuid::uuid4();
        $name = $uuid4->toStrong(). '.' .$image->getClientOriginalExtension();
        $destination = public_path('/images/event');
        $imagePath = $destinationPath. '/' .$name;
        $image->move(destinationPath, $name);
        $event->image = $name;
        }

        $event->name = $request->name;
        $event->detail = $request->detail;
        $event->description = $request->description;
        $event->start = $request->start;
        $event->finish = $request->finish;
        $event->quota = $request->quota;
        $event->save();
        return redirect('admin/event');
        }

        public function destroy($id){
            $event = \App\Event::find($id);
            $event->delete();
            return redirect('admin/event');
        }
        }
