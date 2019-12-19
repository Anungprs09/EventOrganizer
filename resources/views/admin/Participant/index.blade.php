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
                              <?php
                    $no = 1;
                    ?>
                    <div class="container p-4">
                    <h1 class="text-center">P E S E R T A</h1>
                    <table class="table">
                    <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kouta</th>
                    <th>Opsi</th>
                    </tr>
                    <tr>
                    <td>1</td>
                    <td>Nama Event</td>
                    <td>1000</td>
                    <td>
                    <a class="btn btn-sm btn-danger" href="peserta/view"> <i class="fa fa-eye"></i>
                    Lihat</button>
                    </a>
                    </tr>
                    </table>
                    </div>
          </div>
        </section>
</div>
@endsection
