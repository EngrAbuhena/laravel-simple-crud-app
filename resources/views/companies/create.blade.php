@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-8 margin-tb">
            <div class="pull-left mb-2">
                <h2>Add Company</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-outline-primary" href="{{ route('home') }}"> Back</a>
            </div>
        </div>
    </div>

    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ route('save') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                    <strong>Company Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Company Name">
                    @error('name')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                    <strong>Company Email:</strong>
                    <input type="email" name="email" class="form-control" placeholder="Company Email">
                    @error('email')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                    <strong>Company Address:</strong>
                    <input type="text" name="address" class="form-control" placeholder="Company Address">
                    @error('address')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

{{--            upload image--}}
            <div class="col-xs-8 col-sm-8 col-md-8">
                <div class="form-group">
                    <strong>Company Photo:</strong>
                    <input type="file" name="image" class="form-control" placeholder="Company Photo">
                    @error('photo')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-xs-8 col-sm-8 col-md-8">
            <button type="submit" class="btn btn-outline-info">Submit</button>
            </div>
        </div>

    </form>
@endsection

