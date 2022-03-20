@extends('layouts.pegawai')

@section('tittle')
    {{ $title }}    
@section('content')

     <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Team</p>
                 <h2>Our Master Chef</h2>
            </div>
             @foreach($pegawais as $p)
                                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ $p->gambar }}" alt="Image">
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="team-text">
                                <h2>{{ $p->nama }}</h2>
                                <p>{{ $p->deskripsi}}</p>
                            </div>
                        </div>
                    </div>
            @endforeach
            <div>
                    <p>Showing
                         {{$pegawais->firstItem()}}
                         to
                         {{$pegawais->lastItem()}}
                         of
                         {{$pegawais->total()}}
                        entries</p>
                       </div>
                    <div class="pull-right">
                           {{$pegawais->links()}}
                    </div>
    </div>
</div>                    
@endsection