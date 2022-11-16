@extends('layouts.dashboardApp')
@section('other_game')
mm-active
@endsection
@section('dashboard_content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Other Games Category</h4>
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
                                <th>Name</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($datas as $data)
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>
                                    <img style="width: 50px;" src="{{ asset('assets/images') }}/{{ $data->photo }}"
                                        alt="{{ $data->photo }}">
                                </td>
                                <td name="buttons">
                                    <div class="pull-right">
                                        <a href="{{ route('game.edit', $data->id) }}"
                                            class="btn btn-sm btn-soft-success btn-circle mr-2"><i
                                                class="fa fa-edit"></i></a>
                                        <form action="{{ route('game.destroy', $data->id) }}"
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
                <h4 class="mt-0 header-title">Add Other Games</h4>
                <form action="{{ route('game.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="inputName" class="form-label">Category</label>
                        <select class="form-control mb-3" aria-label="Default select example" name='category_id'>
                            <option>Select a Category</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Other Games Name" />
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <input type="text" class="form-control" name="category" placeholder="Enter Category Name" />
                    </div>
                    <div class="form-group">
                        <label for="rate">Rate</label>
                        <input type="text" class="form-control" name="rate" placeholder="Enter Rate" />
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" class="form-control" name="link" placeholder="Enter Link" />
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