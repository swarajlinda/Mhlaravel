@extends ('admin.layouts.app')

@section('page-css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap/css/cdb.min.css" />
@endsection

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard - Check In</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Check In</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">

        <!-- form -->
        <div class="stepper" id="stepper">
            <div class="steps-container">
                <div class="steps">
                    <div class="step" icon="fa fa-pencil-alt" id="1">
                        <div class="step-title">
                            <span class="step-number">01</span>
                            <div class="step-text">Basic Information</div>
                        </div>
                    </div>
                    <div class="step" icon="fa fa-info-circle" id="2">
                        <div class="step-title">
                            <span class="step-number">02</span>
                            <div class="step-text">Organization</div>
                        </div>
                    </div>
                    <div class="step" icon="fa fa-book-reader" id="3">
                        <div class="step-title">
                            <span class="step-number">03</span>
                            <div class="step-text">Correspondence</div>
                        </div>
                    </div>
                    <div class="step" icon="fa fa-check" id="4">
                        <div class="step-title">
                            <span class="step-number">04</span>
                            <div class="step-text">Others</div>
                        </div>
                    </div>
                    <div class="step" icon="fa fa-check" id="4">
                        <div class="step-title">
                            <span class="step-number">05</span>
                            <div class="step-text">Payment</div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{route('post.check.in')}}" method="POST">
                @csrf
                <div class="stepper-content-container">
                    <!-- Step 1 -->
                    <div class="stepper-content fade-in" stepper-label="1">
                        <div class="w-100 h-100" style="padding: 30px 10px; background: #f9f9f9">
                            <div
                                class="my-0 mx-auto"
                                style="border-radius: 10px; background: #f5f5f5">
                                <div class="p-10 d-flex flex-column justify-content-center align-items-center">
                                    <div class="text-center pt-20 pe-0 pb-10 ps-0 fw-bold">
                                        Basic Information
                                    </div>
                                    <br>
                                    <div class="p-10 d-flex flex-column justify-content-center w-100">

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="checkInDate">Check In Date</label>
                                                <input type="date" class="form-control" id="checkInDate" name="checkInDate" placeholder="Select Date" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="checkInTime">Check In Time</label>
                                                <input type="time" class="form-control" id="checkInTime" name="checkInTime" placeholder="Select Time" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="nameOfVisitor">Name of Visitor</label>
                                            <input type="text" class="form-control" id="nameOfVisitor" name="nameOfVisitor" placeholder="Enter Name" required>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="contact1">Contact 1</label>
                                                <input type="text" class="form-control" id="contact1" name="contact1" required maxlength="10">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="contact2">Contact 2</label>
                                                <input type="text" class="form-control" id="contact2" name="contact2" required maxlength="10">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="dob">Date Of Birth</label>
                                                <input type="date" class="form-control" id="dob" name="dob" required>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="gender">Select Gender</label>
                                                <div class="form-check form-check-inline mt-4">
                                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Others">
                                                    <label class="form-check-label" for="inlineRadio3">Others </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex w-100 align-items-center justify-content-between">
                                            <button type="button"
                                                class="btn btn-dark btn-block mb-3 mt-5 ms-auto"
                                                onclick="stepper.navigate('2')">
                                                Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Step 1 -->

                    <!-- Step 2 -->
                    <div class="stepper-content fade-in" stepper-label="2">
                        <div class="w-100 h-100" style="padding: 30px 10px; background: #f9f9f9">
                            <div
                                class="my-0 mx-auto"
                                style="border-radius: 10px; background: #f5f5f5">
                                <div class="p-10 d-flex flex-column justify-content-center align-items-center">
                                    <div class="text-center pt-20 pe-0 pb-10 ps-0 fw-bold">
                                        Organization
                                    </div>
                                    <br>
                                    <div class="p-10 d-flex flex-column justify-content-center w-100">
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="companyName">Company Name</label>
                                                <input type="text" class="form-control" id="companyName" name="companyName">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="department">Department</label>
                                                <input type="text" class="form-control" id="department" name="department">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="designation">Designation</label>
                                                <input type="text" class="form-control" id="designation" name="designation">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="website">Website</label>
                                                <input type="text" class="form-control" id="website" name="website">
                                            </div>
                                        </div>

                                        <div class="d-flex w-100 align-items-center justify-content-between">
                                            <button type="button" class="btn btn-dark btn-block mb-3 mt-5" onclick="stepper.navigate('1')">
                                                Previous
                                            </button>
                                            <button type="button" class="btn btn-dark btn-block mb-3 mt-5" onclick="stepper.navigate('3')">
                                                Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Step 2 -->

                    <!-- Step 3 -->
                    <div class="stepper-content fade-in" stepper-label="3">
                        <div class="w-100 h-100" style="padding: 30px 10px; background: #f9f9f9">
                            <div
                                class="my-0 mx-auto"
                                style="border-radius: 10px; background: #f5f5f5">
                                <div class="p-10 d-flex flex-column justify-content-center align-items-center">
                                    <div class="text-center pt-20 pe-0 pb-10 ps-0 fw-bold">
                                        Correspondence
                                    </div>
                                    <br>
                                    <div class="p-10 d-flex flex-column justify-content-center w-100">
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="address">Address</label>
                                                <input type="text" class="form-control" id="address" name="address" required="">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="city">Town/City</label>
                                                <input type="text" class="form-control" id="city" name="city" required="">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="postalCode">Zip/Postal Code</label>
                                                <input type="text" class="form-control" id="postalCode" name="postalCode" required="">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="state">State/Province</label>
                                                <input type="text" class="form-control" id="state" name="state" required="">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="country">Country/Nationality</label>
                                                <input type="text" class="form-control" id="country" name="country" required="">
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label for="visitingPurpose">Purpose Of Visiting</label>
                                                <input type="text" class="form-control" id="visitingPurpose" name="visitingPurpose" required="">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="comingFrom">Coming From</label>
                                                <input type="text" class="form-control" id="comingFrom" name="comingFrom" required="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="goingTo">Going To</label>
                                                <input type="text" class="form-control" id="goingTo" name="goingTo" required="">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <button type="button" class="btn btn-dark btn-block mb-3 mt-5" onclick="stepper.navigate('2')">
                                            Previous
                                        </button>
                                        <button type="button" class="btn btn-dark btn-block mb-3 mt-5" onclick="stepper.navigate('4')">
                                            Next
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3 -->

                    <!-- Step 4 -->
                    <div class="stepper-content fade-in" stepper-label="4">
                        <div class="w-100 h-100" style="padding: 30px 10px; background: #f9f9f9">
                            <div
                                class="my-0 mx-auto"
                                style="border-radius: 10px; background: #f5f5f5">
                                <div class="p-10 d-flex flex-column justify-content-center align-items-center">
                                    <div class="text-center pt-20 pe-0 pb-10 ps-0 fw-bold">
                                        Others
                                    </div>
                                    <br>
                                    <div class="p-10 d-flex flex-column justify-content-center w-100">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="noOfGuests">No Of Guests</label>
                                                <input type="text" class="form-control" id="noOfGuests" name="noOfGuests" required="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="roomNo">Room No</label>
                                                <input type="text" class="form-control" id="roomNo" name="roomNo" required="">
                                            </div>

                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="roomType">Room Type</label>
                                                <select class="form-control" id="roomType" name="roomType" required="">
                                                    <option value="Classic">Classic</option>
                                                    <option value="Business">Business</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="rate">Rate</label>
                                                <input type="number" class="form-control" id="rate" name="rate" required="">
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="days">Days</label>
                                                <input type="number" class="form-control" id="days" name="days" required="">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-3">
                                                <label for="totalAmount">Total Amount</label>
                                                <input type="number" class="form-control" id="totalAmount" name="totalAmount" readonly>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="additionAmt">Additional Services Amount</label>
                                                <input type="number" class="form-control" id="additionAmt" name="additionAmt">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <button type="button" class="btn btn-dark btn-block mb-3 mt-5" onclick="stepper.navigate('3')">
                                            Previous
                                        </button>
                                        <button type="button" class="btn btn-dark btn-block mb-3 mt-5" onclick="stepper.navigate('5')">
                                            Next
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Step4 -->

                    <!-- Step 5 -->
                    <div class="stepper-content fade-in" stepper-label="5">
                        <div class="w-100 h-100" style="padding: 30px 10px; background: #f9f9f9">
                            <div
                                class="my-0 mx-auto"
                                style="border-radius: 10px; background: #f5f5f5">
                                <div class="p-10 d-flex flex-column justify-content-center align-items-center">
                                    <div class="text-center pt-20 pe-0 pb-10 ps-0 fw-bold">
                                        Payment
                                    </div>
                                    <br>
                                    <div class="p-10 d-flex flex-column justify-content-center w-100">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="paymentMethod">Payment Method</label>
                                                <select class="form-control" name="paymentMethod" id="paymentMethod">
                                                    <option value="">Select Payment Method</option>
                                                    <option value="CASH">CASH</option>
                                                    <option value="CHEQUE">CHEQUE</option>
                                                    <option value="DD">DD</option>
                                                    <option value="UPI">UPI</option>
                                                    <option value="OTHERS">OTHERS</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="paymentAmt">Payment Amount</label>
                                                <input type="number" class="form-control" id="paymentAmt" name="paymentAmt" required="">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <button type="button" class="btn btn-dark btn-block mb-3 mt-5" onclick="stepper.navigate('4')">
                                            Previous
                                        </button>
                                        <button class="btn btn-dark btn-block mb-3 mt-5" type="submit">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Step 5 -->
                </div>
            </form>
        </div>
        <!-- form -->

    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection


@section('page-script')
<script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/cdb.min.js"></script>

<script>
    const stepperElement = document.querySelector("#stepper");
    const stepper = new CDB.Stepper(stepperElement);

    $("#days").change(function() {
        var rate = $('#rate').val();
        var days = $('#days').val();
        var totalAmt = rate * days;
        $("#totalAmount").val(totalAmt);
    });
</script>
@endsection