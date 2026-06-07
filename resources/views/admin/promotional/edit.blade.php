@extends('admin.layouts.app')
@section('head')
    <title>Promotional Edit</title>
@endsection
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Promotional</h4>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="col-lg-6">
                <div class="card">
                    <div class="tab-content">
                        <div class="tab-pane fade show active">
                            <div class="card-body">
                                <form class="form-horizontal form-material"
                                    action="{{ route('admin.promotional.update', $data->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label class="col-md-12">Heading Top <small class="text-danger">*</small></label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" placeholder="Enter heading top" value="{{ old('heading_top') ?? $data->heading_top }}" name="heading_top">
                                            @error('heading_top')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Banner <small>(708*310px)</small> <small class="text-danger">*</small></label>
                                        <div class="col-md-12">
                                            <input type="file" class="form-control form-control-line" name="banner">
                                            @error('banner')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <img src="{{ asset($data->banner) }}" alt="" width="200" height="90" class="rounded border">
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Save & Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="tab-content">
                        <div class="tab-pane fade show active">
                            <div class="card-body">
                                <form class="form-horizontal form-material"
                                    action="{{ route('admin.promotional.terms') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-12">Terms 1 <small class="text-danger">*</small></label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" placeholder="Enter terms 1" value="{{ old('terms_1') ?? $terms->one }}" name="terms_1">
                                            @error('terms_1')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Terms 2 <small class="text-danger">*</small></label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" placeholder="Enter terms 2" value="{{ old('terms_2') ?? $terms->two }}" name="terms_2">
                                            @error('terms_2')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Terms 3 <small class="text-danger">*</small></label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" placeholder="Enter terms 3" value="{{ old('terms_3') ?? $terms->three }}" name="terms_3">
                                            @error('terms_3')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Terms 4 <small class="text-danger">*</small></label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" placeholder="Enter terms 4" value="{{ old('terms_4') ?? $terms->four }}" name="terms_4">
                                            @error('terms_4')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                        </div>
                                    </div>




                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Save & Update</button>
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
@endsection
@section('footer')
@endsection
