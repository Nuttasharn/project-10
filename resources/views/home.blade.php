@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Profile') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>Name : {{Auth::user()->name}}</div>
                    <div>E-mail : {{Auth::user()->email}}</div>
                    <div>Username : {{Auth::user()->username}}</div>
                    <br>
                    <div>
                        <a href="{{route('admin.index')}}" class="btn btn-primary">Product Managmaent</a>
                        <a href="" class="btn btn-success">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
