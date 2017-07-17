@extends('layouts.master')

@section('meta')
  <link rel="stylesheet" href="/css/colorpicker.css" />
  <link rel="stylesheet" href="/css/datepicker.css" />
  <link rel="stylesheet" href="/css/uniform.css" />
  <link rel="stylesheet" href="/css/select2.css" />
@endsection

@section('content-header')
  <div id="content-header">
    <div id="breadcrumb">
      <a href="/" title="Kembali ke Dasbor" class="tip-bottom"><i class="icon-home"></i> Dasbor</a>
      <a href="/poin">Poin</a>
      <a href="#" class="current">Tambah</a>
    </div>
    <h1>Tambah Poin</h1>
  </div>
@endsection

@section('content')
  <div class="span12">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>Tambah Poin {{$poin->siswa->nama}}</h5>
      </div>
      <div class="widget-content nopadding">
        <form action="/poin/{{$poin->nis}}" method="POST" class="form-horizontal" id="kreaFormPeraturan">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}
          <div class="control-group">
            <label class="control-label">Poin Sekarang :</label>
            <div class="controls">
              <b id="poinLama">{{$poin->jml_poin}}</b>
              <input type="hidden" name="poinlama" value="{{$poin->jml_poin}}" />
              <input type="hidden" id="kode" name="kode" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">NIS :</label>
            <div class="controls">
              <input type="text" class="span11" name="nis" placeholder="NIS" value="{{$poin->nis}}" disabled/>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Poin :</label>
            <div class="controls">
              <select name="poin" class="span11" id="poinTambah" onchange="poinHitung(this.hasil);">
                   <option>--- Pilih Poin ---</option>
                   @foreach ($peraturans as $peraturan)
                   <option value="{{ $peraturan->poin }}">{{ strtoupper($peraturan->kode) }} - {{ $peraturan->nama_peraturan }}</option>
                   @endforeach
              </select>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Total Poin :</label>
            <div class="controls">
              <b id="pointotal">{{$poin->jml_poin}}</b>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Peringatan :</label>
            <div class="controls">
              <b id="peringatan" style="color:red;"></b>
            </div>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn btn-success">Tambah</button>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection

@section('footer-js')
  <script src="/js/bootstrap-colorpicker.js"></script>
  <script src="/js/bootstrap-datepicker.js"></script>
  <script src="/js/jquery.uniform.js"></script>
  <script src="/js/select2.min.js"></script>
  <script src="/js/maruti.form_common.js"></script>
  <script src="/js/jquery.validate.js"></script>
  <script src="/js/localization/messages_id.js"></script>
  <script src="/js/krea_validation.js"></script>

  <script type="text/javascript">
    function poinHitung(hasil)
      {
          var poinlama = parseInt(document.getElementById("poinLama").innerHTML);
          var e = document.getElementById("poinTambah");
          var pointambah = parseInt(e.options[e.selectedIndex].value);
          var kode = e.options[e.selectedIndex].text;
          kode = kode.substring(0, 4);
          var hasil = poinlama+pointambah;
          var peringatan = "";
          if(hasil <= 0) {
            peringatan = "DO";
          }else if (hasil <= 100) {
            peringatan = "SP3";
          }else if (hasil <= 150) {
            peringatan = "SP2";
          }else if (hasil <= 200) {
            peringatan = "SP1";
          }


          document.getElementById("peringatan").innerHTML = peringatan;
          document.getElementById("pointotal").innerHTML = hasil;
          document.getElementById("kode").value = kode;
      }
    </script>
@endsection
