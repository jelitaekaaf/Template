@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Data Siswa</div>
                <div class="card-body">
                  <form action="" method="POST">
                    <div class="mb-3">
                      <label class="form-label">Nama Siswa</label>
                      <input type="text" class="form-control" name="nama" value="{{$siswa->nama}}" disabled>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <input type="text" class="form-control" name="kelas" value="{{$siswa->kelas}}" disabled>
                        </div>
                      <a href="{{url('/siswa')}}" class="btn btn-primary">Back</a>     
                  </form>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
