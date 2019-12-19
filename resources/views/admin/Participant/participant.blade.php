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
<h1 class="text-center">P E S E R T A</h1>
<table class="table">
<tr>
<th>No</th>
<th>Nama</th>
<th>Email</th>
<th>Event</th>
<th>Opsi</th>
</tr>
<tr>
<td>1</td>
<td>Nama User</td>
<td>Email User</td>
<td>Event Diikuti</td>
<td>
<button type="button" class="btn btn-sm btn-danger" name="button"
onclick="confirm('Yakin ingin menghapus ?')"> <i class="fa fa-trash"></i> Hapus</button>
</td>
</tr>
</table>
</div>
          </div>
        </section>
</div>
@endsection