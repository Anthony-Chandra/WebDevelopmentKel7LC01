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

<body class="bg-dark" style="display: flex; min-height: 100vh; flex-direction: column; justify-content: space-between;">
    <header class="mx-5 my-5" style="width: 2%">
        <a class="mx-5 my-5" href="/catalogue">
            <svg xmlns="http://www.w3.org/2000/svg" class="fluid" fill="white" class="bi bi-caret-left-fill"
                viewBox="0 0 16 16">
                <path
                    d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
            </svg>
        </a>
    </header>
    <div class="container">
        @lesse
            <div class="modal fade" tabindex="-1" id="RentForm">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Renting Form</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="p-2" style="background-color: rgba(248,249,250,255);" action="/detail/rent"
                                method="POST">
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
                                <input type="hidden" value="{{ $car->car_id }}" name="carID">
                                <div class="mb-3">
                                    <label for="Name" class="form-label">Vehicle Name:</label>
                                    <input type="text" class="form-control" value="{{ $car->car_name }}" disabled
                                        readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="Price" class="form-label">Vehicle Transmission:</label>
                                    <input type="text" class="form-control" value="{{ $car->transmission }}" disabled
                                        readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="Desc" class="form-label">Vehicle Price:</label>
                                    <div class="row">
                                        <div class="col-8">
                                            <input type="number" class="form-control" value="{{ $car->price }}" disabled
                                                readonly>
                                        </div>
                                        <div class="col-4 my-auto">
                                            <h5 class="text-center">/ day</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="RentDate" class="form-label">Rent Start Date:</label>
                                    <input id="RentDate" class="form-control" type="date" name="startDate" required>
                                </div>
                                <div class="mb-3">
                                    <label for="RentDuration" class="form-label">Rent Duration:</label>
                                    <input id="RentDuration" class="form-control" type="number" onchange="changeTotal()"
                                        name="duration" required>
                                </div>
                                <h1 class="h5">Total: Rp<span class="h5" id="totalPrice"></span></h1>
                                <script>
                                    function changeTotal() {
                                        var x = document.getElementById("RentDuration").value;
                                        x = x * {{ $car->price }}
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
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Request Rent</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @if ($errors->any() || session()->has('success') || session()->has('error'))
                <script>
                    modal = new bootstrap.Modal('#RentForm');
                    modal.show()
                </script>
            @endif
        @endlesse
        @lessor
            <div class="modal fade" tabindex="-1" id="EditForm">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Vehicle Form</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="p-2" style="background-color: rgba(248,249,250,255);"
                                action="/detail/editForm" method="POST">
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
                                <input type="hidden" value="{{ $car->car_id }}" name="carID">
                                <div class="mb-3">
                                    <label for="Name" class="form-label">Vehicle Name:</label>
                                    <input type="text" class="form-control" value="{{ $car->car_name }}" disabled
                                        readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Vehicle Transmission:</label>
                                    <input type="text" class="form-control" value="{{ $car->transmission }}" disabled
                                        readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Seats Amount:</label>
                                    <input type="text" class="form-control" value="{{ $car->seats }}"
                                        name="seats">
                                </div>
                                <div class="mb-3">
                                    <label for="Status" class="form-label">Vehicle Status:</label>
                                    <select id="Status" class="form-select" name="status">
                                        <option value="{{ $car->status }}" selected hidden>{{ $car->status }}</option>
                                        <option value="Available">Available</option>
                                        <option value="Maintenance">Maintenance</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="Desc" class="form-label">Description:</label>
                                    <textarea class="form-control" id="Desc" name="desc" rows="3" value="">{{ $car->description }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="Price" class="form-label">Car Price:</label>
                                    <div class="row">
                                        <div class="col-8">
                                            <input type="number" class="form-control" value="{{ $car->price }}"
                                                name="price" id="Price">
                                        </div>
                                        <div class="col-4 my-auto">
                                            <h5 class="text-center">/ day</h5>
                                        </div>
                                    </div>
                                </div>
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="text-danger">{{ $error }}</div>
                                    @endforeach
                                @endif
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @if ($errors->any() || session()->has('success') || session()->has('error'))
                <script>
                    modal = new bootstrap.Modal('#EditForm');
                    modal.show()
                </script>
            @endif
        @endlessor
        <div class="h-100 mx-5 d-flex flex-column align-items-center justify-content-center">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="card-body">
                        <h1 class="card-title display-4 fw-normal mb-1 text-light">{{ $car->car_name }}</h1>
                        <div class="d-flex mb-3 text-light justify-content-between">
                            <h1 class="card-title h5 fw-light">Owned by {{ $car->user->username }}</h1>
                            <h1 class="card-title h5 fw-light"><span><i class="fas fa-phone"></i></span>
                                {{ $car->user->phone }}</h1>
                        </div>
                        <div class="row text-light mb-4">
                            <div class="col-md-4">
                                <div class="text-center mx-1 my-1"><i class="fa-solid fa-gears"
                                        style="font-size: 40px"></i>
                                </div>
                                <h1 class="h3 fw-light text-center">{{ $car->transmission }}</h1>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center mx-1 my-1"><i class="fa-solid fa-male text-center"
                                        style="font-size: 40px"></i>
                                </div>
                                <h1 class="h3 fw-light text-center">{{ $car->seats }} Seats</h1>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center mx-1 my-1">
                                    @if ($car->status == 'Available')
                                        <i class="fa-solid fa-check-circle text-center" style="font-size: 40px"></i>
                                    @else
                                        <i class="fa-solid fa-times-circle text-center" style="font-size: 40px"></i>
                                    @endif

                                </div>
                                <h1 class="h3 fw-light text-center">{{ $car->status }}</h1>
                            </div>
                        </div>
                        <p class="card-text border-bottom border-2 pb-3 text-light">{{ $car->description }}</p>
                        <h1 class="h5 text-secondary">Price</h1>
                        <h5 class="h4 text-light">Rp</h5>
                        <h5 class="h3 ms-5 text-light">{{ number_format($car->price, 0, ',', '.') }} / day</h5>
                    </div>
                </div>

                <div class="col-md-6">
                    <img src="{{ url('storage/app/public/Vehicle/' . $car->car_picture) }}" class="img-fluid my-2 p-3"
                        alt="...">
                    <div class="w-100 d-flex justify-content-center mt-5">
                        @lesse
                            <a class="btn btn-secondary btn-lg text-center" data-bs-toggle="modal"
                                data-bs-target="#RentForm">Rent Now</a>
                        @endlesse
                        @guest
                            <a href="/login" class="btn btn-secondary btn-lg text-center">Rent Now</a>
                        @endguest
                        @lessor
                            @if (session()->has('deleteError'))
                                <script>
                                    alert("{{ session()->get('deleteError') }}");
                                </script>
                            @endif
                            <form action="/detail/deleteVehicle" method="POST">
                                @csrf
                                <input type="hidden" value="{{ $car->car_id }}" name="carID">
                                <button class="btn btn-danger btn-lg text-center me-4" type="submit">Remove
                                    Vehicle</button>
                            </form>
                            <a class="btn btn-primary btn-lg text-center" data-bs-toggle="modal"
                                data-bs-target="#EditForm">Edit
                                Vehicle</a>
                        @endlessor
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')

</body>

</html>
