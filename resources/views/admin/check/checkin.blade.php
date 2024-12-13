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
                            <div class="step-text">Details</div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="#">
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
                                                <label for="dob">Select Gender</label>
                                                <div class="form-check form-check-inline mt-4">
                                                    <input class="form-check-input" type="radio" name="dob" id="inlineRadio1" value="Male">
                                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="dob" id="inlineRadio2" value="Female">
                                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="dob" id="inlineRadio3" value="Others">
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
                                style="max-width: 500px; border-radius: 10px; background: #f5f5f5">
                                <div class="p-10 d-flex flex-column justify-content-center align-items-center">
                                    <div class="text-center pt-20 pe-0 pb-10 ps-0 fw-bold">
                                        Step 2
                                    </div>
                                    <div class="p-10 d-flex flex-column justify-content-center align-items-center w-100">
                                        <label class="text-muted mb-2"> First Name </label>
                                        <div class="cdb-form">
                                            <input type="text" class="form-control bg-light" />
                                        </div>
                                        <label class="text-muted mb-2"> Last Name </label>
                                        <div class="cdb-form">
                                            <input type="email" class="form-control bg-light" />
                                        </div>
                                        <label class="text-muted mb-2"> Phone Number </label>
                                        <div class="cdb-form">
                                            <input type="text" class="form-control bg-light" />
                                        </div>
                                        <label class="text-muted mb-2"> Address </label>
                                        <div class="cdb-form">
                                            <input type="email" class="form-control bg-light" />
                                        </div>
                                        <label class="text-muted mb-2"> Country </label>
                                        <div class="cdb-form">
                                            <input type="text" class="form-control bg-light" />
                                        </div>

                                        <div class="d-flex w-100 align-items-center justify-content-between">
                                            <button class="btn btn-dark btn-block mb-3 mt-5" onclick="stepper.navigate('1')">
                                                Previous
                                            </button>
                                            <button class="btn btn-dark btn-block mb-3 mt-5" onclick="stepper.navigate('3')">
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
                                style="max-width: 500px; border-radius: 10px; background: #f5f5f5">
                                <div class="p-10 d-flex flex-column justify-content-center align-items-center">
                                    <div class="text-center pt-20 pe-0 pb-10 ps-0 fw-bold">
                                        Step 3
                                    </div>
                                    <div class="p-10 d-flex flex-column justify-content-center align-items-center w-100">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui dicta minus molestiae
                                            vel beatae natus eveniet ratione temporibus aperiam harum alias officiis assumenda
                                            officia quibusdam deleniti eos cupiditate dolore doloribus!
                                        </p>
                                        <p>
                                            Ad dolore dignissimos asperiores dicta facere optio quod commodi nam tempore
                                            recusandae. Rerum sed nulla eum vero expedita ex delectus voluptates rem at neque
                                            quos facere sequi unde optio aliquam!
                                        </p>
                                        <p>
                                            Ad dolore dignissimos asperiores dicta facere optio quod commodi nam tempore
                                            recusandae. Rerum sed nulla eum vero expedita ex delectus voluptates rem at neque
                                            quos facere sequi unde optio aliquam!
                                        </p>
                                        <p>
                                            Ad dolore dignissimos asperiores dicta facere optio quod commodi nam tempore
                                            recusandae. Rerum sed nulla eum vero expedita ex delectus voluptates rem at neque
                                            quos facere sequi unde optio aliquam!
                                        </p>
                                    </div>
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <button class="btn btn-dark btn-block mb-3 mt-5" onclick="stepper.navigate('2')">
                                            Previous
                                        </button>
                                        <button class="btn btn-dark btn-block mb-3 mt-5" onclick="stepper.navigate('4')">
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
                                style="max-width: 500px; border-radius: 10px; background: #f5f5f5">
                                <div class="p-10 d-flex flex-column justify-content-center align-items-center">
                                    <div class="text-center pt-20 pe-0 pb-10 ps-0 fw-bold">
                                        Step 4
                                    </div>
                                    <div class="p-10 d-flex flex-column justify-content-center align-items-center w-100">
                                        <div class="text-center">
                                            Congratulations! You have completed this process.
                                            <span role="img" aria-label="image"> 🎉 </span>
                                        </div>
                                    </div>
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <button class="btn btn-dark btn-block mb-3 mt-5" onclick="stepper.navigate('3')">
                                            Previous
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Step4 -->
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
</script>
@endsection