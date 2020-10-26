@extends('layouts.app')

@section('content')
　　@if (Auth::check())
　　　　{{ Auth::user()->name }}
　　@else
    　　<div class="center jumbotron">
        <div class="text-center">
            <h1>Where is your buddy?</h1>
            <p>一緒に潜るバディを探そう</p>
        </div>
        
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                    {!! Form::open(['route' => 'login.post']) !!}
                    <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>
                    {!! Form::submit('ログイン', ['class' => 'btn btn-primary btn-block']) !!}
                    {!! Form::close() !!}
                    {{-- ユーザ登録ページへのリンク --}}
                    <p class="mt-2">{!! link_to_route('signup.get', '新規登録') !!}</p>
                </div>
            </div>
        </div>
    @endif
@endsection