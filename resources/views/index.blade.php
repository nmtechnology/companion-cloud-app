@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Orders</div>

                <div class="panel-body">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                @if ($orders->count() == 0)
                    <p>No orders yet.</p>
                    <a class="btn btn-success" href="{{ route('user.orders.create') }}">Order Pizza</a>

                @else

                    <order-alert user_id="{{ auth()->user()->id }}"></order-alert>

                    <div class="table-responsive">
                        <table class="uk-table uk-table-divider">
                            <thead>
                                <tr>
                                    <th class="uk-table-shrink">ID</th>
                                    <th class="uk-table-shrink">Address</th>
                                    <th class="uk-table-shrink">Size</th>
                                    <th class="uk-table-shrink">Toppings</th>
                                    <th class="uk-table-shrink">Instructions</th>
                                    <th class="uk-table-shrink">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->address }}</td>
                                        <td>{{ $order->size }}</td>
                                        <td>{{ $order->toppings }}</td>
                                        <td>{{ $order->instructions }}</td>
                                        <td><a href="{{ route('user.orders.show', $order) }}">{{ $order->status->name }}</a></td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div> <!-- end table-responsive -->

                @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


