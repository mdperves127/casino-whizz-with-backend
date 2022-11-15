@extends('layouts.dashboardApp')
@section('populer')
mm-active
@endsection
@section('dashboard_content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Update Most Populer</h4>
        </div>
        <!--end page-title-box-->
    </div>
    <!--end col-->
</div><!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-4 m-auto">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Update Most Populer</h4>
                <form action="{{ route('populer.update', $populer->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="text">Text</label>
                        <input type="text" class="form-control" name="text" placeholder="Enter icon class" value="{{ $populer->text }}" required />
                    </div>
                    <div class="form-group">
                        <label for="link"> Link</label>
                        <input type="text" class="form-control" name="link" placeholder="Enter social link" required  value="{{ $populer->link }}"/>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary">Submit</button>
                </form>
            </div>
            <!--end card-body-->
        </div>
    </div>
</div><!-- end row -->
@endsection