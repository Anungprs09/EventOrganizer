@extends ('layouts.stisla')

@section ('title','Participant page')

@section('content')
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>user</h1>
          </div>
          <div class="section-body">
              <div class="container p-4">
              <h1 class="text-center">Tambah User</h1>
              <form class="" action="/admin/users" method="post">
              {{ csrf_field() }}
              <div class="row">
              <div class="col-lg-6 form-group">
              <label>Nama</label>
              <input type="text" name="nama" placeholder="Nama" class="form-control"><br>
              <label>Email</label>
              <input type="text" name="email" placeholder="Deskripsi" class="form-control"><br>
              <label>Password</label>
              <input type="password" name="password" placeholder="Password"
              class="form-control">
              </div>
              </div><br>
              <input type="submit" name="submit" value="Tambah User" class="btn btn-md
              btn-primary">
              <a href="/admin/users" class="btn btn-md btn-danger">Batalkan</a>
              </form><br><br>
              </div>
          </div>
        </section>
</div>
@endsection