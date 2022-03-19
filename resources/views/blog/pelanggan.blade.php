@extends('layouts.customer')

@section('title')
   {{ $title }}
@endsection

@section('content')  
        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Food Blog</p>
                    <h2>Latest From Food Blog</h2>
                </div>
                <div class="row">
                @foreach($pelanggans as $b)
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ $b->gambar }}" />
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">{{ $b->nama }}t</h2>
                                <div class="blog-text">
                                    <p>
                                    {{ $b->konten }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div>
                                    <p>Showing
                                        {{$pelanggans->firstItem()}}
                                        to
                                        {{$pelanggans->lastItem()}}
                                        of
                                        {{$pelanggans->total()}}
                                    entries</p>
                                </div>
                                <div class="pull-right">
                                    {{$pelanggans->links()}}
                                </div>
                </div>
                
            </div>
        </div>
        <!-- Blog End -->
        @endsection