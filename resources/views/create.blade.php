@extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Order</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <order-alert user_id="{{ auth()->user()->id }}"></order-alert>

                        <div class="row">
                            <div class="col-lg-12">
                                <form method="post" action="{{ route('user.orders.store') }}" class="form-horizontal">
                                    {{ csrf_field() }}

