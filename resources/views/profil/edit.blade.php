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
      <a href="#" class="current">Profil</a>
    </div>
    <h1>Profil {{Auth::user()->name}}</h1>
  </div>
@endsection

@section('content')
  <div class="span12">
    <div class="alert alert-error alert-block hidden"> <a class="close" data-dismiss="alert" href="#">×</a>
      <h4 class="alert-heading">Kesalahan!</h4>
      {{ session('failed') }}
    </div>
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>Profil</h5>
      </div>
      <div class="widget-content nopadding">
        <form action="/profil" method="POST" class="form-horizontal" id="kreaFormProfil">
          {{ csrf_field() }}
          <div class="control-group">
            <label class="control-label">NIP :</label>
            <div class="controls">
              <input type="text" class="span11" name="nip" placeholder="NIP" value="{{$user->nip}}" maxlength="18" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Nama Lengkap :</label>
            <div class="controls">
              <input type="text" class="span11" name="nama" placeholder="Nama Lengkap" value="{{$user->name}}" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Password :</label>
            <div class="controls">
              <input type="password" class="span11" name="password" placeholder="Masukkan Password untuk Mengubah" />
            </div>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </form>
      </div>
    </div>

    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>Ubah Password</h5>
      </div>
      <div class="widget-content nopadding">
        <form action="/profilpass" method="POST" class="form-horizontal" id="kreaFormUbahPassword">
          {{ csrf_field() }}
          <div class="control-group">
            <label class="control-label">Kata Sandi Lama :</label>
            <div class="controls">
              <input type="password" class="span11" name="oldpassword" id="oldpassword" placeholder="Password Lama" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Password Baru :</label>
            <div class="controls">
              <input type="password" class="span11" name="newpassword" id="newpassword" placeholder="Password Baru" />
            </div>
          </div>
          <div class="control-group">
            <label class="control-label">Ulangi Password Baru :</label>
            <div class="controls">
              <input type="password" class="span11" name="confirmpassword" id="confirmpassword" placeholder="Ulangi Password Baru" />
            </div>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn btn-success">Simpan</button>
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
  @if (session('success'))
    <script type="text/javascript">
      $.alert({
        boxWidth:'25%',
        useBootstrap: false,
        icon: 'icon-ok',
        closeIcon: true,
        animation: 'scale',
        type: 'blue',
        title: 'Berhasil!',
        content: "{{ session('success') }}",
      });
    </script>
  @endif
  @if (session('failed'))
    <script type="text/javascript">
      $(".alert").removeClass("hidden");
    </script>
  @endif

  <script src="/js/jquery.validate.js"></script>
  <script src="/js/localization/messages_id.js"></script>
  <script src="/js/krea_validation.js"></script>
@endsection
