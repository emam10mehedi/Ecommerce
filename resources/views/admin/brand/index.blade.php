@extends('admin.master')

@section('body')

<div class="row mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Brand From</h4>
                <hr>
                <h4 class="text-center text-success">{{ session('message') }}</h4>
                <form class="form-horizontal p-t-20" action="{{ route('brand.new') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">Brand Name <span class="text-danger">*</span> </label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" id="exampleInputuname3" placeholder="brand Name"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail3" class="col-sm-3 control-label">Brand Description <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <textarea name="description" class="form-control" id="exampleInputuname3" placeholder="brand Description "></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="form-label col-sm-3 control-label" for="web">Brand Image</label>
                        <div class="col-sm-9">

                            <input type="file" name="image" id="input-file-now" class="dropify"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword4" class="col-sm-3 control-label">Publicaion Status</label>
                        <div class="col-sm-9">
                            <label class="me-3"> <input type="radio" name="status" value="1" checked>Published</label>
                            <label> <input type="radio" name="status" value="2">Unpublished</label>
                        </div>
                    </div>
                    <div class="form-group row m-b-0">
                        <div class="offset-sm-3 col-sm-9">
                            <button type="submit" class="btn btn-success waves-effect waves-light text-white">Create New Brand</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
