@extends('layouts.main-admin')
@section('css')
    <script type="text/javascript" src="http://www.carqueryapi.com/js/jquery.min.js"></script>
    <script type="text/javascript" src="http://www.carqueryapi.com/js/carquery.0.3.4.js"></script>
    <script type="text/javascript">
        $(document).ready(
            function() {
                var carquery = new CarQuery();
                carquery.init();
                carquery.setFilters({
                    sold_in_us: true
                });
                carquery.initYearMakeModelTrim('car-years', 'car-makes', 'car-models', 'car-model-trims');
                $('#cq-show-data').click(function() {
                    carquery.populateCarData('car-model-data');
                });
                carquery.initMakeModelTrimList('make-list', 'model-list', 'trim-list', 'trim-data-list');
                carquery.year_select_min = 1990;
                carquery.year_select_max = new Date().getFullYear();
                var searchArgs =
                    ({
                        body_id: "cq-body",
                        default_search_text: "Keyword Search",
                        doors_id: "cq-doors",
                        drive_id: "cq-drive",
                        engine_position_id: "cq-engine-position",
                        engine_type_id: "cq-engine-type",
                        fuel_type_id: "cq-fuel-type",
                        min_cylinders_id: "cq-min-cylinders",
                        min_mpg_hwy_id: "cq-min-mpg-hwy",
                        min_power_id: "cq-min-power",
                        min_top_speed_id: "cq-min-top-speed",
                        min_torque_id: "cq-min-torque",
                        min_weight_id: "cq-min-weight",
                        min_year_id: "cq-min-year",
                        max_cylinders_id: "cq-max-cylinders",
                        max_mpg_hwy_id: "cq-max-mpg-hwy",
                        max_power_id: "cq-max-power",
                        max_top_speed_id: "cq-max-top-speed",
                        max_weight_id: "cq-max-weight",
                        max_year_id: "cq-max-year",
                        search_controls_id: "cq-search-controls",
                        search_input_id: "cq-search-input",
                        search_results_id: "cq-search-results",
                        search_result_id: "cq-search-result",
                        seats_id: "cq-seats",
                        sold_in_us_id: "cq-sold-in-us"
                    });
                carquery.initSearchInterface(searchArgs);
            });
    </script>
@endsection
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Add Inventory</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{ route('admin.home') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Inventory</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Add Stock</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="card-head">
                            <header>Car Details</header>
                        </div>
                        @if ($errors->count() > 0)
                            <div class="alert alert-danger">
                                <ul class="list-unstyled">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('admin.inventories.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body row">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label for="">Manufacture Year: <span class="text-danger">*</span></label>
                                        <select name="manufacture_year" id="car-years" class="form-control"
                                            required></select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Make: <span class="text-danger">*</span></label>
                                        <select name="make" id="car-makes" class="form-control" required></select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Model: <span class="text-danger">*</span></label>
                                        <select name="model" id="car-models" class="form-control" required></select>
                                    </div>
                                </div>
                                <div class="col-lg-4 p-t-20">
                                    <input type="hidden" name="showroom_id"
                                        value="{{ Auth::user()->showroom->id ?? '' }}">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="txtCourseName" name="brand_name"
                                            required>
                                        <label class="mdl-textfield__label">Brand Name:</label>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-4 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="txtCourseCode" name="make"
                                            required>
                                        <label class="mdl-textfield__label">Make:</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="txtCourseCode" name="model"
                                            required>
                                        <label class="mdl-textfield__label">Model:</label>
                                    </div>
                                </div> --}}

                                {{-- <div class="col-lg-4 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="number" id="txtCourseCode"
                                            name="manufacture_year" required>
                                        <label class="mdl-textfield__label">Manufacture Year:</label>
                                    </div>
                                </div> --}}
                                <div class="col-lg-4 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="number" id="txtCourseCode"
                                            name="registration_year">
                                        <label class="mdl-textfield__label">Registration Year:</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="txtCourseCode"
                                            name="transmission">
                                        <label class="mdl-textfield__label">Transmission:</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="txtCourseCode" name="milage"
                                            required>
                                        <label class="mdl-textfield__label">Milage:</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="txtCourseCode"
                                            name="engine_type" required>
                                        <label class="mdl-textfield__label">Engine Type:</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="txtCourseCode" name="body_type"
                                            required>
                                        <label class="mdl-textfield__label">Body Type:</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="txtCourseCode"
                                            name="exterior_color" required>
                                        <label class="mdl-textfield__label">Exterior Color:</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="txtCourseCode"
                                            name="interior_color" required>
                                        <label class="mdl-textfield__label">Interior Color:</label>
                                    </div>
                                </div>

                                <div class="col-lg-4 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="number" id="txtCourseCode"
                                            name="no_of_doors" required>
                                        <label class="mdl-textfield__label">Number of Doors:</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="number" id="txtCourseCode" name="price"
                                            required>
                                        <label class="mdl-textfield__label"><strong> Price in
                                                Shillings:</strong></label>
                                    </div>
                                </div>
                                <div class="col-lg-4 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="txtCourseCode"
                                            name="engine_size">
                                        <label class="mdl-textfield__label">Engine Size :</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="txtCourseCode" name="fuel"
                                            required>
                                        <label class="mdl-textfield__label">Fuel :</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 p-t-20">
                                    <label class="control-label col-md-3" for="pictures">UPLOAD CAR PHOTOS: <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <div class="needsclick dropzone {{ $errors->has('pictures') ? 'is-invalid' : '' }}"
                                            id="pictures-dropzone">
                                        </div>
                                    </div>
                                    @if ($errors->has('pictures'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('pictures') }}
                                        </div>
                                    @endif
                                    <span
                                        class="help-block">{{ trans('cruds.inventory.fields.pictures_helper') }}</span>
                                </div>
                                <div class="col-lg-12 p-t-20">
                                    <div class="mdl-textfield mdl-js-textfield txt-full-width">
                                        <textarea class="mdl-textfield__input" rows="4" id="text7"
                                            name="description"></textarea>
                                        <label class="mdl-textfield__label" for="text7">Description or any other
                                            details:</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 p-t-20 text-center">
                                    <button type="submit"
                                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->

@endsection

@section('js')
    <script>
        var uploadedPicturesMap = {}
        Dropzone.options.picturesDropzone = {
            url: '{{ route('admin.inventories.storeMedia') }}',
            maxFilesize: 20, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 20,
                width: 4096,
                height: 4096
            },
            success: function(file, response) {
                $('form').append('<input type="hidden" name="pictures[]" value="' + response.name + '">')
                uploadedPicturesMap[file.name] = response.name
            },
            removedfile: function(file) {
                console.log(file)
                file.previewElement.remove()
                var name = ''
                if (typeof file.file_name !== 'undefined') {
                    name = file.file_name
                } else {
                    name = uploadedPicturesMap[file.name]
                }
                $('form').find('input[name="pictures[]"][value="' + name + '"]').remove()
            },
            init: function() {
                @if (isset($inventory) && $inventory->pictures)
                    var files = {!! json_encode($inventory->pictures) !!}
                    for (var i in files) {
                    var file = files[i]
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, file.preview)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="pictures[]" value="' + file.file_name + '">')
                    }
                @endif
            },
            error: function(file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script>
@endsection
