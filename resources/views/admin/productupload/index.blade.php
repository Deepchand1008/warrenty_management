@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header bg-grey">
            <h2 style="text-align:center;">Product Upload Page</h2>
        </div>
        <br>

        <div class="row">

            <div class="col-md-3">

            </div>
            <label for="filter_from_date">Filter By Invoice Date (Date
                Range)</label>
            <div class="col-md-2 mt-5">
                
                <input class="form-control hasDatepicker" type="date" onchange="custom_filter()" name="filter_from_date"
                    id="filter_from_date" autocomplete="off" placeholder="From" value="">
            </div>
            <div class="col-md-2 mt-5">
                <input class="form-control hasDatepicker" type="date " autocomplete="off" onchange="custom_filter()"
                    name="filter_to_date" id="filter_to_date" placeholder="To" value="">
            </div>
            <div class="col-md-2 filter-select mb-2 mt-5">
                <a class="btn btn-success mb-2 _effect--ripple waves-effect waves-light"
                    onclick="exportRecordByFilter();" href="javascript:void;">Export</a>
            </div>
        </div>


       

        <div class="card-body">
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-10">

                    <table class="table table table-striped mt-5">
                        <thead>
                            <tr>
                                <th>SN.</th>
                                <th>Invoce Number</th>
                                <th>Invoice Date</th>
                                <th>Created Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($uploads as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->invoice_number }}</td>
                                    <td>{{ $item->invoice_date }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <a href="{{ url('approve/' . $item->id) }}" class="btn btn-info">Approve</a>
                                        <a href="{{ url('delete-data/' . $item->id) }}" onclick="deleteItem()" class="btn btn-info">Delete</a>
                                        <script>function deleteItem() {
                                            // Show confirmation dialog
                                            var confirmed = confirm("Are you sure you want to delete this item?");
                                            
                                            // Check user's choice
                                            if (confirmed) {
                                                // If user clicks OK, proceed with deletion
                                                alert("Item deleted successfully");
                                                // Code to delete the item with the given itemId
                                                // For demonstration, we'll just log a message
                                                console.log("Deleting item with ID:", itemId);
                                            } 
                                        }</script>
                                        {{-- <button class="btn btn-danger">Delete</button> --}}
                                    </td>
                                </tr>
                        </tbody>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-5">
            <div class="dataTables_info" id="multi-column-ordering_info" role="status"
                aria-live="polite">
                Showing 1 to 1 of 1 entries
            </div>
        </div>
        <div class="col-sm-12 col-md-7">
            <div class="dataTables_paginate paging_simple_numbers"
                id="multi-column-ordering_paginate">
                <ul class="pagination">
                    <li class="paginate_button page-item previous disabled"
                        id="multi-column-ordering_previous"><a href="#"
                            aria-controls="multi-column-ordering" data-dt-idx="0" tabindex="0"
                            class="page-link"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-arrow-left">
                                <line x1="19" y1="12" x2="5"
                                    y2="12"> </line>
                                <polyline points="12 19 5 12 12 5"> </polyline>
                            </svg></a></li>
                    <li class="paginate_button page-item active"><a href="#"
                            aria-controls="multi-column-ordering" data-dt-idx="1"
                            tabindex="0" class="page-link">1</a></li>
                    <li class="paginate_button page-item next disabled"
                        id="multi-column-ordering_next"><a href="#"
                            aria-controls="multi-column-ordering" data-dt-idx="2"
                            tabindex="0" class="page-link"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19"
                                    y2="12"> </line>
                                <polyline points="12 5 19 12 12 19"> </polyline>
                            </svg></a></li>
                </ul>
            </div>
        </div>
    </div>























    {{-- <div style="text-align: center; padding:auto;" class="card"> --}}
    {{-- <div class="card-header">
        <h4>Add Products</h4>
    </div>
    <div class="card-body">

        <div class="container">

            <div class="layout-px-spacing">
                <div class="row layout-top-spacing">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div id="delete_bd_ms"></div>
                            <div class="col-md-12 text-left filterDateRanageDiv">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="" id="#error"></div>
                                        <div class="multiple-action">
                                            <button type="button" onclick="multiple_del()"
                                                class="btn btn-primary del _effect--ripple waves-effect waves-light">Approve</button>
                                        </div>
                                        <small>Apply action on checked record.</small>
                                    </div>
                                    <div class="col-md-9 text-right">
                                        <div class="filter-select mb-2">
                                            <div class="form-group">

                                                <div class="datepickerinput">
                                                    <div class="row">
                                                        <label for="filter_from_date">Filter By Invoice Date (Date
                                                            Range)</label>
                                                        <div class="col-md-3">
                                                            <input class="form-control hasDatepicker" type="text"
                                                                onchange="custom_filter()" name="filter_from_date"
                                                                id="filter_from_date" autocomplete="off" placeholder="From"
                                                                value="">
                                                        </div>

                                                        <div class="col-md-3">
                                                            <input class="form-control hasDatepicker" type="text"
                                                                autocomplete="off" onchange="custom_filter()"
                                                                name="filter_to_date" id="filter_to_date" placeholder="To"
                                                                value="">
                                                        </div>
                                                        <div class="col-md-1">
                                                            <a class="btn btn-success mb-2 _effect--ripple waves-effect waves-light"
                                                                onclick="exportRecordByFilter();"
                                                                href="javascript:void;">Export</a>
                                                        </div>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="mb-4 mt-4">
                                <div class="table-responsive">
                                    <div id="multi-column-ordering_wrapper"
                                        class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="dataTables_length" id="multi-column-ordering_length">
                                                    <label>Show <select name="multi-column-ordering_length"
                                                            aria-controls="multi-column-ordering" class="form-control">
                                                            <option value="10">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                        </select> entries</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="multi-column-ordering"
                                                    class="table table-hover table-striped dt-table-hover dataTable no-footer"
                                                    role="grid" aria-describedby="multi-column-ordering_info"
                                                    style="width: 1521px;">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                style="width: 100px;"
                                                                aria-label="
                                    
                                  ">
                                                                <input type="checkbox" class="new-control-input"
                                                                    id="contact-check-all">
                                                            </th>
                                                            <th class="sorting_asc" tabindex="0"
                                                                aria-controls="multi-column-ordering" rowspan="1"
                                                                colspan="1" style="width: 396px;" aria-sort="ascending"
                                                                aria-label="Invoice Number: activate to sort column descending">
                                                                Invoice Number</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="multi-column-ordering" rowspan="1"
                                                                colspan="1" style="width: 328px;"
                                                                aria-label="Invoice Date: activate to sort column ascending">
                                                                Invoice Date</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="multi-column-ordering" rowspan="1"
                                                                colspan="1" style="width: 347px;"
                                                                aria-label="Created Date: activate to sort column ascending">
                                                                Created Date</th>
                                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                style="width: 200px;" aria-label="Action">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tableItem">
                                                        <tr class="odd">
                                                            <td valign="top" colspan="5" class="dataTables_empty">No
                                                                data available in table
                                                            </td>
                                                        </tr>
                                                    </tbody>


                                                </table>
                                                <div id="multi-column-ordering_processing"
                                                    class="dataTables_processing card" style="display: none;">
                                                    Processing...</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-5">
                                                <div class="dataTables_info" id="multi-column-ordering_info"
                                                    role="status" aria-live="polite">Showing 0 to 0 of 0 entries
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-7">
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                    id="multi-column-ordering_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled"
                                                            id="multi-column-ordering_previous"><a href="#"
                                                                aria-controls="multi-column-ordering" data-dt-idx="0"
                                                                tabindex="0" class="page-link"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-arrow-left">
                                                                    <line x1="19" y1="12" x2="5"
                                                                        y2="12"> </line>
                                                                    <polyline points="12 19 5 12 12 5"> </polyline>
                                                                </svg></a></li>
                                                        <li class="paginate_button page-item next disabled"
                                                            id="multi-column-ordering_next"><a href="#"
                                                                aria-controls="multi-column-ordering" data-dt-idx="1"
                                                                tabindex="0" class="page-link"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-arrow-right">
                                                                    <line x1="5" y1="12" x2="19"
                                                                        y2="12"> </line>
                                                                    <polyline points="12 5 19 12 12 19"> </polyline>
                                                                </svg></a></li>
                                                    </ul>
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

    </div> --}}
@endsection
