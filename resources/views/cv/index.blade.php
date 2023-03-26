@extends('layouts.main')
@section('title', 'CV')
@section('content')
    <div class="job-area pt-120 pb-120">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="border-1px p-30 mb-0" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; padding: 20px;">
                        <h3 class="text-theme-colored1 mt-0 pt-10" style="font-size: 30px;">
                            Apply a Job You'll Love
                        </h3>
                        <hr>
                        <p style="font-size: 20px; font-weight: bold">
                            Fill your informations and upload your CV.
                        </p>
                        <form autocomplete="off" method="POST" action="{{ route('cv.store') }}"
                            enctype="multipart/form-data" id="create-form">
                            @csrf
                            <div class="row">

                                <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label>Name*</label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone"
                                            class="form-control @error('phone') is-invalid @enderror"
                                            value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label>Additional Note</label>
                                        <textarea class="form-control" rows="5" name="additional_note">{{ old('additional_note') }}</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <div class="form-group">
                                        <label for="img">Select your CV to upload</label> <br>
                                        <input type="file" name="attachment_file" accept=".doc, .docx, .pdf"
                                            class="form-control-file" />
                                        @error('attachment_file')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="postbox__btn-box">
                                        <button type="submit" class="submit-btn w-100">Apply Now</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreCv', '#create-form') !!}
@endsection
