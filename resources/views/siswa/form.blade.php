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
      <a href="/siswa">Siswa</a>
      <a href="#" class="current">@if (empty($siswa->nis)) Tambah @else Ubah @endif</a>
    </div>
    <h1>Data Siswa</h1>
  </div>
@endsection

@section('content')
  <div class="span12">
    <div class="alert alert-error alert-block hidden"> <a class="close" data-dismiss="alert" href="#">×</a>
      <h4 class="alert-heading">Kesalahan!</h4>
      Formulir yang anda isi belum benar. Mohon perbaiki dan lengkapi terlebih dahulu.
    </div>
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>@if (empty($siswa->nis)) Tambah @else Ubah @endif Siswa</h5>
      </div>
      <div class="widget-content nopadding">
        <form action="/siswa/@if (empty($siswa->nis))@else {{$siswa->nis}} @endif" method="POST" class="form-horizontal" id="kreaFormSiswa">
        {{ csrf_field() }}
        @if (empty($siswa->nis))@else {{ method_field('PATCH') }} @endif
          <div class="control-group @if ($errors->has('nis'))error @endif">
            <label class="control-label" for="nis">NIS :</label>
            <div class="controls">
              <input type="text" class="span11" name="nis" id="nis" maxlength="6" placeholder="NIS" @if (empty($siswa->nis))@else value="{{$siswa->nis}}" disabled @endif/>
                @if ($errors->has('nis')) <span class="help-block">{{ $errors->first('nis') }}</span> @endif
            </div>
          </div>
          <div class="control-group @if ($errors->has('nama'))error @endif">
            <label class="control-label" for="nama">Nama Lengkap :</label>
            <div class="controls">
              <input type="text" class="span11" name="nama" id="nama" placeholder="Nama Lengkap" @if (empty($siswa->nis))@else value="{{$siswa->nama}}" @endif/>
                @if ($errors->has('nama')) <span class="help-block"> {{ $errors->first('nama') }}</span> @endif
            </div>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn btn-success">@if (empty($siswa->nis)) Simpan @else Ubah @endif</button>
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
