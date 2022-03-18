@extends('layout.main')


@section('container')
<br>
    <div class="container">
      <div class="row">
        <div class="col-6">
        
        <table border="0" style="width:800px">
        <tbody>
        <tr>
        <td><img src="{{asset('assets/img/logohv.png')}}"></td>
        <td> &nbsp;&nbsp;</td>
        <td><h1 align="right" ><font color="black">INVOICE</font></h3></td>
        </tr>
        
        <tr>
              <td> &nbsp;</td>
              <td> &nbsp;</td>
              <td align="right"><font color="black"> # {{ $hervent->id }}/<?php
 $tgl=date('m');
 echo $tgl;
 ?>/<?php
 $tgl=date('Y');
 echo $tgl;
 ?> </font></td>
              
</tr>            
<tr>
              <td> &nbsp;<font color="black">Jalan Rajamantri Tengah IV No. 18. Kelurahan </font></td>
              <td></td>
              <td> &nbsp;</td>
              
</tr>
<tr>
              <td><font color="black">  &nbsp; Turangga, Kecamatan Lengkong, Bandung, Jawa Barat </font></td>
              <td></td>
              <td> &nbsp;</td>
</tr>
<tr>
              <td><font color="black"> 40264</font></td>
              <td></td>
              <td> &nbsp;</td>
</tr>

<tr>
              <td>  &nbsp;</td>
              <td align="right"><font color="black"> &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Date : </font></td>
              <td align="right"><font color="black">{{ $hervent->tanggalbuat }}</font></td>
</tr>
<tr>
              <td><font color="black">Bill to   :</font></td>
              <td align="right"><font color="black">Payment Method :</font>
              </td>
              <td align="right"><font color="black">{{ $hervent->metodebayar }}</font></td>
</tr>
<tr>
              <td> <font color="black"><strong>{{ $hervent->namacustomer }}</font></strong></td>
              <td align="right"><font color="black">Due Date :</font></td>
              <td align="right"><font color="black"> {{ $hervent->jatuhtempo }}</font></td>
</tr>
<tr>
              <td><font color="black"><strong> {{ $hervent->namaproject }}</font></strong></td>
              <td align="right"><font color="black"> Purchase Order :</font></td>
              <td align="right"><font color="black"> {{ $hervent->nomorfa }}</font></td>
</tr>
<tr>
  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
</tbody>

<table border="0" style="width:800px">
<tbody>
<tr>
<td align="left"   bgcolor='black'><h7 align="left">&nbsp;<font color="white"> Item </font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</h6></td>
<td align="right"   bgcolor='black'><h7 align="right"><font color="white"> &nbsp;Qty </font> </h6></td>
<td align="right"  bgcolor='black'><h7align="right"><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rate</font></h6></td>
<td align="right"   bgcolor='black'><h7 align="right"><font color="white"> &nbsp;Amount &nbsp;&nbsp;&nbsp;</font></h6></td>
</tr> 
<tr>
              <td align="left">&nbsp;<font color="black"> {{ $hervent->item1 }}</font></td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->qty1 }}</font></td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->harga1}}</font></td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->amount1 }}</font></td>
</tr>
<tr>
              <td align="left"> &nbsp;<font color="black"> {{ $hervent->item2 }}</font></td>
              <td align="right">  &nbsp;{{ $hervent->qty2 }} </td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->harga2 }}</font></td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->amount2 }}</font></td>
</tr>
<tr>
              <td align="left"> &nbsp;<font color="black"> {{ $hervent->item3 }}</font></td>
              <td align="right">  &nbsp;{{ $hervent->qty3 }} </td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->harga3 }}</font></td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->amount3 }}</font></td>
</tr>
<tr>
              <td align="left">&nbsp;<font color="black"> {{ $hervent->item4 }}</font></td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->qty4 }}</font></td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->harga4}}</font></td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->amount4 }}</font></td>
</tr>
<tr>
              <td align="left">&nbsp;<font color="black"> {{ $hervent->item5 }}</font></td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->qty5 }}</font></td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->harga5}}</font></td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->amount5 }}</font></td>
</tr>
<tr>
              <td align="left">&nbsp;<font color="black"> {{ $hervent->item6 }}</font></td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->qty6 }}</font></td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->harga6}}</font></td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->amount6 }}</font></td>
</tr>
<tr>
              <td align="left">&nbsp;<font color="black"> {{ $hervent->item7 }}</font></td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->qty7 }}</font></td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->harga7}}</font></td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->amount7 }}</font></td>
</tr>
<tr>
              <td align="left">&nbsp;<font color="black"> {{ $hervent->item8 }}</font></td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->qty8 }}</font></td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->harga8}}</font></td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->amount8 }}</font></td>
</tr>
<tr>
              <td align="left">&nbsp;<font color="black"> {{ $hervent->item9 }}</font></td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->qty9 }}</font></td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->harga9}}</font></td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->amount9 }}</font></td>
</tr>
<tr>
              <td align="left">&nbsp;<font color="black"> {{ $hervent->item10 }}</font></td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->qty10 }}</font></td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->harga10}}</font></td>
              <td align="right">  &nbsp;<font color="black"> {{ $hervent->amount10 }}</font></td>
</tr>
<tr>
  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
<tr>
  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>


<tr>
              <td align="left"></td>
              <td align="right">  &nbsp; </td>
              <td align="right" ><strong><font color="black">  &nbsp; Subtotal :</font></td></strong>
              <td align="right"> <strong> &nbsp;<font color="black"> Rp.{{ $hervent->total }}</font></td> </strong>
</tr>
<tr>
<td align="left"></td>
              <td align="right">  &nbsp; </td>
              <td align="right"><strong><font color="black">  &nbsp; Down Payment Diterima :</font></td></strong>
              <td align="right"><strong>  &nbsp;<font color="black"> Rp.{{ $hervent->downpayment }}</font></td></strong>
</tr>
<td align="left"></td>
              <td align="right">  &nbsp; </td>
              <td align="right"><strong>  &nbsp;<font color="black"> Pelunasan :</font></strong></td>
              <td align="right"><strong>&nbsp;<font color="black"> Rp.{{ $hervent->pelunasan }}</font></strong></td>
              
</tbody>
</table></table></div></div>
 

<br>
<br>
<font color="grey">Pembayaran untuk invoice ini mohon ditransfer ke salah satu rekening berikut : </font> <br>
<font color="black">- Bank Syariah Indonesia (d/h Bank Syariah Mandiri) 7700600337 - PT. AVENTAMA HERVENT SOULSINDO GLOBAL</font><br>
<font color="black">- Bank Central Asia (BCA) 7751230064 - PT. AVENTAMA HERVENT SOULSINDO GLOBAL</font><br>
<br>
<font color="grey">Keterangan :</font><br>
<font color="black">Pelunasan dilakukan sebelum pengiriman</font><br>



<table border="0" style="width:800px">
<tbody>
<tr>
<td align="left"><h7 align="left">&nbsp;<font color="black"></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font color="black"> <p align="right">Hormat Kami</font> <br><br><br>
<tr>
<td align="center"><h7 align="left">&nbsp;<font color="black"></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font color="black"> <p align="right"><u>Eka Kusmia</font></u> <br>
</h7></td></tr></tbody></table>
<br><br><br>

<table border="0" style="width:800px">
<tbody>

</h7></td></tr></tbody></table>
<tbody>
</tbody></table>

<br>
<br>
                    <a href=""  target="_blank" class="btn btn-dark">Save</a>
                    <a href="/hervent" class="btn btn-dark">Kembali</a>
                </div>
                </div>
                            
             </div>
         </div>
    </div>
    
@endsection