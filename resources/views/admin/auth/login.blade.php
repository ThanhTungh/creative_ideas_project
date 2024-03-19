@extends('auth.layout.nav')

@section('title', 'Admin Login')

@section('form_tag')
<form action="{{ route('admin_login_submit') }}" method="POST">
@endsection

@section('other_roles')
<div>
    <a href="{{ route('admin_register_submit') }}">Don't have Admin Account? (only 1 account)</a>
</div>

<div>
    <a href="">Marketing Manager login</a>
</div>

<div>
    <a href="">Marketing Coordinator login</a>
</div>

<div>
    <a href="">Student login</a>
</div>
@endsection