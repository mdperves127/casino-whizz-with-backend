@extends('layouts.dashboardApp')
@section('partners')
mm-active
@endsection
@section('dashboard_content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Partners</h4>
        </div>
        <!--end page-title-box-->
    </div>
    <!--end col-->
</div><!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                @include('alerts.alert')
                <div class="table-responsive">
                    <table class="table table-bordered" id="makeEditable">
                        <thead>
                            <tr>
                                <th>Logo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($partners as $partner)
                            <tr>
                                <td>
                                    <img style="width: 50px;"
                                        src="{{ $partner->partner_logo ? asset('assets/images/'.$partner->partner_logo) : asset('assets/images/placeholder.png') }}"
                                        alt="{{ asset('assets/images/'.$partner->partner_logo) }}">
                                </td>
                                <td name="buttons">
                                    <div class="pull-right">
                                        <a href="{{ route('partners.edit', $partner->id) }}"
                                            class="btn btn-sm btn-soft-success btn-circle mr-2"><i
                                                class="fa fa-edit"></i></a>
                                        <form action="{{ route('partners.destroy', $partner->id) }}"
                                            style="display: inline-block;" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-soft-danger btn-circle"><i
                                                    class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                            @empty
                            <tr>
                                <td colspan="50" class="text-warning text-center">No data found!</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!--end table-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div><!-- end col -->
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Add Partner</h4>
                <form action="{{ route('partners.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="partner_logo">Logo</label>
                        <input type="file" class="form-control" name="partner_logo" />
                    </div>
                    <button type="submit" class="btn btn-gradient-primary">Submit</button>
                </form>
            </div>
            <!--end card-body-->
        </div>
    </div>
</div><!-- end row -->
@endsection