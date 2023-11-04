@extends('layouts.master')
@section('main-container')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-1">
                                <i class="fas fa-dollar-sign"></i>
                            </span>
                            <div class="dash-count">
                                <div class="dash-title"> Total Amount </div>
                                <div class="dash-counts">
                                    <p>1,642</p>
                                </div>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-3">
                            <div class="progress-bar bg-5" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        {{-- <p class="text-muted mt-3 mb-0">
                                <span class="text-danger me-1"><i class="fas fa-arrow-down me-1"></i>1.15%</span>
                                since last week
                            </p> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-2">
                                <i class="fas fa-users"></i>
                            </span>
                            <div class="dash-count">
                                <div class="dash-title">Customers</div>
                                <div class="dash-counts">
                                    <p>100</p>
                                </div>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-3">
                            <div class="progress-bar bg-6" role="progressbar" style="width: 65%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        {{-- <p class="text-muted mt-3 mb-0">
                                <span class="text-success me-1"><i class="fas fa-arrow-up me-1"></i>2.37%</span>
                                since last week
                            </p> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-3">
                                <i class="fas fa-file-alt"></i>
                            </span>
                            <div class="dash-count">
                                <div class="dash-title">Users</div>
                                <div class="dash-counts">
                                    <p>1,041</p>
                                </div>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-3">
                            <div class="progress-bar bg-7" role="progressbar" style="width: 85%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        {{-- <p class="text-muted mt-3 mb-0">
                                <span class="text-success me-1"><i class="fas fa-arrow-up me-1"></i>3.77%</span>
                                since last week
                            </p> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon bg-4">
                                <i class="far fa-file"></i>
                            </span>
                            <div class="dash-count">
                                <div class="dash-title">Estimates</div>
                                <div class="dash-counts">
                                    <p>2,150</p>
                                </div>
                            </div>
                        </div>
                        <div class="progress progress-sm mt-3">
                            <div class="progress-bar bg-8" role="progressbar" style="width: 45%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        {{-- <p class="text-muted mt-3 mb-0">
                                <span class="text-danger me-1"><i class="fas fa-arrow-down me-1"></i>8.68%</span>
                                since last week
                            </p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 d-flex">

                <div class="card flex-fill">
                    <div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="card bg-white">
                                    <div class="">
                                        <div class="d-flex justify-content-between">
                                        <h5 class="card-title mb-2">Calendar</h5>
                                        <a href="#" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#add_event">Create Event</a>
                                        </div>
                                        <div id="calendar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="add_event" class="modal custom-modal fade" role="dialog">
                            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-0 pb-0">
                                        <div class="form-header modal-header-title text-start mb-0">
                                            <h4 class="mb-0">Add Event</h4>
                                        </div>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span class="align-center" aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label>Event Name <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>Event Date <span class="text-danger">*</span></label>
                                                <div class="cal-icon">
                                                    <input class="form-control datetimepicker" type="text">
                                                </div>
                                            </div>
                                            <div class="submit-section">
                                                <button class="btn btn-primary submit-btn">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="modal custom-modal fade none-border" id="my_event">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Event</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body"></div>
                                    <div class="modal-footer justify-content-center">
                                        <button type="button" class="btn btn-success save-event submit-btn">Create event</button>
                                        <button type="button" class="btn btn-danger delete-event submit-btn" data-dismiss="modal">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="modal custom-modal fade" id="add_new_event">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header border-0 pb-0">
                                        <div class="form-header modal-header-title text-start mb-0">
                                            <h4 class="mb-0">Add Category</h4>
                                        </div>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span class="align-center" aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label>Category Name</label>
                                                <input class="form-control form-white" placeholder="Enter name" type="text">
                                            </div>
                                            <div class="form-group mb-0">
                                                <label>Choose Category Color</label>
                                                <select class="form-control form-white select2" data-placeholder="Choose a color..." name="category-color">
                                                    <option value="success">Success</option>
                                                    <option value="danger">Danger</option>
                                                    <option value="info">Info</option>
                                                    <option value="primary">Primary</option>
                                                    <option value="warning">Warning</option>
                                                    <option value="inverse">Inverse</option>
                                                </select>
                                            </div>
                                            <div class="submit-section">
                                                <button type="button" class="btn btn-primary save-category submit-btn" data-dismiss="modal">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

          
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-center">
                            <div class="col">
                                <h5 class="card-title">Recent Add Customers</h5>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="btn-right btn btn-sm btn-outline-primary">
                                    View All
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="progress progress-md rounded-pill mb-3">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 47%" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <i class="fas fa-circle text-success me-1"></i> Paid
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-circle text-warning me-1"></i> Unpaid
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-circle text-danger me-1"></i> Overdue
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-circle text-info me-1"></i> Draft
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-stripped table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Customer</th>
                                        <th>Amount</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href=""><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="User Image" />Barbara Moore</a>
                                            </h2>
                                        </td>
                                        <td>&#8377;118</td>
                                        <td>23 Nov 2020</td>
                                        <td>
                                            <span class="badge bg-success-light">Paid</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="invoice-details.html"><i class="far fa-eye me-2"></i>View</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark
                                                        as sent</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send
                                                        Invoice</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-copy me-2"></i>Clone
                                                        Invoice</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href=""><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/profiles/avatar-06.jpg" alt="User Image" />Karlene Chaidez</a>
                                            </h2>
                                        </td>
                                        <td>&#8377;222</td>
                                        <td>18 Nov 2020</td>
                                        <td>
                                            <span class="badge bg-info-light text-info">Sent</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="invoice-details.html"><i class="far fa-eye me-2"></i>View</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark
                                                        as sent</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send
                                                        Invoice</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-copy me-2"></i>Clone
                                                        Invoice</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href=""><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/profiles/avatar-08.jpg" alt="User Image" />Russell Copeland</a>
                                            </h2>
                                        </td>
                                        <td>&#8377;347</td>
                                        <td>10 Nov 2020</td>
                                        <td>
                                            <span class="badge bg-warning-light text-warning">Partially Paid</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="invoice-details.html"><i class="far fa-eye me-2"></i>View</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark
                                                        as sent</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send
                                                        Invoice</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-copy me-2"></i>Clone
                                                        Invoice</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href=""><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/profiles/avatar-10.jpg" alt="User Image" />Joseph Collins</a>
                                            </h2>
                                        </td>
                                        <td>&#8377;826</td>
                                        <td>25 Sep 2020</td>
                                        <td>
                                            <span class="badge bg-danger-light">Overdue</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="invoice-details.html"><i class="far fa-eye me-2"></i>View</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark
                                                        as sent</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send
                                                        Invoice</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-copy me-2"></i>Clone
                                                        Invoice</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href=""><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/profiles/avatar-11.jpg" alt="User Image" />Jennifer Floyd</a>
                                            </h2>
                                        </td>
                                        <td>&#8377;519</td>
                                        <td>18 Sep 2020</td>
                                        <td>
                                            <span class="badge bg-success-light">Paid</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="invoice-details.html"><i class="far fa-eye me-2"></i>View</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark
                                                        as sent</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send
                                                        Invoice</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-copy me-2"></i>Clone
                                                        Invoice</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-center">
                            <div class="col">
                                <h5 class="card-title">Users</h5>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="btn-right btn btn-sm btn-outline-primary">
                                    View All
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <div class="progress progress-md rounded-pill mb-3">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 39%" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 26%" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <i class="fas fa-circle text-success me-1"></i> Sent
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-circle text-warning me-1"></i> Draft
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-circle text-danger me-1"></i> Expired
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Customer</th>
                                        <th>Expiry Date</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href=""><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="User Image" />
                                                    Greg Lynch</a>
                                            </h2>
                                        </td>
                                        <td>5 Nov 2020</td>
                                        <td>&#8377;175</td>
                                        <td>
                                            <span class="badge bg-info-light text-info">Sent</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="invoice-details.html"><i class="far fa-eye me-2"></i>View</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-file-alt me-2"></i>Convert
                                                        to Invoice</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark
                                                        as sent</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send
                                                        Estimate</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark
                                                        as Accepted</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-times-circle me-2"></i>Mark
                                                        as Rejected</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href=""><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/profiles/avatar-06.jpg" alt="User Image" />
                                                    Karlene Chaidez</a>
                                            </h2>
                                        </td>
                                        <td>28 Oct 2020</td>
                                        <td>&#8377;1500</td>
                                        <td>
                                            <span class="badge bg-warning-light text-warning">Expired</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="invoice-details.html"><i class="far fa-eye me-2"></i>View</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-file-alt me-2"></i>Convert
                                                        to Invoice</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark
                                                        as sent</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send
                                                        Estimate</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark
                                                        as Accepted</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-times-circle me-2"></i>Mark
                                                        as Rejected</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href=""><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/profiles/avatar-07.jpg" alt="User Image" />
                                                    John Blair</a>
                                            </h2>
                                        </td>
                                        <td>17 Oct 2020</td>
                                        <td>&#8377;2350</td>
                                        <td>
                                            <span class="badge bg-success-light">Accepted</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="invoice-details.html"><i class="far fa-eye me-2"></i>View</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-file-alt me-2"></i>Convert
                                                        to Invoice</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark
                                                        as sent</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send
                                                        Estimate</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark
                                                        as Accepted</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-times-circle me-2"></i>Mark
                                                        as Rejected</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href=""><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/profiles/avatar-08.jpg" alt="User Image" />
                                                    Russell Copeland</a>
                                            </h2>
                                        </td>
                                        <td>8 Oct 2020</td>
                                        <td>&#8377;1890</td>
                                        <td>
                                            <span class="badge bg-success-light">Accepted</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="invoice-details.html"><i class="far fa-eye me-2"></i>View</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-file-alt me-2"></i>Convert
                                                        to Invoice</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark
                                                        as sent</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send
                                                        Estimate</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark
                                                        as Accepted</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-times-circle me-2"></i>Mark
                                                        as Rejected</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href=""><img class="avatar avatar-sm me-2 avatar-img rounded-circle" src="assets/img/profiles/avatar-09.jpg" alt="User Image" />
                                                    Leatha Bailey</a>
                                            </h2>
                                        </td>
                                        <td>30 Sep 2020</td>
                                        <td>&#8377;785</td>
                                        <td>
                                            <span class="badge bg-success-light">Accepted</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="edit-invoice.html"><i class="far fa-edit me-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-trash-alt me-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="invoice-details.html"><i class="far fa-eye me-2"></i>View</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-file-alt me-2"></i>Convert
                                                        to Invoice</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark
                                                        as sent</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-paper-plane me-2"></i>Send
                                                        Estimate</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-check-circle me-2"></i>Mark
                                                        as Accepted</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="far fa-times-circle me-2"></i>Mark
                                                        as Rejected</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection