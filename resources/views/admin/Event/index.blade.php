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
          <a class="btn btn-md btn-success" href="event/create" >Tambah Event</a><br><br>
          <table class="table">
          <tr>
              <th>No</th>
              <th>name</th>
              <th>detail</th>
              <th>description</th>
              <th>start</th>
              <th>finish</th>
              <th>quota</th>
              <th>Opsi</th>
          </tr>

          <?php
          $no = 1;
          ?>
          @foreach($event as $myevent)
          <tr>
        <td>{{$no++}}</td>
        <td>{{$myevent->name}}</td>
        <td>{{$myevent->detail}}</td>
        <td>{{$myevent->description}}</td>
        <td>{{$myevent->start}}</td>
        <td>{{$myevent->finish}}</td>
        <td>{{$myevent->quota}}</td>
          <td>
        <form action="event/{{$myevent->id}}" class="row" method="post">
        {{csrf_field()}}

          <button type="button" class="btn btn-sm btn-primary" name="button"
          onclick="location.href='event/{{$myevent->id}}/edit'"> <i class="fafa-pencil"></i> Edit</button>
          <button type="submit" class="btn btn-sm btn-danger" name="button"
          onclick="confirm('Yakin ingin menghapus ?')"> <i class="fa fa-trash"></i> Hapus</button>
          </form>
          </td>
       
          </tr>
        @endforeach
        </table>
          </div>
        </section>
</div>
@endsection
