@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Active Companion Panel
                <a class="btn btn-success" href="{{ route('user.orders.create') }}">Add Companion</a></div>

                <div class="panel-body container-fluid">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                @if ($orders->count() == 0)
                    <p>No orders yet.</p>
                    <a class="btn btn-success" href="{{ route('user.orders.create') }}">Add Companion</a>

                @else

                    <order-alert user_id="{{ auth()->user()->id }}"></order-alert>


                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Status</th>
                                    <th>ID</th>
                                    <th>Address</th>
                                    <th>Size</th>
                                    <th>Toppings</th>
                                    <th>Instructions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td><order-progress status="{{ $order->status->name}}"
                                                            initial=" {{ $order->status->percent }}"
                                                            order_id="{{ $order->id }}"></order-progress></td>
                                        <td><a href="{{ route('user.orders.show', $order) }}">APMS{{ $order->id }}</td>
                                        <td>{{ $order->address }}</td>
                                        <td>{{ $order->size }}</td>
                                        <td>{{ $order->toppings }}</td>
                                        <td>{{ $order->instructions }}</td>
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
