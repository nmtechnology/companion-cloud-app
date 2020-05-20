@extends('layouts.app')

@section('content')
<div class="column">
    <div class="row">
        <br>
        <br>
        <br>
        <div class="column">
            <div class="panel is-primary">
                <div class="panel-heading is-large text-primary column">Active Companion Panel
                <a class="button is-warning" href="{{ route('user.orders.create') }}"><i class="fas fa-plus"></i>Add</a></div>

                <div class="panel-block is-success">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                @if ($orders->count() == 0)
                    <p class="has-text-white">No orders yet...</p>
                            <a class="button is-warning" href="{{ route('user.orders.create') }}"><i class="fas fa-plus"></i>Add</a></div>

                @else

                    <order-alert user_id="{{ auth()->user()->id }}"></order-alert>


                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Status</th>
                                    <th>APMS Refernce ID</th>
                                    <th>Pet's Name</th>
                                    <th>Cremation Type</th>
                                    <th>Service Options</th>
                                    <th>Extra Clinic Notes</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td><order-progress status="{{ $order->status->name}}"
                                                            initial=" {{ $order->status->percent }}"
                                                            order_id="{{ $order->id }}"></order-progress></td>
                                        <td><a href="{{ route('user.orders.show', $order) }}">APMS{{ $order->id }}</td>
                                        <td>{{ $order->pet_name }}</td>
                                        <td>{{ $order->cremation_type }}</td>
                                        <td>{{ $order->service_options }}</td>
                                        <td>{{ $order->extra_notes }}</td>
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
