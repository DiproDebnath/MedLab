@extends('app.form-layout')
@section('content')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->

            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h3 class="card-title">Add Medicine</h3>
                            <p class="card-subtitle mb-4">

                            </p>
                            @php if(isset($medicine)){
                             //   $manufacturer_address = $medicine->manufacturer_address;
                              // $manufacturer_details = $medicine->manufacturer_details;

                            }else{
                             //$manufacturer_address = old('manufacturer_address');
                             //$manufacturer_details = old('manufacturer_details');
                            }
                            @endphp

                            <form class="needs-validation"
                                  action="@isset($medicine)){{route('medicine.update', $medicine->id)}}@else {{route('medicine.store')}}@endisset"
                                  method="post"
                            >
                                @isset($medicine)  @method('PUT') @endisset
                                @csrf
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="pharmaceutical" class="col-md-4 col-form-label">
                                                Pharmaceutical
                                                <i class="text-danger font-size-18">*</i>
                                            </label>
                                            <div class="col-md-8">
                                                <select name="manufacturer_id"
                                                        id="pharmaceutical"  data-toggle="select2"
                                                        class="form-control @error('manufacturer_id') is-invalid @enderror"
                                                        required
                                                >
                                                    <option >Pharmaceutical</option>
                                                    @foreach($manufacturers as $manufacturer)
                                                        @if(isset($medicine) && $manufacturer->id === $medicine->manufacturer_id)
                                                            <option value="{{$manufacturer->id}}" selected>{{$manufacturer->manufacturer_name}}</option>
                                                        @else
                                                            <option value="{{$manufacturer->id}}">{{$manufacturer->manufacturer_name}}</option>
                                                        @endif;
                                                    @endforeach
                                                </select>
                                                @error('manufacturer_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                                <!-- checkbox if Pharmaceutical is not in the list -->
                                                {{--<a href="#" class="form-link"><i class="mdi mdi-shield-plus-outline"></i> Add Pharmaceutical</a>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group row">
                                            <label for="medicine_type" class="col-md-4 col-form-label">
                                                Medicine Type
                                                <i class="text-danger font-size-18">*</i>
                                            </label>
                                            <div class="col-md-8">
                                                <select name="medicine_type_id"
                                                        id="medicine_type"
                                                        data-toggle="select2"
                                                        class="form-control @error('medicine_type_id') is-invalid @enderror"
                                                        required
                                                >

                                                        <option >Medicine Type</option>
                                                        @foreach($medicineTypes as $medicineType)
                                                        @if(isset($medicine) && $medicineType->id === $medicine->medicine_type_id)
                                                            <option value="{{$medicineType->id}}" selected>{{$medicineType->type_name}}</option>
                                                        @else
                                                            <option value="{{$medicineType->id}}">{{$medicineType->type_name}}</option>
                                                        @endif;

                                                        @endforeach
                                                </select>

                                                @error('medicine_type_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="medicine_name" class="col-md-4 col-form-label">
                                                Medicine Name
                                                <i class="text-danger font-size-18">*</i>
                                            </label>
                                            <div class="col-md-8">
                                                <input type="text" name="medicine_name" id="medicine_name" class="form-control" required/>
                                                <div class="invalid-feedback">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group row">
                                            <label for="generic_name" class="col-md-4 col-form-label">
                                                Generic Name
                                                <i class="text-danger font-size-18">*</i>
                                            </label>
                                            <div class="col-md-8">
                                                <input type="text" name="generic_name" id="generic_name" class="form-control" required/>
                                                <div class="invalid-feedback">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="unit" class="col-md-4 col-form-label">
                                                Unit
                                                <i class="text-danger font-size-18">*</i>
                                            </label>
                                            <div class="col-md-8">
                                                <input type="text" name="unit" id="unit" class="form-control" required/>
                                                <div class="invalid-feedback">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group row">
                                            <label for="strength" class="col-md-4 col-form-label">
                                                Strength
                                                <i class="text-danger font-size-18">*</i>
                                            </label>
                                            <div class="col-md-8">
                                                <input type="text" name="strength" id="strength" class="form-control" required/>
                                                <div class="invalid-feedback">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="unit_price" class="col-md-4 col-form-label">
                                                Unit Price
                                                <i class="text-danger font-size-18">*</i>
                                            </label>
                                            <div class="col-md-8">
                                                <input type="text" name="unit_price" id="unit_price" class="form-control" required/>
                                                <div class="invalid-feedback">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">


                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect waves-light" type="submit"> Add Medicine</button>
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
