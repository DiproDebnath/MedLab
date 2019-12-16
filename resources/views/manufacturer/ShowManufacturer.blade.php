@extends('app.table-layout')

@section('content')
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18"> </h4>
                            </div>
                            @if(session()->has('message'))
                                <div class="toast"  data-delay="5000" style="position: absolute; top: 0; right: 0;z-index: 22">
                                    <div class="toast-body d-flex {{session()->get('class')}}">
                                        <span class="my-1">{{ session()->get('message') }}</span>
                                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Manufacturer</h4>
                                    <p class="card-subtitle mb-4">
                                        Manage your Manufacturer
                                    </p>

                                    <table id="key-datatable" class="table dt-responsive" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Manufacturer Name</th>
                                                <th>Mobile</th>
                                                <th>Address</th>
                                                <th>Details</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         @foreach($manufacturer as  $manufacturer)
                                            <tr>
                                                <td>{{$manufacturer->id}}</td>
                                                <td>{{$manufacturer->manufacturer_name}}</td>
                                                <td>{{$manufacturer->manufacturer_mobile}}</td>
                                                <td>{{$manufacturer->manufacturer_address}}</td>
                                                <td>{{$manufacturer->manufacturer_details}}</td>
                                                <td class="text-center">
                                                    <a href='{{route('manufacturer.edit', $manufacturer->id)}}' type="button" class="btn btn-outline-info mr-2 waves-effect waves-light"><i class=" mdi font-size-16 mdi-playlist-edit"></i></a>
                                                    <button id="sa-delete" onclick="deleteFunction('{{route('manufacturer.destroy', $manufacturer->id)}}')" type="button" class="btn btn-outline-danger  waves-effect waves-light"><i class="mdi font-size-16 mdi-delete-sweep"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                    <!-- end row-->
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
@endsection

@section('script')
    <script>
        //call the toast here
        @if(session()->has('message'))
            $('.toast').toast('show');
        @endif

        var b  = $("#key-datatable").DataTable({
            keys: !0,
            scrollX: true,
            buttons: ["copy", "print", "pdf"],
            language: {
                paginate: {
                    previous: "<i class='mdi mdi-chevron-left'>",
                    next: "<i class='mdi mdi-chevron-right'>"
                }
            },

            drawCallback: function() {
                $(".dataTables_paginate > .pagination").addClass(
                    "pagination-rounded"
                );
            }
        });
         b.buttons().container().appendTo("#key-datatable_wrapper .col-md-6:eq(0)");



        function deleteFunction(url) {
            var btn = ` <form action="${url}" method ='post'>
                            @method('DELETE')
                            @csrf
                        <button style="background: transparent; border:none; color:white;" type="submit" >Delete Account</button>
                        </form>`;
                Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: btn,// "Yes, delete it!"
            })
        }
    </script>
@endsection
