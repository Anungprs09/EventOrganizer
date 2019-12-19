<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
class ParticipantController extends Controller
{
    public function index()
        {
        $event = DB::table('events')->get();
        return view('admin.participant.index',compact('event'));
        }

    
    public function view($id)
{
$participant = \App\participant::find($id);
$participant = DB::table('participants')
->join('users','participants.user_id','=','users.id')
->where('event_id', $id)
->join('events','participants.event_id','=','events.id')
->get();
return view('admin.participant.participant',compact('participant'));
}

public function destroy($id){
$participants = \App\participant::find($id);
$participants = DB::table('participants')
->join('users' , 'participants.user_id', '=','users.id')
->where('user_id',$id)
->delete();
return redirect('admin/participant')->with('status', 'Data berhasil dihapus');
}
}