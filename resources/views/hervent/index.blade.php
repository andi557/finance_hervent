@extends('layout/main');

@section('title','Finance | Hervent')
@section('container')

    <div class="container">
    <div class="row">
    <div class="col-10">
    <h1 class="mt-3" align='center'> Daftar Invoice Hervent</h1>
    <a href="/hervent/create" class="btn btn-outline-primary my-3">Tambah Data</a>
   
  @if (session('status'))
  <div class="alert alert-success">
   {{ session('status') }}
  </div>
  @endif

    <table class="table">
  <thead class="table-dark">
      <tr>
    <th scope="col">#</th>
    <th scope="col">Nama Project</th>
    <th scope="col">Nama Customer</th>
    <th scope="col"> </th> 
    </tr>  
</thead>
  <tbody>
     @foreach( $hervent as $hv )
      <tr>
          <th scope="row">{{$loop->iteration}}</th>
          <td>{{ $hv->namaproject }}</td> 
          <td>{{ $hv->namacustomer }}</td> 
          <td align="right">
          <a href="/hervent/{{$hv->id}}" class="btn btn-outline-success">Invoice</a>
          
          <a href="/hervent/{{$hv->id}}/edit" class="btn btn-outline-info"> Edit & Pelunasan </a>
       <form action="/hervent/{{$hv->id}}" method="post" class="d-inline">
          @method('delete')
          @csrf
        <button type="submit" class="btn btn-outline-danger"> Delete</button>
          </form>

        </td>
    </tr>
   @endforeach
  </tbody>
</table>

    </div>
    </div>
    </div>
    

@endsection