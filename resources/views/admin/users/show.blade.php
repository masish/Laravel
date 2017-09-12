@extends('layouts.admin')
@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">User</div>
                <div class="panel-body">
                    <div>
                        <h1>{{ $user->name }}</h1>
                        <p>{{ $user->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection