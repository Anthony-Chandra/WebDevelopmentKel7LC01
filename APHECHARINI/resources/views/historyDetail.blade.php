@extends('components.header')
@section('title', 'History Detail')
@section('content')
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
@endsection
