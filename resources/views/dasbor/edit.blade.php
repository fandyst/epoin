@extends('layouts.master')

@section('content-header')
  <div id="content-header">
    <div id="breadcrumb">
      <a href="/" title="Kembali ke Dasbor" class="tip-bottom"><i class="icon-home"></i> Dasbor</a>
      <a href="#" class="current">Ubah</a>
    </div>
    <h1>Ubah Dasbor</h1>
  </div>
@endsection

@section('content')
  <div class="span12">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
        <h5>Ubah Dasbor</h5>
      </div>
      <div class="widget-content nopadding">
        <form action="/dasbor/{{ $dasbor->id }}" method="POST" class="form-horizontal" id="kreaFormDasbor">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
          <div class="control-group @if ($errors->has('title'))error @endif">
            <label class="control-label" for="nis">Judul :</label>
            <div class="controls">
              <input type="text" class="span11" name="title" id="title" placeholder="Judul" value="{{ $dasbor->title }}"/>
                @if ($errors->has('title')) <span class="help-block">{{ $errors->first('title') }}</span> @endif
            </div>
          </div>
          <div class="control-group @if ($errors->has('desc'))error @endif">
            <label class="control-label" for="nama">Deskripsi :</label>
            <div class="controls">
              <textarea class="span11" rows="15" name="desc" id="desc" placeholder="Deskripsi">{{ $dasbor->desc }}</textarea>
                @if ($errors->has('desc')) <span class="help-block"> {{ $errors->first('desc') }}</span> @endif
            </div>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn btn-success">Ubah</button>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection

@section('footer-js')
  <script src="/js/maruti.form_common.js"></script>
  <script src="/js/jquery.validate.js"></script>
  <script src="/js/localization/messages_id.js"></script>
  <script src="/js/krea_validation.js"></script>
@endsection
