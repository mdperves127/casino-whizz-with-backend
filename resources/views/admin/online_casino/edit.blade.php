@extends('layouts.dashboardApp')
@section('online_casino')
mm-active
@endsection
@section('dashboard_content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Update Online Casino</h4>
        </div>
        <!--end page-title-box-->
    </div>
    <!--end col-->
</div><!-- end page title end breadcrumb -->
<div class="row">
    <div class="col-6 m-auto">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Update Online Casino</h4>
                <form action="{{ route('online.update', $online->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Casino Title" required
                            value="{{ $online->name }}" />
                    </div>
                    <div class="form-group">
                        <label for="rating">Rating</label>
                        <input type="text" class="form-control" name="rating" placeholder="Enter Rating (%) Number Only"
                            value="{{ $online->rating }}" />
                    </div>
                    <div class="form-group">
                        <label for="read_more_link">Read more link</label>
                        <input type="text" class="form-control" name="read_more_link" placeholder="Enter read more link"
                            value="{{ $online->read_more_link }}" />
                    </div>
                    <div class="form-group">
                        <label for="welcome_bonus">Welcome Bonus</label>
                        <input type="text" class="form-control" name="welcome_bonus" placeholder="Enter Welcome Bonus"
                            value="{{ $online->welcome_bonus }}" />
                    </div>
                    <div class="form-group">
                        <label for="promo_code">Promo Code</label>
                        <input type="text" class="form-control" name="promo_code" placeholder="Enter Promo Code"
                            value="{{ $online->promo_code }}" />
                    </div>
                    <div class="form-group">
                        <label>Hot List</label>
                        <div id="hot_list">

                            @forelse($hot_list as $list)
                            <div class="d-flex">

                                <div class="flex-grow-1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="hot_list[]"
                                            placeholder="Enter Item" value="{{ $list }}">
                                    </div>
                                </div>
                                <div class="flex-btn">
                                    @if($loop->first)
                                    <button type="button" class="btn btn-success add-hot_list"
                                        data-text="{{ __('Enter Item') }}"> <i class="fa fa-plus"></i> </button>
                                    @else
                                    <button type="button" class="btn btn-danger remove-hot_list"
                                        data-text="{{ __('Enter Item') }}"> <i class="fa fa-minus"></i> </button>
                                    @endif
                                </div>
                            </div>
                            @empty

                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="hot_list[]"
                                            placeholder="{{ __('Enter Item') }}" value="">
                                    </div>
                                </div>
                                <div class="flex-btn">
                                    <button type="butto n" class="btn btn-success add-hot_list"
                                        data-text="{{ __('Enter Item') }}">
                                        <i class="fa fa-plus"></i> </button>
                                </div>
                            </div>
                            @endforelse


                        </div>
                    </div>
                    <div class="form-group">
                        <label for="play_now_link">Play Now Link</label>
                        <input type="text" class="form-control" name="play_now_link"
                            placeholder="Enter play now link" value="{{ $online->play_now_link }}" />
                    </div>
                    <div class="form-group">
                        <label for="play_form_text">Play Form Text</label>
                        <input type="text" class="form-control" name="play_form_text"
                            placeholder="Enter play form text" value="{{ $online->play_form_text }}" />
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control" name="photo" />
                    </div>
                    <img style="width: 50px;" src="{{ asset('assets/images') }}/{{ $online->photo }}" alt="{{ $online->photo }}">
                    <br>
                    <br>
                    <div class="form-group">
                        <label for="flug">Flug Photo</label>
                        <input type="file" class="form-control" name="flug" />
                    </div>
                    <img style="width: 50px;" src="{{ asset('assets/images') }}/{{ $online->flug }}" alt="{{ $online->flug }}">
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