@extends('layouts.app')

@section('content')
    <br>
    <br>
    <div class="column">
        <div class="panel is-primary">
            <div class="panel-heading is-large text-primary column">Active Companion Panel
                <a class="button is-warning" href="{{ route('user.orders.create') }}"><i class="fas fa-plus"></i>Add</a></div>

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
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Address</th>
                                        <th>Size</th>
                                        <th>Toppings</th>
                                        <th>Instructions</th>
                                        <th>Status</th>
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
