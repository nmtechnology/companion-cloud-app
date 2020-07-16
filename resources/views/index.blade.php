@extends('layouts.app')

@section('content')
    <br>
    <br>
    <div class="column">
        <div class="panel is-primary">
            <div class="panel-heading is-large text-primary column">
                <div class="heading">Active Companion Panel</div>
                <a class="button is-success" href="{{ route('user.orders.create') }}"><i class="fas fa-plus"></i>Add</a>
            </div>

            <p class="panel-tabs">
                <a class="is-active">Active Companions</a>
                <a>Messaging Center</a>
                <a>Price Book</a>
                <a>Archive</a>
            </p>

            <div class="panel-block">
                <p class="control has-icons-left">
                    <input class="input is-primary" type="text" placeholder="Search">
                    <span class="icon is-left">
                    <i class="fas fa-search" aria-hidden="true"></i>
                    </span>
                </p>
            </div>

            <div>
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                @if ($orders->count() == 0)
                    <p>No orders yet.</p>
                    <a class="btn btn-success is-1" href="{{ route('user.orders.create') }}">Add New Order</a>

                @else

                    <order-alert user_id="{{ auth()->user()->id }}"></order-alert>

                    <div class="panel-block column">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Progress</th>
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
                                <tr class="panel-block">
                                    <td>
                                        <order-progress></order-progress>
                                    </td>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->address }}</td>
                                    <td>{{ $order->size }}</td>
                                    <td>{{ $order->toppings }}</td>
                                    <td>{{ $order->instructions }}</td>
                                    <td><a href="{{ route('user.orders.show', $order) }}">{{ $order->status->name }}</a>
                                    </td>
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
@endsection
