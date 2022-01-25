@extends('layouts.main-admin')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Edit Inventory</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{ route('admin.home') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="{{ route('admin.inventories.index') }}">Inventory</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Edit Inventory</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable-line">
                        <div class="tab-content">
                            <div class="tab-pane active fontawesome-demo" id="tab1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card-box">
                                            <div class="card-head">
                                                <header>Car Details</header>
                                            </div>
                                            <form method="POST"
                                                action="{{ route('admin.inventories.update', [$inventory->id]) }}"
                                                enctype="multipart/form-data">
                                                @method('PUT')
                                                @csrf
                                                <div class="card-body row">
                                                    <div class="col-lg-4 p-t-20">
                                                        <div
                                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                            <input class="mdl-textfield__input" type="text"
                                                                id="txtCourseName" name="brand_name"
                                                                value="{{ old('brand_name', $inventory->brand_name) }}"
                                                                required>
                                                            <label class="mdl-textfield__label">Brand Name:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 p-t-20">
                                                        <div
                                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                            <input class="mdl-textfield__input" type="text"
                                                                id="txtCourseCode" name="make"
                                                                value="{{ old('make', $inventory->make) }}" required>
                                                            <label class="mdl-textfield__label">Make:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 p-t-20">
                                                        <div
                                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                            <input class="mdl-textfield__input" type="text"
                                                                id="txtCourseCode" name="model"
                                                                value="{{ old('model', $inventory->model) }}" required>
                                                            <label class="mdl-textfield__label">Model:</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 p-t-20">
                                                        <div
                                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                            <input class="mdl-textfield__input" type="number"
                                                                id="txtCourseCode" name="manufacture_year"
                                                                value="{{ old('manufacture_year', $inventory->manufacture_year) }}"
                                                                required>
                                                            <label class="mdl-textfield__label">Manufacture Year:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 p-t-20">
                                                        <div
                                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                            <input class="mdl-textfield__input" type="number"
                                                                id="txtCourseCode" name="registration_year"
                                                                value="{{ old('registration_year', $inventory->registration_year) }}">
                                                            <label class="mdl-textfield__label">Registration Year:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 p-t-20">
                                                        <div
                                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                            <input class="mdl-textfield__input" type="text"
                                                                id="txtCourseCode" name="transmission"
                                                                value="{{ old('transmission', $inventory->transmission) }}">
                                                            <label class="mdl-textfield__label">Transmission:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 p-t-20">
                                                        <div
                                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                            <input class="mdl-textfield__input" type="text"
                                                                id="txtCourseCode" name="milage"
                                                                value="{{ old('milage', $inventory->milage) }}" required>
                                                            <label class="mdl-textfield__label">Milage:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 p-t-20">
                                                        <div
                                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                            <input class="mdl-textfield__input" type="text"
                                                                id="txtCourseCode" name="engine_type"
                                                                value="{{ old('engine_type', $inventory->engine_type) }}"
                                                                required>
                                                            <label class="mdl-textfield__label">Engine Type:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 p-t-20">
                                                        <div
                                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                            <input class="mdl-textfield__input" type="text"
                                                                id="txtCourseCode" name="body_type"
                                                                value="{{ old('body_type', $inventory->body_type) }}"
                                                                required>
                                                            <label class="mdl-textfield__label">Body Type:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 p-t-20">
                                                        <div
                                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                            <input class="mdl-textfield__input" type="text"
                                                                id="txtCourseCode" name="exterior_color"
                                                                value="{{ old('exterior_color', $inventory->exterior_color) }}"
                                                                required>
                                                            <label class="mdl-textfield__label">Exterior Color:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 p-t-20">
                                                        <div
                                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                            <input class="mdl-textfield__input" type="text"
                                                                id="txtCourseCode" name="interior_color"
                                                                value="{{ old('interior_color', $inventory->interior_color) }}"
                                                                required>
                                                            <label class="mdl-textfield__label">Interior Color:</label>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-4 p-t-20">
                                                        <div
                                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                            <input class="mdl-textfield__input" type="number"
                                                                id="txtCourseCode" name="no_of_doors"
                                                                value="{{ old('no_of_doors', $inventory->no_of_doors) }}"
                                                                required>
                                                            <label class="mdl-textfield__label">Number of Doors:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 p-t-20">
                                                        <div
                                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                            <input class="mdl-textfield__input" type="number"
                                                                id="txtCourseCode" name="price"
                                                                value="{{ old('price', $inventory->price) }}" required>
                                                            <label class="mdl-textfield__label"><strong> Price in
                                                                    Shillings:</strong></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 p-t-20">
                                                        <div
                                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                            <input class="mdl-textfield__input" type="text"
                                                                id="txtCourseCode" name="engine_size"
                                                                value="{{ old('engine_size', $inventory->engine_size) }}">
                                                            <label class="mdl-textfield__label">Engine Size :</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 p-t-20">
                                                        <div
                                                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                            <input class="mdl-textfield__input" type="text"
                                                                id="txtCourseCode" name="fuel" required
                                                                value="{{ old('fuel', $inventory->fuel) }}">
                                                            <label class="mdl-textfield__label">Fuel :</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 p-t-20">
                                                        <div class="mdl-textfield mdl-js-textfield txt-full-width">
                                                            <textarea class="mdl-textfield__input" rows="4" id="text7"
                                                                name="description">{!! old('description', $inventory->description) !!}
                                                                    </textarea>
                                                            <label class="mdl-textfield__label" for="text7">Description or
                                                                any other
                                                                details:</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 p-t-20">
                                                        <label class="control-label col-md-3" for="pictures">UPLOAD CAR
                                                            PHOTOS: <span class="text-danger">*</span></label>
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
                    </div>
                </div>
            </div>
        </div>
    </div>


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
