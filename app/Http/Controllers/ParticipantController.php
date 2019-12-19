<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ParticipantController extends Controller
{
public function index()
{
return view('admin.participant.index');
}
public function view()
{
return view('admin.participant.peserta');
}
public function destroy()
{
return redirect('admin.participant.peserta');
}
}