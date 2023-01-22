<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Detail</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/0b65baf2e5.js" crossorigin="anonymous"></script>
</head>

<body class="d-flex flex-column min-vh-100 bg-dark">
    <div class="container">
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
                            <div class="mb-3">
                                <label for="carName" class="form-label">Car Name:</label>
                                <input id="carName" type="text" class="form-control"
                                    value="{{ $order->car->car_name }}" disabled readonly>
                            </div>
                            <div class="mb-3">
                                <label for="carOwnerName" class="form-label">Car Owner Name:</label>
                                <input id="carOwnerName" type="text" class="form-control"
                                    value="{{ $order->car->user->username }}" disabled readonly>
                            </div>
                            <div class="mb-3">
                                <label for="transmission" class="form-label">Car Transmission:</label>
                                <input id="transmission" type="text" class="form-control"
                                    value="{{ $order->car->transmission }}" disabled readonly>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Car Price:</label>
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
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="text-danger">{{ $error }}</div>
                                @endforeach
                            @endif
                            <div class="modal-footer">
                                <a href="/orders" class="btn btn-secondary">Close</a>
                                <button type="submit" class="btn btn-danger" formaction="/orderDetail/delete">Delete
                                    Order</button>
                                <button type="submit" class="btn btn-primary" formaction="/orderDetail/update">Save
                                    Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')

</body>

</html>
