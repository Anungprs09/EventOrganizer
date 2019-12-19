
@extends ('layouts.stisla')

@section ('title','Event page')

@section('content')
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>create data</h1>
          </div>
          <div class="section-body">            
          <div class="container p-4">
<h1 class="text-center">Tambah Event</h1>
<form action="/admin/event" method="post">
{{ csrf_field() }}
<div class="row">
<div class="col-lg-6 form-group">
<label>Nama</label>
<input type="text" name="nama" placeholder="Nama" class="form-control"><br>
<label>Deskripsi</label>
<input type="text" name="deskripsi" placeholder="Deskripsi" class="form-control">
</div>
<div class="col-lg-6">
<label>Tanggal</label>
<input type="date" name="tgl" placeholder="Tanggal" class="form-control"><br>
<label>Kuota</label>
<input type="number" name="kuota" placeholder="jumlah" class="form-control">
</div>
</div><br>
<input type="submit" value="Tambah Event" class="btn btn-md btn-primary">
<a href="/admin/event" class="btn btn-md btn-danger">Batalkan</a>
</form><br><br>
</div>
  </div>
</div>      
@endsection
