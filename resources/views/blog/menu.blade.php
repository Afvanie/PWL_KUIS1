@extends('layouts.Makanan')


@section('tittle')
    {{ $title }}
@section('content')
        <!-- Menu Start -->
        <div class="menu">
            <div class="container">
                <div class="section-header text-center">
                    <p>Menu Makanan</p>
                    <h2>Silahkan Pilih Menu Makanan</h2>
                </div>

                    @foreach($menus as $b)
                    <div class="tab-content">
                        <div id="burgers" class="container tab-pane active">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                
                                    <div class="menu-item">
                                        <div class="menu-img">
                                        <img src="{{ $b->gambar }}" />
                                        </div>
                                        <div class="menu-text">
                                            <h3><span>{{ $b->nama }}</span> <strong>{{ $b->harga }}</strong></h3>
                                            <p>{{ $b->konten }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 d-none d-lg-block">
                                    <img src="style/img/menu-burger-img.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                                 <div>
                                    <p>Showing
                                        {{$menus->firstItem()}}
                                        to
                                        {{$menus->lastItem()}}
                                        of
                                        {{$menus->total()}}
                                    entries</p>
                                </div>
                                <div class="pull-right">
                                    {{$menus->links()}}
                                </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
 @endsection

