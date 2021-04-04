@extends('ppdbs.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard Admin</div>

                <div class="card-body">

                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama Lengkap</th>
                          <th scope="col">E-Mail</th>
                          <th scope="col">NIS</th>
                          <th scope="col">NEM</th>
                          <th scope="col">FOTO</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 0; ?>
                        @foreach ($users as $user)
                        <?php $i++ ;?>
                        <tr>
                          <th scope="row">{{ $i }}</th>
                          <td>{{ $user->Biodata->nama }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->Biodata->nis }}</td>
                          <td>{{ $user->Biodata->nem }}</td>
                          <td>
                           <a href="{{asset('images')}}/{{$user->Biodata->url_foto}}" target="_blank">Lihat Foto {{ $user->Biodata->nama }}</a>
                           
                          </td>
                        </tr>
                        @endforeach

                      </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection