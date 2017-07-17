@extends('layouts.master')

@section('meta')
  <link rel="stylesheet" href="/css/uniform.css" />
  <link rel="stylesheet" href="/css/select2.css" />
@endsection

@section('content-header')
  <div id="content-header">
    <div id="breadcrumb">
      <a href="/" title="Kembali ke Dasbor" class="tip-bottom"><i class="icon-home"></i> Dasbor</a>
      <a href="/poin" class="current">Poin</a>
      <a href="#" class="current">Detail</a>
    </div>
    <h1>Detail Poin</h1>
  </div>
@endsection

@section('content')
  <div class="span12">
    <div class="widget-box">
      <div class="widget-title">
        <span class="icon"><i class="icon-th"></i></span>
        <h5>Detail Poin</h5>
      </div>
      <div class="widget-content nopadding">
        <table class="table table-bordered data-table">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode</th>
              <th>Nama Peraturan</th>
              <th>Tanggal</th>
              <th>Poin</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($poindetails as $i => $detail)
            <tr>
              <td width="2%">{{ $i+1 }}</td>
              <td>{{ $detail->kode }}</td>
              <td>{{ $detail->peraturan->nama_peraturan }}</td>
              <td>{{ Date::parse($detail->created_at)->format('l, j F Y H:i:s') }}</td>
              <td>{{ $detail->peraturan->poin }}</td>
            </tr>
          @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th colspan="4" style="text-align:right;font-size:100%">Total Perolehan Poin:</th>
              <th style="font-size:100%">{{$total->jml_poin}}</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
@endsection

@section('footer-js')
  <script src="/js/jquery.uniform.js"></script>
  <script src="/js/select2.min.js"></script>
  <script src="/js/jquery.dataTables.min.js"></script>
  <script src="/js/krea_tables.js"></script>
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
  <script src="/js/krea_confirm.js"></script>
@endsection
