@extends('layout/main')

@section('title', 'Form Pelunasan')

@section('container')
    <div class="container">
    <div class="row">
        <div class="col-8">
    <center><h1 class="mt-3"> Pelunasan Project {{ $hervent->namaproject }}</h1></center><br>
    
    
    <form method="post" action="/hervents/pelunasan">
   
    <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <label>Tanggal Input Data</label>
                <div class="input-group mb-4">
                  <input class="form-control"  placeholder="<?php echo date("d-m-Y"); ?>" type="text" disabled>
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Down Payment</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="{{ $hervent->downpayment }}" disabled>
                </div>
              </div>
            </div>
           
   
    
  <div class="mb-3">
    <label for="Jumlah Peulnasan" class="form-label">Jumlah Pelunasan</label>
    <input type="text" placeholder="Rp." class="form-control" id="pelunasan" name="pelunasan">
    </div>

    
<br>
  <button type="submit" class="btn btn-primary">Save</button>
  <a href="/hervent" class="btn btn-dark">Kembali</a>
</form>
   

    </div>
    </div>
    </div>
@endsection