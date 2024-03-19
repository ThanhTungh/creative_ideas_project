@extends('auth.layout.nav')

@section('title', 'Marketing Manager Login')
    
@section('form_tag')
<form action="{{ route('admin_login_submit') }}" method="POST"> 
@endsection

@section('other_roles')
<div>
    <a href="">Admin login</a>
</div>

<div>
    <a href="">Marketing Coordinator login</a>
</div>

<div>
    <a href="">Student login</a>
</div>
@endsection