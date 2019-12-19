@extends ('layouts.stisla')

@section ('title','Event page')

@section('content')
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Event</h1>
          </div>
          <div class="section-body">
          <div class="container p-4">
          <h1 class="text-center">E V E N T</h1>
          <a class="btn btn-md btn-success" href="create" >Tambah Event</a><br><br>
          <table class="table">
          <tr>
          <th>No</th>
          <th>name</th>
          <th>detail</th>
          <th>description</th>
          <th>start</th>
          <th>quota</th>
          <th>Opsi</th>
          </tr>
          <tr>
          <td>1</td>
          <td>name Event</td>
          <td>detail Event</td>
          <td>description Event</td>
          <td>start</td>
          <td>finish</td>
          <td>quota Event</td>
          <td>
          <button type="button" class="btn btn-sm btn-primary" name="button"> <i class="fa
          fa-pencil"></i> Edit</button>
          <button type="button" class="btn btn-sm btn-danger" name="button"
          onclick="confirm('Yakin ingin menghapus ?')"> <i class="fa fa-trash"></i> Hapus</button>
          </td>
          </tr>
          <tr>
          <td>1</td>
          <td>name Event</td>
          <td>description Event</td>
          <td>start</td>
          <td>finish</td>
          <td>quota Event</td>
          <td>
          <button type="button" class="btn btn-sm btn-primary" name="button"> <i class="fa
          fa-pencil"></i> Edit</button>
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
