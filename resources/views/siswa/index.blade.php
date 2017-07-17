@extends('layouts.master')

@section('meta')
  <link rel="stylesheet" href="/css/uniform.css" />
  <link rel="stylesheet" href="/css/select2.css" />
@endsection

@section('content-header')
  <div id="content-header">
    <div id="breadcrumb">
      <a href="/" title="Kembali ke Dasbor" class="tip-bottom"><i class="icon-home"></i> Dasbor</a>
      <a href="#" class="current">Siswa</a>
    </div>
    <h1>Data Siswa</h1>
  </div>
@endsection

@section('content')
  <div class="span12">
    <button type="button" class="btn btn-primary" name="tambah-siswa" onclick="window.location='{{url("siswa/tambah")}}'"><i class="icon icon-plus"></i> Tambah Siswa</button>
    <div class="widget-box">
      <div class="widget-title">
        <span class="icon"><i class="icon-th"></i></span>
        <h5>Data Siswa</h5>
      </div>
      <div class="widget-content nopadding">
        <table class="table table-bordered data-table">
          <thead>
            <tr>
              <th width="10%">NIS</th>
              <th>Nama Siswa</th>
              <th width="10%">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($siswas as $siswa)
              <tr>
                <td>{{ $siswa->nis }}</td>
                <td>{{ $siswa->nama }}</td>
                <td>
                  <form action="/siswa/{{$siswa->nis}}" method="POST" class="hapus">
                    <button type="button" class="btn btn-info" onclick="window.location='{{url("/siswa/$siswa->nis/ubah")}}'">Ubah</button>
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-info" >Hapus</button>
                  </form>
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
