@extends('layouts.app')

@section('content')
<div>
    <h1>This is the dashboard page!</h1>
    <a href="{{ url('/account') }}">Manage My Account</a>
</div>
@endsection
