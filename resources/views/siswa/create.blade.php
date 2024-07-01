@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Data Siswa</div>
                <div class="card-body">
                  <form action="{{ route('siswa.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Nama siswa</label>
                      <input type="text" class="form-control" name="nama">
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <input type="text" class="form-control" name="kelas">
                        </div>  
                      <button type="submit" class="btn btn-info">Save</button>
                     
                  </form>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
