@extends('layouts.app')

@section('title', 'Home')
@section('page_title', 'Selamat datang di Berita Batam')

@section('content')
    <h1 class="text-2x1 font-blod mb-4">Selamat Pagi</h1>
    <p class="mb-4">Berikut adalah berita update di hari ini</p>

    @include('components.card',[
        'imgsrc' => 'images/gongong.jpg',
        'title' => 'Gonggong goreng tepung nak Limah',
        'desc' => 'kuliner unik satu ini wajib dicoba untuk menguji ketahan gigi.'
    ])
@endsection