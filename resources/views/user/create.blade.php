@extends('layouts.master')

@section('content-header')
  <div id="content-header">
    <div id="breadcrumb">
      <a href="/" title="Kembali ke Dasbor" class="tip-bottom"><i class="icon-home"></i> Dasbor</a>
      <a href="/user">User</a>
      <a href="#" class="current">Tambah</a>
    </div>
    <h1>Data User</h1>
  </div>
@endsection

@section('content')
  <div class="span12">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>Tambah User</h5>
      </div>
      <div class="widget-content nopadding">
        <form action="/user" method="POST" class="form-horizontal" id="kreaFormUser">
        {{ csrf_field() }}
          <div class="control-group @if ($errors->has('nip'))error @endif">
            <label class="control-label" for="nip">NIP :</label>
            <div class="controls">
              <input type="text" class="span11" name="nip" id="nip" placeholder="NIP" maxlength="18" />
                @if ($errors->has('nip')) <span class="help-block">{{ $errors->first('nip') }}</span> @endif
            </div>
          </div>
          <div class="control-group @if ($errors->has('nama'))error @endif">
            <label class="control-label" for="nama">Nama Lengkap :</label>
            <div class="controls">
              <input type="text" class="span11" name="nama" id="nama" placeholder="Nama Lengkap"/>
                @if ($errors->has('nama')) <span class="help-block"> {{ $errors->first('nama') }}</span> @endif
            </div>
          </div>
          <div class="control-group @if ($errors->has('email'))error @endif">
            <label class="control-label" for="email">Email :</label>
            <div class="controls">
              <input type="text" class="span11" name="email" id="email" placeholder="Email"/>
                @if ($errors->has('email')) <span class="help-block"> {{ $errors->first('email') }}</span> @endif
            </div>
          </div>
          <div class="control-group @if ($errors->has('password'))error @endif">
            <label class="control-label" for="password">Password :</label>
            <div class="controls">
              <input type="password" class="span11" name="password" id="password" placeholder="Password"/>
                @if ($errors->has('password')) <span class="help-block"> {{ $errors->first('password') }}</span> @endif
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
  <script src="/js/jquery.validate.js"></script>
  <script src="/js/localization/messages_id.js"></script>
  <script src="/js/krea_validation.js"></script>
@endsection
