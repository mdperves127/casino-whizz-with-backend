@extends('layouts.dashboardApp')
@section('best_casino')
mm-active
@endsection
@section('dashboard_content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Update Best Casino</h4>
        </div>
        <!--end page-title-box-->
    </div>
    <!--end col-->
</div><!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-4 m-auto">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Update Best Casino</h4>
                <form action="{{ route('best.update', $best->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="Title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter Casino Title" value="{{ $best->title }}" />
                    </div>
                    <div class="form-group">
                        <label for="Percent">Percent</label>
                        <input type="text" class="form-control" name="percent"
                            placeholder="Enter Percent (%) Number Only" value="{{ $best->percent }}" />
                    </div>
                    <div class="form-group">
                        <label for="link">Button Link</label>
                        <input type="text" class="form-control" name="button_link" placeholder="Enter Button Link" value="{{ $best->button_link }}" />
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control" name="photo" />
                    </div>
                    <img style="width: 50px;" src="{{ asset('assets/images') }}/{{ $best->photo }}" alt="Best casino photo">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-gradient-primary">Submit</button>
                </form>
            </div>
            <!--end card-body-->
        </div>
    </div>
</div><!-- end row -->
@endsection