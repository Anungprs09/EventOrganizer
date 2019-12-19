@extends ('layouts.stisla')

@section ('title','Participant page')

@section('content')
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>event edit</h1>
          </div>
          <div class="section-body">
             <div class="container p-4">
                <h1 class="text-center">Edit Event</h1>
                <form class="" action="/admin/event/update" method="post">
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
                <input type="number" name="kuota" placeholder="Nama" class="form-control">
                </div>
                </div><br>
                <input type="submit" value="Edit Event" class="btn btn-md btn-primary">
                <a href="/admin/event" class="btn btn-md btn-danger">Batalkan</a>
                </form><br><br>
                </div>
 
          </div>
        </section>
</div>
@endsection