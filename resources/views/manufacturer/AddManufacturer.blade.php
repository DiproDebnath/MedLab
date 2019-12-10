@extends('app.layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->

            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h3 class="card-title">Add Manufacturer</h3>
                            <p class="card-subtitle mb-4">

                            </p>

                            <form class="needs-validation" >

                                <div class="form-row">
                                    <div class="col-md-8">
                                        <div class="form-group row">
                                            <label for="manufacturer" class="col-md-4 col-form-label">Manufacturer Name <i class="text-danger font-size-18">*</i> </label>
                                            <div class="col-md-8">
                                                <input name="manufacturer_name" id="manufacturer" class="form-control" placeholder="Manufacturer">
                                                <div class="invalid-feedback">

                                                </div>
                                                <!-- checkbox if Pharmaceutical is not in the list -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-8">
                                        <div class="form-group row">
                                            <label for="manufacturer_mobile" class="col-md-4 col-form-label">Manufacturer Mobile </label>
                                            <div class="col-md-8">
                                                <input name="manufacturer_mobile" id="manufacturer_mobile" class="form-control" placeholder="Manufacturer">
                                                <div class="invalid-feedback">

                                                </div>
                                                <!-- checkbox if Pharmaceutical is not in the list -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-8">
                                        <div class="form-group row">
                                            <label for="manufacturer_address" class="col-md-4 col-form-label">Manufacturer Address </label>
                                            <div class="col-md-8">
                                                <textarea name="manufacturer_address" id="manufacturer_address" class="form-control" placeholder="Manufacturer Address"></textarea>

                                                <div class="invalid-feedback">

                                                </div>
                                                <!-- checkbox if Pharmaceutical is not in the list -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-8">
                                        <div class="form-group row">
                                            <label for="manufacturer_Details" class="col-md-4 col-form-label">Manufacturer Details </label>
                                            <div class="col-md-8">
                                                <textarea name="manufacturer_Details" id="manufacturer_Details" class="form-control" placeholder="Manufacturer Details"></textarea>
                                                <div class="invalid-feedback">

                                                </div>
                                                    <!-- checkbox if Pharmaceutical is not in the list -->

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-primary waves-effect waves-light" type="submit"> Save</button>
                            </form>

                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col -->
            </div>
            <!-- end row-->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@endsection
