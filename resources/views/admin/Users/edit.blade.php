@extends ('layouts.stisla')

@section ('title','user page')

@section('content')
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>user edit</h1>
          </div>
          <div class="section-body">
              
          <div class="container p-4">
<h1 class="text-center">Tambah User</h1>
<form class="" action="/admin/users/update/{{$users->id}}" method="post">
{{csrf_field()}}
<div class="row">
<div class="col-lg-6 form-group">
<label>Nama</label>
<input type="text" name="nama" placeholder="Nama" class="form-control"
value="{{$users->name}}"><br>
<label>Email</label>
<input type="text" name="email" placeholder="Deskripsi" class="form-control"
value="{{$users->email}}"><br>
<label>Password</label>
<input type="password" name="password" placeholder="Password" class="form-control"
value="{{$users->password}}">
</div>
</div><br>
<input type="submit" name="submit" value="Edit User" class="btn btn-md btn-primary">
<a href="/admin/users" class="btn btn-md btn-danger">Batalkan</a>
</form><br><br>
</div>
          </div>
        </section>
</div>
@endsection