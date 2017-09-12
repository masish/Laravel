@extends('layouts.admin')
@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">ユーザ一覧</div>
                <div class="panel-body">
                    @if (Session::has('flash_message'))
                        <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
                    @endif
 
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>名前</th>
                            <th>メールアドレス</th>
                            <th>更新日</th>
                            <th>編集</th>
                        </tr>
                        </thead>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->format('Y年m月d日') }}</td>
                                 <td>
                                    {!! link_to_action('Admin\UserController@show', '表示', [$user->id]) !!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {!! $users->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection