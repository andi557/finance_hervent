@extends('layout/main');

@section('title','Finance | Edit ')
@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
    <center><h1 class="mt-3"> Edit Data Invoice </h1></center><br>

    <form method="post" action="/hervent/{{ $hervent->id }}">
    @method('patch')
     @csrf
     <div class="card-body">
    <div class="row">
              <div class="col-md-3">
                <label for="tanggalbuat">Tanggal Input Data</label>
                <div class="input-group mb-4">
                  <input class="form-control"   type="date" id="tanggalbuat" name="tanggalbuat" value="{{ $hervent->tanggalbuat }}">
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label for="tanggalbuat">Tanggal Jatuh Tempo</label>
                <div class="input-group mb-4">
                  <input class="form-control"  placeholder="" type="date" id="jatuhtempo" name="jatuhtempo" value="{{ $hervent->jatuhtempo }}" >
                </div>
              </div>
              <div class="col-md-3">
                <label for="tanggalbuat"><font color="red"><b> PELUNASAN </b></font></label>
                <div class="input-group mb-4">
                  <input class="form-control" placeholder="Rp."   type="text" id="pelunasan" name="pelunasan" value="{{ $hervent->pelunasan }}">
                </div>
              </div>

  <div class="mb-3">
    <label for="Nama Customer" class="form-label">Nama Customer</label>
    <input type="text" class="form-control" id="namacustomer" name="namacustomer" value="{{ $hervent->namacustomer }}" >
    </div>

    <div class="mb-3">
    <label for="Nama Customer" class="form-label">Nama Project</label>
    <input type="text" class="form-control" id="namaproject" name="namaproject" value="{{ $hervent->namaproject }}" >
    </div>

            <div class="mb-3">
    <label for="Nama Customer" class="form-label">Metode Bayar</label>
    <input type="text" class="form-control" id="metodebayar" name="metodebayar" value="{{ $hervent->metodebayar }}" >
    </div>       

    <div class="mb-3">
    <label for="Nama Customer" class="form-label">Nomor FA</label>
    <input type="text" class="form-control" id="nomorfa" name="nomorfa" value="{{ $hervent->nomorfa }}" >
    </div>

    <div class="mb-3">
    <label for="Nama Customer" class="form-label">Total</label>
    <input type="text" class="form-control" id="total" name="total" value="{{ $hervent->total }}">
    </div>


    <div class="mb-3">
    <label for="Nama Customer" class="form-label">Down Payment</label>
    <input type="text" class="form-control" id="downpayment" name="downpayment" value="{{ $hervent->downpayment }}">
    </div>

    
            <div class="row">
              <div class="col-md-3">
                <label>Item 1</label>
                <div class="input-group mb-4">
                  <input class="form-control"  placeholder="" type="text" id="item1" name="item1" value="{{ $hervent->item1 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Quantity</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" id="qty1" name="qty1" value="{{ $hervent->qty1 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Rate</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="harga1" name="harga1" value="{{ $hervent->harga1 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Amount</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="amount1" name="amount1" value="{{ $hervent->amount1 }}" >
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-3">
                <label>Item 2</label>
                <div class="input-group mb-4">
                  <input class="form-control"  placeholder="" type="text" id="item2" name="item2" value="{{ $hervent->item2 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Quantity</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" id="qty2" name="qty2" value="{{ $hervent->qty2 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Rate</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="harga2" name="harga2" value="{{ $hervent->harga2 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Amount</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="amount1" name="amount2" value="{{ $hervent->amount2 }}">
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-3">
                <label>Item 3</label>
                <div class="input-group mb-4">
                  <input class="form-control"  placeholder="" type="text" id="item3" name="item3" value="{{ $hervent->item3 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Quantity</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" id="qty3" name="qty3" value="{{ $hervent->qty3 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Rate</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="harga3" name="harga3" value="{{ $hervent->harga3 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Amount</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="amount3" name="amount3" value="{{ $hervent->amount3 }}" >
                </div>
              </div>
            </div>



            <div class="row">
              <div class="col-md-3">
                <label>Item 4</label>
                <div class="input-group mb-4">
                  <input class="form-control"  placeholder="" type="text" id="item4" name="item4" value="{{ $hervent->item4 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Quantity</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" id="qty4" name="qty4" value="{{ $hervent->qty4 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Rate</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="harga4" name="harga4" value="{{ $hervent->harga4 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Amount</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="amount4" name="amount4" value="{{ $hervent->amount4 }}" >
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <label>Item 5</label>
                <div class="input-group mb-4">
                  <input class="form-control"  placeholder="" type="text" id="item5" name="item5" value="{{ $hervent->item5 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Quantity</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" id="qty5" name="qty5" value="{{ $hervent->qty5 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Rate</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="harga5" name="harga5" value="{{ $hervent->harga5 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Amount</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="amount5" name="amount5" value="{{ $hervent->amount5 }}" >
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-3">
                <label>Item 6</label>
                <div class="input-group mb-4">
                  <input class="form-control"  placeholder="" type="text" id="item6" name="item6" value="{{ $hervent->item6 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Quantity</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" id="qty6" name="qty6" value="{{ $hervent->qty6 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Rate</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="harga6" name="harga6" value="{{ $hervent->harga6 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Amount</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="amount6" name="amount6" value="{{ $hervent->amount6 }}" >
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <label>Item 7</label>
                <div class="input-group mb-4">
                  <input class="form-control"  placeholder="" type="text" id="item7" name="item7" value="{{ $hervent->item7 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Quantity</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" id="qty7" name="qty7" value="{{ $hervent->qty7 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Rate</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="harga7" name="harga7" value="{{ $hervent->harga7 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Amount</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="amount7" name="amount7" value="{{ $hervent->amount7 }}" >
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-3">
                <label>Item 8</label>
                <div class="input-group mb-4">
                  <input class="form-control"  placeholder="" type="text" id="item8" name="item8" value="{{ $hervent->item8 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Quantity</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" id="qty8" name="qty8" value="{{ $hervent->qty8 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Rate</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="harga8" name="harga8" value="{{ $hervent->harga8 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Amount</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="amount8" name="amount8" value="{{ $hervent->amount8 }}" >
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-3">
                <label>Item 9</label>
                <div class="input-group mb-4">
                  <input class="form-control"  placeholder="" type="text" id="item9" name="item9" value="{{ $hervent->item9 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Quantity</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" id="qty9" name="qty9" value="{{ $hervent->qty9 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Rate</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="harga9" name="harga9" value="{{ $hervent->harga9 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Amount</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="amount9" name="amount9" value="{{ $hervent->amount9 }}" >
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <label>Item 10</label>
                <div class="input-group mb-4">
                  <input class="form-control"  placeholder="" type="text" id="item10" name="item10" value="{{ $hervent->item10 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Quantity</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" id="qty10" name="qty10" value="{{ $hervent->qty10 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Rate</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="harga10" name="harga10" value="{{ $hervent->harga10 }}" >
                </div>
              </div>
              <div class="col-md-3 ps-2">
                <label>Amount</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Rp." id="amount10" name="amount10" value="{{ $hervent->amount10 }}" >
                </div>
              </div>
          


    <button type="submit" class="btn btn-primary"> Simpan </button>
    <a href="/hervent" class="btn btn-dark">Kembali</a>
    </form>

    </div>

@endsection