@extends('components.header')
@section('title', 'Order Detail')
@section('content')
    <div class="container mt-5 pt-5">
        <div class="modal fade show d-block" tabindex="-1" id="RentForm">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Renting Form</h5>
                    </div>
                    <div class="modal-body">
                        <form class="p-2" style="background-color: rgba(248,249,250,255);" method="POST">
                            @csrf
                            @if (session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                            @if (session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            <input type="hidden" value="{{ $order->order_id }}" name="orderID">
                            <input type="hidden" value="{{ $order->car_id }}" name="carID">
                            <div class="mb-3">
                                <label for="carName" class="form-label">Vehicle Name:</label>
                                <input id="carName" type="text" class="form-control"
                                    value="{{ $order->car->car_name }}" disabled readonly>
                            </div>
                            @lesse
                                <div class="mb-3">
                                    <label for="carOwnerName" class="form-label">Vehicle Owner Name:</label>
                                    <input id="carOwnerName" type="text" class="form-control"
                                        value="{{ $order->car->user->username }}" disabled readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="transmission" class="form-label">Vehicle Transmission:</label>
                                    <input id="transmission" type="text" class="form-control"
                                        value="{{ $order->car->transmission }}" disabled readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Vehicle Price:</label>
                                    <div class="row">
                                        <div class="col-8">
                                            <input id="price" type="number" class="form-control"
                                                value="{{ $order->car->price }}" disabled readonly>
                                        </div>
                                        <div class="col-4 my-auto">
                                            <h5 class="text-center">/ day</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="RentStartDate" class="form-label">Rent Start Date:</label>
                                    <input id="RentStartDate" class="form-control" type="date" name="startDate"
                                        value="{{ $order->start_rent_date }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="RentDuration" class="form-label">Rent Duration:</label>
                                    <input id="RentDuration" class="form-control" type="number" onchange="changeTotal()"
                                        name="duration" required value="{{ $order->duration }}">
                                </div>
                                <h1 class="h5">Total: Rp<span class="h5"
                                        id="totalPrice">{{ number_format($order->total_price, 0, ',', '.') }}</span></h1>
                                <script>
                                    function changeTotal() {
                                        var x = document.getElementById("RentDuration").value;
                                        x = x * {{ $order->car->price }}
                                        x = x.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.");
                                        document.getElementById('totalPrice').innerHTML = x;
                                    }
                                </script>
                            @endlesse
                            @lessor
                                <div class="mb-3">
                                    <label for="rentUsername" class="form-label">Rent Username:</label>
                                    <input id="rentUsername" type="text" class="form-control"
                                        value="{{ $order->user->username }}" disabled readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="rentPhone" class="form-label">Rent Phone Number:</label>
                                    <input id="rentPhone" type="text" class="form-control" value="{{ $order->user->phone }}"
                                        disabled readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="rentStartDate" class="form-label">Rent Start Date:</label>
                                    <input id="rentStartDate" type="text" class="form-control"
                                        value="{{ $order->start_rent_date }}" disabled readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="rentEndDate" class="form-label">Rent End Date:</label>
                                    <input id="rentEndDate" type="text" class="form-control"
                                        value="{{ $order->end_rent_date }}" disabled readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="rentEndDate" class="form-label">Total Price:</label>
                                    <input id="rentEndDate" type="text" class="form-control"
                                        value="{{ $order->total_price }}" disabled readonly>
                                </div>
                            @endlessor
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="text-danger">{{ $error }}</div>
                                @endforeach
                            @endif
                            <div class="modal-footer">
                                @lesse
                                    <a href="/orders" class="btn btn-secondary">Close</a>
                                    <button type="submit" class="btn btn-danger" formaction="/orderDetail/delete">Delete
                                        Order</button>
                                    <button type="submit" class="btn btn-primary" formaction="/orderDetail/update">Save
                                        Changes</button>
                                @endlesse
                                @lessor
                                    <a href="/pendingOrder" class="btn btn-secondary">Close</a>
                                    <button type="submit" class="btn btn-danger" formaction="/pendingOrder/decline">Decline
                                        Request</button>
                                    <button type="submit" class="btn btn-success" formaction="/pendingOrder/accept">Accept
                                        Request</button>
                                @endlessor
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
