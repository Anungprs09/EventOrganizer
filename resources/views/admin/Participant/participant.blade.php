@extends ('layouts.stisla')

@section ('title','participant page')

@section('content')
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>participant</h1>
          </div>
          <div class="section-body">
          <div class="container p-4">
<h1 class="text-center">PARTICIPANT</h1>
<!-- <a class="btn btn-md btn-success" href="/admin/participant/create">Tambah
participant</a><br><br> -->
<table class="table">
<tr>
<th>No</th>
<th>Name</th>
<th>Email</th>
<th>Event</th>
<th>Opsi</th>
</tr>
@php
$no = 1
@endphp
@foreach($participant as $participants)
<tr>
<td>{{$no++}}</td>
<td>{{$participants->name}}</td>
<td>{{$participants->email}}</td>
<td>{{$participants->name}}</td>
<td>
<form action="/admin/participant/{{$participants->id}}" class="row" method="post">
{{csrf_field()}}
<!-- <button type="button" class="btn btn-sm btn-danger" name="button"
onclick="confirm('Yakin ingin menghapus ?')"> <i class="fa fa-trash"></i> Hapus</button>
-->
<button type="submit" class="btn btn-sm btn-danger" name="button"
onclick="confirm('Yakin ingin menghapus ?')"><i class="fa fa-trash"></i> Hapus</button>
</form>
</td>
</tr>
@endforeach
</table>
</div>

          </div>
        </section>
</div>
@endsection