@extends('layouts.app')

@section('content')
<div class="column">
    <div class="row">
        <br>
        <br>
        <br>
        <div class="column">
            <div class="panel is-primary">
                <div class="panel-heading is-large text-primary">Active Companion Panel
                <a class="button is-warning" href="{{ route('user.orders.create') }}"><i class="fas fa-plus"></i>Add Companion</a></div>

                <div class="panel-block">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                @if ($orders->count() == 0)
                    <p class="has-text-white">No orders yet.</p>
                    <a class="button is-warning text-primary" href="{{ route('user.orders.create') }}">Add Companion</a>

                @else

                    <order-alert user_id="{{ auth()->user()->id }}"></order-alert>


                    <div class="table-responsive">
                        <table class="table">
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
                            <tfoot></tfoot>
                        </table>
                    </div> <!-- end table-responsive -->

                @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
