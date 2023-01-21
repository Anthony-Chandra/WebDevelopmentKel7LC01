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
                        <h5 class="modal-title">Renting History Form</h5>
                    </div>
                    <div class="modal-body">
                        <form class="p-2" style="background-color: rgba(248,249,250,255);" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="carName" class="form-label">Vehicle Name:</label>
                                <input id="carName" type="text" class="form-control"
                                    value="{{ $history->car->car_name }}" disabled readonly>
                            </div>
                            @lesse
                                <div class="mb-3">
                                    <label for="carOwnerName" class="form-label">Vehicle Owner Name:</label>
                                    <input id="carOwnerName" type="text" class="form-control"
                                        value="{{ $history->car->user->username }}" disabled readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="transmission" class="form-label">Vehicle Transmission:</label>
                                    <input id="transmission" type="text" class="form-control"
                                        value="{{ $history->car->transmission }}" disabled readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Vehicle Price:</label>
                                    <div class="row">
                                        <div class="col-8">
                                            <input id="price" type="number" class="form-control"
                                                value="{{ $history->car->price }}" disabled readonly>
                                        </div>
                                        <div class="col-4 my-auto">
                                            <h5 class="text-center">/ day</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="RentStartDate" class="form-label">Rent Start Date:</label>
                                    <input id="RentStartDate" class="form-control" type="date" name="startDate"
                                        value="{{ $history->start_rent_date }}" disabled readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="RentEndDate" class="form-label">Rent End Date:</label>
                                    <input id="RentEndDate" class="form-control" type="date" name="endDate"
                                        value="{{ $history->end_rent_date }}" disabled readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="rentEndDate" class="form-label">Total Price:</label>
                                    <input id="rentEndDate" type="text" class="form-control"
                                        value="{{ $history->total_price }}" disabled readonly>
                                </div>
                            @endlesse
                            @lessor
                                <div class="mb-3">
                                    <label for="rentUsername" class="form-label">Rent Username:</label>
                                    <input id="rentUsername" type="text" class="form-control"
                                        value="{{ $history->user->username }}" disabled readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="rentPhone" class="form-label">Rent Phone Number:</label>
                                    <input id="rentPhone" type="text" class="form-control"
                                        value="{{ $history->user->phone }}" disabled readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="rentStartDate" class="form-label">Rent Start Date:</label>
                                    <input id="rentStartDate" type="text" class="form-control"
                                        value="{{ $history->start_rent_date }}" disabled readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="rentEndDate" class="form-label">Rent End Date:</label>
                                    <input id="rentEndDate" type="text" class="form-control"
                                        value="{{ $history->end_rent_date }}" disabled readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="rentEndDate" class="form-label">Total Price:</label>
                                    <input id="rentEndDate" type="text" class="form-control"
                                        value="{{ $history->total_price }}" disabled readonly>
                                </div>
                            @endlessor
                            <div class="mb-3">
                                <label for="status" class="form-label">Status:</label>
                                <input id="status" type="text" class="form-control"
                                    value="{{ $history->status }}" disabled readonly>
                            </div>
                            <div class="modal-footer">
                                @lesse
                                    <a href="/history/lesse" class="btn btn-secondary">Close</a>
                                @endlesse
                                @lessor
                                    <a href="/history/lessor" class="btn btn-secondary">Close</a>
                                @endlessor
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
