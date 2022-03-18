@extends('layout/main');

@section('title','Finance | Tambah Data ')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
    <center><h1 class="mt-3"> Tambah Data Invoice </h1></center><br>

    <form method="post" action="/hervent">
        @csrf
        <div class="card-body">
    <div class="row">
              <div class="col-md-3">
                <label for="tanggalbuat">Tanggal Input Data</label>
                <div class="input-group mb-4">
                  <input class="form-control"  placeholder="" type="date" id="tanggalbuat" name="tanggalbuat" value="<?php echo date("Y-m-d"); ?>" >
                </div>
              </div>


              <div class="col-md-3 ps-2">
                <label for="tanggalbuat">Tanggal Jatuh Tempo</label>
                <div class="input-group mb-4">
                  <input class="form-control"  placeholder="" type="date" id="jatuhtempo" name="jatuhtempo" value="<?php echo date("Y-m-d"); ?>" >
                </div>
              </div>

              

  <div class="mb-3">
    <label for="Nama Customer" class="form-label">Nama Customer</label>
    <input type="text" class="form-control" id="namacustomer" name="namacustomer" >
    </div>

    <div class="mb-3">
    <label for="Nama Customer" class="form-label">Nama Project</label>
    <input type="text" class="form-control" id="namaproject" name="namaproject" >
    </div>

            <div class="mb-3">
    <label for="Nama Customer" class="form-label">Metode Bayar</label>
    <input type="text" class="form-control" id="metodebayar" name="metodebayar" >
    </div>       

    <div class="mb-3">
    <label for="Nama Customer" class="form-label">Nomor FA</label>
    <input type="text" class="form-control" id="nomorfa" name="nomorfa" >
    </div>

    <div class="mb-3">
    <label for="Nama Customer" class="form-label">Total</label>
    <input type="text" class="form-control" id="total" name="total">
    </div>


    <div class="mb-3">
    <label for="Nama Customer" class="form-label">Down Payment</label>
    <input type="text" class="form-control" id="downpayment" name="downpayment">
    </div>

    
            <div class="row">
              <div class="col-md-3">
                <label>Item 1</label>
                <div class="input-group mb-4">
                  <input class="form-control"  placeholder="" type="text" id="item1" name="item1" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Quantity</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" id="qty1" name="qty1" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Rate</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="harga1" name="harga1" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Amount</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="amount1" name="amount1" >
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-3">
                <label>Item 2</label>
                <div class="input-group mb-4">
                  <input class="form-control"  placeholder="" type="text" id="item2" name="item2" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Quantity</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" id="qty2" name="qty2" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Rate</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="harga2" name="harga2" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Amount</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="amount1" name="amount2">
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-3">
                <label>Item 3</label>
                <div class="input-group mb-4">
                  <input class="form-control"  placeholder="" type="text" id="item3" name="item3" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Quantity</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" id="qty3" name="qty3" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Rate</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="harga3" name="harga3" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Amount</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="amount3" name="amount3" >
                </div>
              </div>
            </div>



            <div class="row">
              <div class="col-md-3">
                <label>Item 4</label>
                <div class="input-group mb-4">
                  <input class="form-control"  placeholder="" type="text" id="item4" name="item4" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Quantity</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" id="qty4" name="qty4" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Rate</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="harga4" name="harga4" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Amount</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="amount4" name="amount4" >
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <label>Item 5</label>
                <div class="input-group mb-4">
                  <input class="form-control"  placeholder="" type="text" id="item5" name="item5" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Quantity</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" id="qty5" name="qty5" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Rate</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="harga5" name="harga5" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Amount</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="amount5" name="amount5" >
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-3">
                <label>Item 6</label>
                <div class="input-group mb-4">
                  <input class="form-control"  placeholder="" type="text" id="item6" name="item6" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Quantity</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" id="qty6" name="qty6" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Rate</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="harga6" name="harga6" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Amount</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="amount6" name="amount6" >
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <label>Item 7</label>
                <div class="input-group mb-4">
                  <input class="form-control"  placeholder="" type="text" id="item7" name="item7" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Quantity</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" id="qty7" name="qty7" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Rate</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="harga7" name="harga7" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Amount</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="amount7" name="amount7" >
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-3">
                <label>Item 8</label>
                <div class="input-group mb-4">
                  <input class="form-control"  placeholder="" type="text" id="item8" name="item8" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Quantity</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" id="qty8" name="qty8" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Rate</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="harga8" name="harga8" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Amount</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="amount8" name="amount8" >
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-3">
                <label>Item 9</label>
                <div class="input-group mb-4">
                  <input class="form-control"  placeholder="" type="text" id="item9" name="item9" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Quantity</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" id="qty9" name="qty9" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Rate</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="harga9" name="harga9" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Amount</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="amount9" name="amount9" >
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <label>Item 10</label>
                <div class="input-group mb-4">
                  <input class="form-control"  placeholder="" type="text" id="item10" name="item10" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Quantity</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" id="qty10" name="qty10" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Rate</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="harga10" name="harga10" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Amount</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="amount10" name="amount10" >
                </div>
              </div>
            </div>


<br>
  <button type="submit" class="btn btn-primary"> Tambah Data </button>

  <a href="/hervent" class="btn btn-dark">Kembali</a>
</form>
   

    </div>
    </div>
    </div>


@endsection