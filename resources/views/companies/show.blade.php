@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="row">
            <div class="col-lg-8 margin-tb">
                <div class="pull-left mb-2">
                    <h2>{{$company->name}}</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-outline-primary" href="{{ route('home') }}"> Back</a>
                </div>
            </div>
        </div>

        <div class="row">
            <section class="py-5">
                <div class="container px-4 px-lg-5 my-5">
                    <div class="row gx-4 gx-lg-5 align-items-center">
                        <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="/storage/images/{{$company->image}}" alt="..."/>
                        </div>
                        <div class="col-md-6">

                            <h1 class="display-5 fw-bolder">Company Name: {{$company['name']}}</h1>
                            <div class="fs-5 mb-5">
                                <span class="text-decoration-line-through">Company Email: ${{$company['email']}}</span>
                            </div>
                            <p class="lead">Company Address: {{$company['address']}}</p>

                        </div>
                    </div>
                </div>
            </section>
    </div>

@endsection


