@extends('layouts.app')

@section('listPost')
	@include('post.AddPost')
    @include('post.ListPost')
@endsection

@section('topPost')
    @include('post.TopPost')
@endsection
