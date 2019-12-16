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

                            <h3 class="card-title">Add Manufacturer</h3>
                            <p class="card-subtitle mb-4">

                            </p>

                            @php if(isset($manufacturer)){
                                $manufacturer_address = $manufacturer->manufacturer_address;
                                $manufacturer_details = $manufacturer->manufacturer_details;

                            }else{
                             $manufacturer_address = old('manufacturer_address');
                             $manufacturer_details = old('manufacturer_details');
                            }
                            @endphp

                            <form class="needs-validation"
                                  action="@if(isset($manufacturer)){{route('manufacturer.update', $manufacturer->id)}}@else {{route('manufacturer.store')}}@endif"
                                  method="post"
                            >
                                @isset($manufacturer)  @method('PUT') @endisset
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-8">
                                        <div class="form-group row">
                                            <label for="manufacturer" class="col-md-4 col-form-label">
                                                Manufacturer Name
                                                <i class="text-danger font-size-18">*</i>
                                            </label>
                                            <div class="col-md-8">
                                                <input name="manufacturer_name"
                                                       id="manufacturer"
                                                       class="form-control @error('manufacturer_name') is-invalid @enderror"
                                                       placeholder="Manufacturer"
                                                       @isset($manufacturer)
                                                            value="{{$manufacturer->manufacturer_name}}"
                                                       @else
                                                       value="{{old('manufacturer_name')}}"
                                                       @endisset
                                                >
                                                @error('manufacturer_name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-8">
                                        <div class="form-group row">
                                            <label for="manufacturer_mobile" class="col-md-4 col-form-label">Manufacturer Mobile </label>
                                            <div class="col-md-8">
                                                <input name="manufacturer_mobile"
                                                       id="manufacturer_mobile"
                                                       class="form-control @error('manufacturer_mobile') is-invalid @enderror"
                                                       placeholder="Manufacturer"
                                                       @isset($manufacturer)
                                                       value="{{$manufacturer->manufacturer_mobile}}"
                                                       @else
                                                       value="{{old('manufacturer_mobile')}}"
                                                    @endisset
                                                >
                                                @error('manufacturer_mobile')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}

                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-8">
                                        <div class="form-group row">
                                            <label for="manufacturer_address" class="col-md-4 col-form-label">Manufacturer Address </label>
                                            <div class="col-md-8">
                                                <textarea name="manufacturer_address"
                                                          id="manufacturer_address"
                                                          class="form-control @error('manufacturer_address') is-invalid @enderror"
                                                          placeholder="Manufacturer Address"

                                                >{{$manufacturer_address}}</textarea>
                                                @error('manufacturer_address')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-8">
                                        <div class="form-group row">
                                            <label for="manufacturer_details" class="col-md-4 col-form-label">Manufacturer Details </label>
                                            <div class="col-md-8">
                                                <textarea name="manufacturer_details"
                                                          id="manufacturer_details"
                                                          class="form-control @error('manufacturer_details') is-invalid @enderror"
                                                          placeholder="Manufacturer Details"

                                                >{{$manufacturer_details}}</textarea>
                                                @error('manufacturer_Details')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
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
