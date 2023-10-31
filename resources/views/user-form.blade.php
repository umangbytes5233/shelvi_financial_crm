@extends('layouts.master');
@section('main-container')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Application Form</h4>
                        </div>
                        <div class="card-body">
                            <div class="wizard">
                                <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                                    <li class="nav-item flex-fill" role="presentation" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Basic Details
                                ">
                                        <a class="nav-link active rounded-circle mx-auto d-flex align-items-center justify-content-center"
                                            href="#step1" id="step1-tab" data-bs-toggle="tab" role="tab"
                                            aria-controls="step1" aria-selected="true">
                                            <i class="far fa-user"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item flex-fill" role="presentation" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="EMI Calc">
                                        <a class="nav-link rounded-circle mx-auto d-flex align-items-center justify-content-center"
                                            href="#step2" id="step2-tab" data-bs-toggle="tab" role="tab"
                                            aria-controls="step2" aria-selected="false">
                                            <i class="fas fa-map-pin"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item flex-fill" role="presentation" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Bank Details">
                                        <a class="nav-link rounded-circle mx-auto d-flex align-items-center justify-content-center"
                                            href="#step3" id="step3-tab" data-bs-toggle="tab" role="tab"
                                            aria-controls="step3" aria-selected="false">
                                            <i class="fas fa-credit-card"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" role="tabpanel" id="step1"
                                        aria-labelledby="step1-tab">
                                        <div class="mb-4">
                                            <h5>Enter Your Basic Details</h5>
                                        </div>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-4 col-12">
                                                    <div class="form-group">
                                                        <label>First Name</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter First Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-12">
                                                    <div class="form-group">
                                                        <label>Last Name</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter Last Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-12">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter Email Address">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-12">
                                                    <div class="form-group">
                                                        <label>Mobile Number</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter Mobile Number">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-12">
                                                    <div class="form-group mb-0">
                                                        <label>Gender</label>
                                                        <select class="select">
                                                            <option>Select Gender</option>
                                                            <option>Male</option>
                                                            <option>Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-12">
                                                    <div class="form-group">
                                                        <label>Date of Birth</label>
                                                        <div class="cal-icon cal-icon-info">
                                                            <input type="text" class="datetimepicker form-control"
                                                                placeholder="Select Date">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-title">
                                                        <h5>Address Information</h5>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter your Address">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-12">
                                                    <div class="form-group">
                                                        <label>Country</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter your Country">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-12">
                                                    <div class="form-group">
                                                        <label>State</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter your State">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-12">
                                                    <div class="form-group">
                                                        <label>City</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter your City">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-12">
                                                    <div class="form-group">
                                                        <label>Postal Code</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter Your Postal Code">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="mb-4">
                                                    <h5>Upload Required Documents</h5>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                                    <div class="form-group">
                                                        <label>Aadhar Card</label>
                                                        <div class="form-group service-upload logo-upload mb-0">
                                                            <span><img src="assets/img/icons/img-drop.svg"
                                                                    alt="upload"></span>
                                                            <div class="drag-drop">
                                                                <h6 class="drop-browse align-center">
                                                                    <span class="text-info me-1">Click to Replace </span>
                                                                    or Drag and Drop
                                                                </h6>
                                                                <p class="text-muted">SVG, PNG, JPG (Max 800*400px)</p>
                                                                <input type="file" multiple id="image_sign">
                                                                <div id="frames"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                                    <div class="form-group">
                                                        <label>RC Book</label>
                                                        <div class="form-group service-upload logo-upload mb-0">
                                                            <span><img src="assets/img/icons/img-drop.svg"
                                                                    alt="upload"></span>
                                                            <div class="drag-drop">
                                                                <h6 class="drop-browse align-center">
                                                                    <span class="text-info me-1">Click to Replace </span>
                                                                    or Drag and Drop
                                                                </h6>
                                                                <p class="text-muted">SVG, PNG, JPG (Max 800*400px)</p>
                                                                <input type="file" multiple id="image_sign">
                                                                <div id="frames"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                                    <div class="form-group">
                                                        <label>Insurance </label>
                                                        <div class="form-group service-upload logo-upload mb-0">
                                                            <span><img src="assets/img/icons/img-drop.svg"
                                                                    alt="upload"></span>
                                                            <div class="drag-drop">
                                                                <h6 class="drop-browse align-center">
                                                                    <span class="text-info me-1">Click to Replace </span>
                                                                    or Drag and Drop
                                                                </h6>
                                                                <p class="text-muted">SVG, PNG, JPG (Max 800*400px)</p>
                                                                <input type="file" multiple id="image_sign">
                                                                <div id="frames"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="d-flex">
                                            <a class="btn btn btn-primary next">Next</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" role="tabpanel" id="step2"
                                        aria-labelledby="step2-tab">
                                        <div class="mb-4">
                                            <h5>Loan EMI Calculator</h5>
                                        </div>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="basicpill-pancard-input" class="form-label">Loan
                                                            Amount</label>
                                                        <input type="number" class="form-control"
                                                            id="basicpill-pancard-input" placeholder="Enter Loan Amount">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="basicpill-vatno-input" class="form-label">Loan
                                                            Years</label>
                                                        <input type="number" class="form-control"
                                                            id="basicpill-vatno-input" placeholder="Enter Loan Years">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="basicpill-cstno-input" class="form-label">Interest
                                                            Rate</label>
                                                        <input type="number" class="form-control"
                                                            id="basicpill-cstno-input" placeholder="Enter Interest Rate">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="basicpill-cstno-input" class="form-label">Monthly
                                                            EMI</label>
                                                        <input type="number" class="form-control"
                                                            id="basicpill-cstno-input" placeholder="Enter Monthly EMI">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="basicpill-cstno-input" class="form-label">Total
                                                            Interest</label>
                                                        <input type="number" class="form-control"
                                                            id="basicpill-cstno-input" placeholder="Enter Total">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="basicpill-cstno-input" class="form-label">Total Amount
                                                            Payable</label><input type="text" class="form-control"
                                                            id="basicpill-cstno-input" placeholder="Total Amount Payable">
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                        <div class="d-flex">
                                            <a class="btn btn btn-primary previous me-2"> Back</a>
                                            <a class="btn btn btn-primary next">Continue</a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" role="tabpanel" id="step3"
                                        aria-labelledby="step3-tab">
                                        <div class="mb-4">
                                            <h5>Payment Details</h5>
                                        </div>
                                        <form>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="basicpill-namecard-input" class="form-label">Name on
                                                            Card</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-namecard-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Credit Card Type</label>
                                                        <select class="form-select">
                                                            <option selected>Select Card Type</option>
                                                            <option value="AE">American Express</option>
                                                            <option value="VI">Visa</option>
                                                            <option value="MC">MasterCard</option>
                                                            <option value="DI">Discover</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="basicpill-cardno-input" class="form-label">Credit Card
                                                            Number</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-cardno-input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="basicpill-card-verification-input"
                                                            class="form-label">Card Verification Number</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-card-verification-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="basicpill-expiration-input"
                                                            class="form-label">Expiration Date</label>
                                                        <input type="text" class="form-control"
                                                            id="basicpill-expiration-input">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="d-flex">
                                            <a class="btn btn-primary previous me-2">Previous</a>
                                            <a class="btn btn-primary next" data-bs-toggle="modal"
                                                data-bs-target="#save_modal">Save Changes</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
