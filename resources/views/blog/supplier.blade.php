@extends('layouts.supplier')

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
                @foreach($suppliers as $b)
                    <div class="col-md-6">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ $b->gambar }}" />
                            </div>
                            <div class="blog-content">
                                <h2 class="blog-title">{{ $b->nama }}</h2>
                                <div class="blog-text">
                                    <p>
                                    {{ $b->alamat }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div>
                                    <p>Showing
                                        {{$suppliers->firstItem()}}
                                        to
                                        {{$suppliers->lastItem()}}
                                        of
                                        {{$suppliers->total()}}
                                    entries</p>
                                </div>
                                <div class="pull-right">
                                    {{$suppliers->links()}}
                                </div>
                </div>
                
            </div>
        </div>
        <!-- Blog End -->
        @endsection