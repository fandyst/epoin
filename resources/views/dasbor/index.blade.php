@extends('layouts.master')

@section('meta')
  <link rel="stylesheet" href="/css/uniform.css" />
  <link rel="stylesheet" href="/css/select2.css" />
@endsection

@section('content-header')
  <div id="content-header">
    <div id="breadcrumb">
      <a href="#" class="current"><i class="icon-home"></i> Dasbor</a>
    </div>
    <h1>Dasbor</h1>
  </div>
@endsection

@section('content')
<div class="span12">
  <div class="widget-box">
    <div class="widget-title">
      <span class="icon"><i class="icon-th"></i></span>
      <h5>{{ $dasbor->title }}</h5>
    </div>
    <div class="widget-content">
      <p align="center"><b>Selamat Datang {{Auth::user()->name}} di Sistem e-Poin</b></p>
      <p align="justify">{{ $dasbor->desc }}</p><br>
      <p align="right"><i>Terakhir diperbarui {{ Date::parse($dasbor->updated_at)->format('l, j F Y H:i:s') }}<br>Diperbarui oleh {{ $dasbor->user->name }}</i></p>
      <div class="pull-right"><a href="dasbor/{{ $dasbor->id }}/ubah">Ubah</a></div>
      <br>
    </div>
  </div>
</div>
@endsection
