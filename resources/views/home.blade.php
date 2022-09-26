@extends('layout.main')

@section('content')
    <div class="container" style="text-align: center;">
        <h2 style="font-style: bold solid;">{{ $title }} Page</h2>
        <img src="{{ asset('template_bootstrap/img/admin.jpg') }}" alt="Foto Profil" width="180" height="180"
            center="center" class="img-thumbnail rounded-circle">
        <h3>
            <center>{{ $name }}</center>
        </h3>
        <h5>{{ $job }}</h5>
        <br>
    </div>
    <div class="container">
        <div class="card" data-aos="fade-up" data-aos-offset="10">
            <div class="row">
                <div class="col-lg-6 col-md-12" style="background-color: lightsalmon">
                    <div class="card-body">
                        <div class="h4 mt-0 title text-center">About Me</div>
                        <p class="mt-3" style="text-align: justify;">I am a creative person. I like to find
                            alternative
                            solutions to various existing problems. My creativity is very helpful in becoming a good leader
                            because I can anticipate various problems and solve them with various solutions. </a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12" style="background-color: darksalmon">
                    <div class="card-body">
                        <div class="h4 mt-0 mb-3 title text-center">Personal Data</div>
                        <div class="row">
                            <div class="col-sm-4"><strong class="text-uppercase">Name</strong></div>
                            <div class="col-sm-8">Ferdian Firmansyah</div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4"><strong class="text-uppercase">Place and date of birth</strong>
                            </div>
                            <div class="col-sm-8">Banyuwangi, 04 Februari 2003</div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4"><strong class="text-uppercase">Gender</strong></div>
                            <div class="col-sm-8">Male</div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4"><strong class="text-uppercase">Religion</strong></div>
                            <div class="col-sm-8">Islam</div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4"><strong class="text-uppercase">Height and weight</strong></div>
                            <div class="col-sm-8">179 Cm & 53 Kg </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4"><strong class="text-uppercase">Education</strong></div>
                            <div class="col-sm-8">D3-Teknik Informatika POLIWANGI</div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4"><strong class="text-uppercase">Email</strong></div>
                            <div class="col-sm-8">ferdianfy13@gmail.com</div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4"><strong class="text-uppercase">Phone</strong></div>
                            <div class="col-sm-8">081337915702</div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm-4"><strong class="text-uppercase">Address</strong></div>
                            <div class="col-sm-8">JL Bunyu No 29, Banyuwangi, Jawa Timur, Indonesia</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h2><a href="https://github.com/FerdianFy13"
                class="text-decoration-none text-danger d-block text-center">{{ $name }}</a></h2>
        <h4 class="text-center d-block text-primary">&copy;Creative Labs</h4>
        <p class="text-dark d-block text-center">Ecommerce 2021</p>
    </div>
@endsection
