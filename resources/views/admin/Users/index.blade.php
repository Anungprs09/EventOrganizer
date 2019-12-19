@extends ('layouts.stisla')

@section ('title','User page')

@section('content')
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>user</h1>
          </div>
          <div class="section-body">

          <div class="container p-4">
<h1 class="text-center">U S E R</h1>
<a class="btn btn-md btn-success" href="users/create" >Tambah User</a><br><br>
<table class="table">
<tr>
<th>No</th>
<th>Nama</th>
<th>Email</th>
<th>Opsi</th>
</tr>
<?php
$no = 1;
// $users = DB::table('users')->where('status', '=', 'user')->get();
?>
@foreach($users as $user)
<tr>
<td>{{$no++}}</td>
<td>{{$user->name}}</td>
<td>{{$user->email}}</td>
<td>
<form action="users/{{$user->id}}" class="row" method="post">
{{csrf_field()}}
<button type="button" class="btn btn-sm btn-primary" name="button"
onclick="location.href='users/{{$user->id}}/edit'"><i class="fa fa-pencil"></i>
Edit</button>
<button type="submit" class="btn btn-sm btn-danger" name="button"
onclick="confirm('Yakin ingin menghapus ?')"><i class="fa fa-trash"></i> Hapus</button>
</form>
</td>
</tr>
@endforeach
</table>
</div>


      </section>
      </div>
      @endsection
