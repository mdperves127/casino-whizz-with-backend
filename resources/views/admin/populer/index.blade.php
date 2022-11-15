@extends('layouts.dashboardApp')
@section('populer')
mm-active
@endsection
@section('dashboard_content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Most Populer</h4>
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
                                <th>Text</th>
                                <th>Link</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($datas as $data)
                            <tr>
                                <td>{{ $data->text }}</td>
                                <td>{{ $data->link }}</td>
                                <td name="buttons">
                                    <div class="pull-right">
                                        <a href="{{ route('populer.edit', $data->id) }}"
                                            class="btn btn-sm btn-soft-success btn-circle mr-2"><i
                                                class="fa fa-edit"></i></a>
                                        <form action="{{ route('populer.destroy', $data->id) }}"
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
                <h4 class="mt-0 header-title">Add Most Populer</h4>
                <form action="{{ route('populer.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="text">Text</label>
                        <input type="text" class="form-control" name="text" placeholder="Enter icon class" required />
                    </div>
                    <div class="form-group">
                        <label for="link"> Link</label>
                        <input type="text" class="form-control" name="link" placeholder="Enter social link" required />
                    </div>
                    <button type="submit" class="btn btn-gradient-primary">Submit</button>
                </form>
            </div>
            <!--end card-body-->
        </div>
    </div>
</div><!-- end row -->
@endsection