@extends('layouts.dashboardApp')
@section('online_casino')
mm-active
@endsection
@section('dashboard_content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Online Casino</h4>
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
                                <th>Rating</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($datas as $data)
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->rating }}</td>
                                <td>
                                    <img style="width: 50px;"
                                        src="{{ $data->photo ? asset('assets/images/'.$data->photo) : asset('assets/images/placeholder.png') }}"
                                        alt="{{ asset('assets/images/'.$data->photo) }}">
                                </td>
                                <td name="buttons">
                                    <div class="pull-right">
                                        <a href="{{ route('online.edit', $data->id) }}"
                                            class="btn btn-sm btn-soft-success btn-circle mr-2"><i
                                                class="fa fa-edit"></i></a>
                                        <form action="{{ route('online.destroy', $data->id) }}"
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
                <h4 class="mt-0 header-title">Add Online Casino</h4>
                <form action="{{ route('online.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Casino Title" required />
                    </div>
                    <div class="form-group">
                        <label for="rating">Rating</label>
                        <input type="text" class="form-control" name="rating"
                            placeholder="Enter Rating (%) Number Only" />
                    </div>
                    <div class="form-group">
                        <label for="read_more_link">Read more link</label>
                        <input type="text" class="form-control" name="read_more_link"
                            placeholder="Enter read more link" />
                    </div>
                    <div class="form-group">
                        <label for="welcome_bonus">Welcome Bonus</label>
                        <input type="text" class="form-control" name="welcome_bonus"
                            placeholder="Enter Welcome Bonus" />
                    </div>
                    <div class="form-group">
                        <label for="promo_code">Promo Code</label>
                        <input type="text" class="form-control" name="promo_code" placeholder="Enter Promo Code" />
                    </div>
                    <div class="form-group">
                        <label>Hot List</label>
                        <div id="hot_list">
                            <div class="d-flex">

                                <div class="flex-grow-1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="hot_list[]"
                                            placeholder="Enter Item" value="">
                                    </div>
                                </div>
                                <div class="flex-btn">
                                    <button type="button" class="btn btn-success add-hot_list" data-text="Enter Item">
                                        <i class="fa fa-plus"></i> </button>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="form-group">
                        <label for="play_now_link">Play Now Link</label>
                        <input type="text" class="form-control" name="play_now_link" placeholder="Enter play now link" />
                    </div>
                    <div class="form-group">
                        <label for="play_form_text">Play Form Text</label>
                        <input type="text" class="form-control" name="play_form_text" placeholder="Enter play form text" />
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control" name="photo" />
                    </div>
                    <div class="form-group">
                        <label for="flug">Flug Photo</label>
                        <input type="file" class="form-control" name="flug" />
                    </div>
                    <button type="submit" class="btn btn-gradient-primary">Submit</button>
                </form>
            </div>
            <!--end card-body-->
        </div>
    </div>
</div><!-- end row -->
@endsection