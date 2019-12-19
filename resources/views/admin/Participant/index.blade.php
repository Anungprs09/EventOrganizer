@extends ('layouts.stisla')

@section ('title','Participant page')

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
        <table class="table">
        <tr>
        <th>No</th>
        <th>name</th>
        <th>Opsi</th>
        </tr>
        <?php
        $no= 1;
        ?>
        @foreach($event as $myevent)
        <tr>
        <td>{{$no++}}</td>
        <td>{{$myevent->name}}</td>
        <td>
        <a class="btn btn-sm btn-danger" href="participant/{{$myevent->id}}/view"> <i
        class="fa fa-eye"></i> Lihat</button>
        </a>
        </tr>
        @endforeach
        </table>
        </div>


          </div>
        </section>
</div>
@endsection
