@extends('layouts.master')

@section('meta')
  <link rel="stylesheet" href="/css/uniform.css" />
  <link rel="stylesheet" href="/css/select2.css" />
@endsection

@section('content-header')
  <div id="content-header">
    <div id="breadcrumb">
      <a href="/" title="Kembali ke Dasbor" class="tip-bottom"><i class="icon-home"></i> Dasbor</a>
      <a href="#" class="current">Poin</a>
    </div>
    <h1>Data Poin</h1>
  </div>
@endsection

@section('content')
  <div class="span12">
    <div class="widget-box">
      <div class="widget-title">
        <span class="icon"><i class="icon-th"></i></span>
        <h5>Data Poin</h5>
      </div>
      <div class="widget-content nopadding">
        <table class="table table-bordered data-table">
          <thead>
            <tr>
              <th width="10%">NIS</th>
              <th>Nama Siswa</th>
              <th width="5%">Jumlah Poin</th>
              <th width="10%">Aksi</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($poins as $poin)
              <tr>
                <td>{{ $poin->nis }}</td>
                <td>{{ $poin->siswa->nama }}</td>
                <td>{{ $poin->jml_poin }}</td>
                <td>
                  <button type="button" class="btn btn-info" onclick="window.location='{{url("/poin/$poin->nis/ubah")}}'">Tambah</button>
                  <button type="submit" class="btn btn-info" onclick="window.location='{{url("/poin/$poin->id")}}'">Detail</button>
                </td>
              </tr>
            @endforeach
          </tbody>
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
