@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-1">

        </div>
        <div class="col-md-10 card mt-5" style="text-align: center; ">
            <div class="card-body" style="padding-left: 120px;">

                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div id="delete_bd_ms"></div>

                            <div class="col-md-12 text-right">
                            </div>

                            <div class="col-md-12 text-left filterDateRanageDiv">
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <div class="filter-select mb-2">
                                            <div class="form-group">

                                                <div class="datepickerinput row">
                                                    <label for="filter_from_date">Filter By Invoice Date (Date
                                                        Range)</label>
                                                    <div class="col-md-2 mt-5">
                                                        <input class="form-control hasDatepicker" type="text"
                                                            onchange="custom_filter()" name="filter_from_date"
                                                            id="filter_from_date" autocomplete="off" placeholder="From"
                                                            value="">
                                                    </div>

                                                    <div class="col-md-2 mt-5">
                                                        <input class="form-control hasDatepicker" type="text"
                                                            autocomplete="off" onchange="custom_filter()"
                                                            name="filter_to_date" id="filter_to_date" placeholder="To"
                                                            value="">
                                                    </div>

                                                    <div class="col-md-2 filter-select mb-2 mt-5">
                                                        <a class="btn btn-success mb-2 _effect--ripple waves-effect waves-light"
                                                            onclick="exportRecordByFilter();"
                                                            href="javascript:void;">Export</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="filter-select mb-2">

                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="mb-4 mt-4">
                                <div class="table-responsive">
                                    <div id="multi-column-ordering_wrapper"
                                        class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                        <div class="row">
                                            <p style="font-size:15px;font-weight:600;line-heght:24px;letter-spacing:1px;">
                                                Fill The Invoice Details</p>
                                            {{-- <div class="border border-black">
                                                <div class="dataTables_length rounded-3" id="multi-column-ordering_length">
                                                   
                                                    {{-- <label>Show Entries <select name="multi-column-ordering_length"
                                                            aria-controls="multi-column-ordering"
                                                            class="form-control border-secondary">
                                                            <option value="10">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                        </select>entries</label> 
                                                </div>
                                            </div> --}}

                                            <div class="col-md-10">


                                            </div>

                                        </div>
                                        <form action="{{ url('insert-data') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="invoice_number">Invoice Number</label>
                                                    <input type="text" class="form-control" name="invoice_number"
                                                        required>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label for="">Invoice Date</label>
                                                    <input type="date" class="form-control" name="invoice_date" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                   
                                                    <button type="submit" class="btn btn-primary">submit</button>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="file" name="excel_file" accept=".xls,.xlsx" class="form-control">

                                                    <small>
                                                        Import bulk data: .xls,.xlsx accepted</small>
                                                </div>
                                            </div>

                                    </div>

                                    {{-- <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="invoice_number">Created Date</label>
                                                    <input type="date" class="form-control" name="created_date">
                                                </div> --}}


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
    </div>
    </div>
    </div>
@endsection
