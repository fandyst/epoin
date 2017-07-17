@extends('layouts.master')

@section('content-header')
  <div id="content-header">
    <div id="breadcrumb">
      <a href="/" title="Kembali ke Dasbor" class="tip-bottom"><i class="icon-home"></i> Dasbor</a>
      <a href="#" class="current">User</a>
    </div>
    <h1>Data User</h1>
  </div>
@endsection

@section('content')
  <div class="span12">
    <button type="button" class="btn btn-primary" name="tambah-user" onclick="window.location='{{url("user/tambah")}}'"><i class="icon icon-plus"></i> Tambah User</button>
    <div class="widget-box">
      <div class="widget-title">
        <span class="icon"><i class="icon-th"></i></span>
        <h5>Data User</h5>
      </div>
      <div class="widget-content nopadding">
        <table class="table table-bordered data-table">
          <thead>
            <tr>
              <th width="15%">NIP</th>
              <th>Nama Lengkap</th>
              <th>Email</th>
              <th width="5%">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
              <tr>
                <td>{{ $user->nip }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                  <form action="/user/{{$user->id}}" method="POST" class="hapus">
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
  <script src="/js/jquery.dataTables.min.js"></script>
  <script src="/js/maruti.tables.js"></script>

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
