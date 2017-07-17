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
      <a href="/peraturan">Peraturan</a>
      <a href="#" class="current">@if (empty($peraturan->id)) Tambah @else Ubah @endif</a>
    </div>
    <h1>@if (empty($peraturan->id)) Tambah @else Ubah @endif Data Peraturan</h1>
  </div>
@endsection

@section('content')
  <div class="span12">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>@if (empty($peraturan->id)) Tambah @else Ubah @endif Data Peraturan</h5>
      </div>
      <div class="widget-content nopadding">
        <form action="/peraturan/@if (empty($peraturan->id))@else {{$peraturan->id}} @endif" method="POST" class="form-horizontal" id="kreaFormPeraturan">
        {{ csrf_field() }}
        @if (empty($peraturan->id))@else {{ method_field('PATCH') }} @endif
          <div class="control-group">
            <label class="control-label">Kode :</label>
            <div class="controls">
              <input type="text" class="span11" name="kode" id="kode" placeholder="Kode" maxlength="4" @if (empty($peraturan->id))@else value="{{$peraturan->kode}}" disabled @endif/>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Nama Poin :</label>
            <div class="controls">
              <input type="text" class="span11" name="nama_peraturan" id="nama_peraturan" placeholder="Nama Peraturan" @if (empty($peraturan->id))@else value="{{$peraturan->nama_peraturan}}" @endif/>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Poin :</label>
            <div class="controls">
              <input type="number" class="span11" name="poin" id="poin" placeholder="Poin" @if (empty($peraturan->id))@else value="{{$peraturan->poin}}" @endif/>
            </div>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn btn-success">@if (empty($peraturan->id)) Simpan @else Ubah @endif</button>
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
  <script src="/js/krea_form.js"></script>
  <script src="/js/jquery.validate.js"></script>
  <script src="/js/localization/messages_id.js"></script>
  <script src="/js/krea_validation.js"></script>
@endsection
