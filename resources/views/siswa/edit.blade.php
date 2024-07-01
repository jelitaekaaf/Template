@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Siswa</div>
                <div class="card-body">
                  <form action="{{route('siswa.update', $siswa->id)}}" method="POST">
                  @csrf
                  @method('PUT')  
                    <div class="mb-3">
                      <label class="form-label">Nama Siswa</label>
                      <input type="text" class="form-control" name="nama" value="{{$siswa->nama}}">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <input type="text" class="form-control" name="kelas" value="{{$siswa->kelas}}">
                        </div>
                      <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
