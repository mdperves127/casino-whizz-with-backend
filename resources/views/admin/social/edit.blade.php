@extends('layouts.dashboardApp')
@section('social')
mm-active
@endsection
@section('dashboard_content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Update Social Medias</h4>
        </div>
        <!--end page-title-box-->
    </div>
    <!--end col-->
</div><!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-4 m-auto">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Update Social Media</h4>
                <form action="{{ route('social.update', $social->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="icon">Icon Class</label>
                        <input type="text" class="form-control" name="icon" placeholder="Enter icon class" value="{{ $social->icon }}" required />
                    </div>
                    <div class="form-group">
                        <label for="link">Social Link</label>
                        <input type="text" class="form-control" name="link" placeholder="Enter social link" value="{{ $social->link }}" required />
                    </div>
                    <button type="submit" class="btn btn-gradient-primary">Submit</button>
                </form>
            </div>
            <!--end card-body-->
        </div>
    </div>
</div><!-- end row -->
@endsection