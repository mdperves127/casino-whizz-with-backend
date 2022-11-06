@extends('layouts.dashboardApp')
@section('home')
mm-active
@endsection
@section('dashboard_content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Update Partners</h4>
        </div>
        <!--end page-title-box-->
    </div>
    <!--end col-->
</div><!-- end page title end breadcrumb -->
<div class="row">
    @include('alerts.alert')
    <div class="col-4 m-auto">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Update Partner</h4>
                <form action="{{ route('partners.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PETCH')
                    <div class="form-group">
                        <label for="partner_logo">Logo</label>
                        <input type="file" class="form-control" />
                    </div>
                    <img width="50px;" src="{{ asset('assets/images') }}/{{ $partner->partner_logo }}" alt="partner logo">
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