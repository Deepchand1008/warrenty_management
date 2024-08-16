@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-1">
<h2>Edit Product</h2>
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
                                                        <input class="form-control " type="text"
                                                            onchange="" name=""
                                                            id="filter_from_date" autocomplete="off" placeholder="From"
                                                            value="">
                                                    </div>

                                                    <div class="col-md-2 mt-5">
                                                        <input class="form-control " type="text"
                                                            autocomplete="off" onchange="custom_filter()"
                                                            name="" id="filter_to_date" placeholder="To"
                                                            value="">
                                                    </div>

                                                    <div class="col-md-2 filter-select mb-2 mt-5">
                                                        <a class="btn btn-success mb-2 _effect--ripple waves-effect waves-light"
                                                            onclick=""
                                                            href="">Export</a>
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
                                            <p style="font-size:15px;font-weight:600;line-heght:24px;letter-spacing:1px;">Fill The Invoice Details</p>
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
                                        <form action="{{ url('update-data/'.$upload->id )}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="invoice_number">Invoice Number</label>
                                                    <input type="text" class="form-control" name="invoice_number" value="{{$upload->invoice_number}}">
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label for="">Invoice Date</label>
                                                    <input type="date" class="form-control" name="invoice_date" value="{{$upload->invoice_date}}">
                                                </div>
                                                  
                                                </div>

                                                <div class="col-md-2 mt-4 btn-lg">
                                                    <button type="submit" class="btn btn-primary">update</button>
                                                </div>
                                            </div>  

                                            {{-- <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="invoice_number">Created Date</label>
                                                    <input type="date" class="form-control" name="created_date">
                                                </div> --}}

                                                
                                            </div>
                                        </form>






                                        {{-- <table id="multi-column-ordering"
                                                    class="table table-hover table-striped dt-table-hover dataTable no-footer"
                                                    role="grid" aria-describedby="multi-column-ordering_info"
                                                    style="width: 1521px;">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                style="width: 69px;" aria-label=" ">
                                                                <input type="checkbox" class="new-control-input"
                                                                    id="contact-check-all">
                                                            </th>
                                                            <th class="sorting_asc" tabindex="0"
                                                                aria-controls="multi-column-ordering" rowspan="1"
                                                                colspan="1" style="width: 294px;" aria-sort="ascending"
                                                                aria-label="Invoice Number: activate to sort column descending">
                                                                Invoice Number</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="multi-column-ordering" rowspan="1"
                                                                colspan="1" style="width: 242px;"
                                                                aria-label="Invoice Date: activate to sort column ascending">
                                                                Invoice Date</th>
                                                            <th class="sorting" tabindex="0"
                                                                aria-controls="multi-column-ordering" rowspan="1"
                                                                colspan="1" style="width: 377px;"
                                                                aria-label="Created Date: activate to sort column ascending">
                                                                Created Date</th>
                                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                                                style="width: 389px;" aria-label="Action">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tableItem">
                                                        <tr role="row" class="odd">
                                                            <td>
                                                                <input type="checkbox"
                                                                    class="new-control-input contact-chkbox"
                                                                    name="multicheck[]" value="191">
                                                            </td>
                                                            <td class="sorting_1">No Data</td>
                                                            <td>No Data</td>
                                                            <td>No Data </td>
                                                            <td>
                                                                <div style="display: flex;">
                                                                    <a class="btn btn-sm btn-success text-light"
                                                                        href="#">Export</a>&nbsp;&nbsp;&nbsp;
                                                                    <a class="btn btn-sm btn-primary text-light"
                                                                        href="javascript:;"
                                                                        onclick="view_item_serial('191')"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round"
                                                                            class="feather feather-eye">
                                                                            <path
                                                                                d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                            </path>
                                                                            <circle cx="12" cy="12" r="3">
                                                                            </circle>
                                                                        </svg></a>&nbsp;
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table> --}}
                                        <div id="multi-column-ordering_processing" class="dataTables_processing card"
                                            style="display: none;">
                                            Processing...
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
