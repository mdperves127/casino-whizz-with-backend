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
    <div class="col-4 m-auto">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Add Other Games</h4>
                <form action="{{ route('game.update', $game->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="inputName" class="form-label">Category</label>
                        <select class="form-control mb-3" aria-label="Default select example" name='category_id'>
                            @foreach(DB::table('other_games_categories')->get() as $cat)
                            <option value="{{ $cat->id }}" {{$game->category_id == $cat->id ? 'selected' :''}}>
                                {{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Other Games Name" value="{{ $game->name }}" /> 
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <input type="text" class="form-control" name="category" placeholder="Enter Category Name" value="{{ $game->category }}" />
                    </div>
                    <div class="form-group">
                        <label for="rate">Rate</label>
                        <input type="text" class="form-control" name="rate" placeholder="Enter Rate" value="{{ $game->rate }}" />
                    </div>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" class="form-control" name="link" placeholder="Enter Link" value="{{ $game->link }}" />
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control" name="photo" />
                    </div>
                    <img style="width: 50px;" src="{{ asset('assets/images') }}/{{ $game->photo }}" alt="{{ $game->photo }}">
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