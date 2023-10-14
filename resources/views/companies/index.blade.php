@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 10 CRUD App</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-outline-success" href="{{ route('create') }}"> Create Company</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>S.No</th>
            <th>Company Photo</th>
            <th>Company Name</th>
            <th>Company Email</th>
            <th>Company Address</th>
            <th style="width: 200px;">Action</th>
        </tr>

        @foreach ($companies as $company)
            <tr>
                <td><center>{{ $company->id }}</center></td>
                <td><img src="/storage/images/{{$company->image}}" style="width: 100px;height: 100px;"></td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->email }}</td>
                <td>{{ $company->address }}</td>
                <td>

                    <form action="{{ route('delete', $company->id) }}" method="post" class="form-group">

                        <a class="btn btn-outline-warning" href="{{ route('edit', $company->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>

                </td>
            </tr>
        @endforeach

    </table>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                {{ $companies->links() }}
            </div>
        </div>
    </div>
@endsection
