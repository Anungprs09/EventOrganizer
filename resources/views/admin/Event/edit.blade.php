@extends ('layouts.stisla')

@section ('title','event page')

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
                <form class="" action="/admin/event/update/{{$event->id}}" method="post">
                {{ csrf_field()}}
                <div class="row">
                <div class="col-lg-6 form-group">
                <label>Nama</label>
                <input type="text" name="name" placeholder="name" class="form-control" value="{{$event->name}}"><br>
                <label>detail</label>
                <input type="text" name="detail" placeholder="detail" class="form-control" value="{{$event->detail}}"><br>
                <label>description</label>
                <input type="text" name="description" placeholder="description" class="form-control" value="{{$event->description}}"><br>
                <div class="col-lg-6">
                <label>dimulai event</label>
                <input type="time" name="start" placeholder="start" class="form-control" value="{{$event->start}}"><br>
                <label>selesai event</label>
                <input type="time" name="finish" placeholder="finish" class="form-control" value="{{$event->finish}}"><br>
                <label>Kuota</label>
                <input type="number" name="quota" placeholder="quota" class="form-control" value="{{$event->quota}}">
                </div>
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