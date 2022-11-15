@extends('layouts.dashboardApp')
@section('location')
mm-active
@endsection
@section('dashboard_content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Update Locations</h4>
        </div>
        <!--end page-title-box-->
    </div>
    <!--end col-->
</div><!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-4 m-auto">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Update Location</h4>
                <form action="{{ route('location.update', $location->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" name="location" placeholder="Enter location" required value="{{ $location->location }}" />
                    </div>
                    <div class="form-group">
                        <label for="link"> Link</label>
                        <input type="text" class="form-control" name="link" placeholder="Enter location link"
                            required value="{{ $location->link }}" />
                    </div>
                    <button type="submit" class="btn btn-gradient-primary">Submit</button>
                </form>
            </div>
            <!--end card-body-->
        </div>
    </div>
</div><!-- end row -->
@endsection