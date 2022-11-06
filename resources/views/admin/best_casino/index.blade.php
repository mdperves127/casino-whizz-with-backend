@extends('layouts.dashboardApp')
@section('best_casino')
mm-active
@endsection
@section('dashboard_content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Best Casino</h4>
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
                                <th>Title</th>
                                <th>Percent</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($bests as $best)
                            <tr>
                                <td>{{ $best->title }}</td>
                                <td>{{ $best->percent }}</td>
                                <td>
                                    <img style="width: 50px;"
                                        src="{{ $best->photo ? asset('assets/images/'.$best->photo) : asset('assets/images/placeholder.png') }}"
                                        alt="{{ asset('assets/images/'.$best->photo) }}">
                                </td>
                                <td name="buttons">
                                    <div class="pull-right">
                                        <a href="{{ route('best.edit', $best->id) }}"
                                            class="btn btn-sm btn-soft-success btn-circle mr-2"><i
                                                class="fa fa-edit"></i></a>
                                        <form action="{{ route('best.destroy', $best->id) }}"
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
                <h4 class="mt-0 header-title">Add Best Casino</h4>
                <form action="{{ route('best.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="Title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter Casino Title" />
                    </div>
                    <div class="form-group">
                        <label for="Percent">Percent</label>
                        <input type="text" class="form-control" name="percent"
                            placeholder="Enter Percent (%) Number Only" />
                    </div>
                    <div class="form-group">
                        <label for="link">Button Link</label>
                        <input type="text" class="form-control" name="button_link" placeholder="Enter Button Link" />
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control" name="photo" />
                    </div>
                    <button type="submit" class="btn btn-gradient-primary">Submit</button>
                </form>
            </div>
            <!--end card-body-->
        </div>
    </div>
</div><!-- end row -->
@endsection