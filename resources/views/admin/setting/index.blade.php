@extends('layouts.dashboardApp')
@section('setting')
mm-active
@endsection
@section('dashboard_content')
<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Site Settings</h4>
        </div>
        <!--end page-title-box-->
    </div>
    <!--end col-->

    <div class="col-xl-12 col-lg-12 col-md-12">

        <div class="card o-hidden border-0 shadow-lg">
            <div class="card-body ">
                <!-- Nested Row within Card Body -->
                <form class="admin-form" action="{{ route('admin.setting.update', $setting->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-3 col-lg-3">
                            <div class="nav flex-column m-3 nav-pills nav-secondary" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active show" data-toggle="pill" href="#banner_and_logo">Banner &
                                    Logo</a>
                                <a class="nav-link" data-toggle="pill" href="#exclusive_banner">Exclusive Banner</a>
                                <a class="nav-link" data-toggle="pill" href="#all_bgs">All Backgournd COLORS</a>
                                <a class="nav-link" data-toggle="pill" href="#other_casino">Other Casino</a>
                                <a class="nav-link" data-toggle="pill" href="#all_text">All Text</a>
                                {{-- <a class="nav-link" data-toggle="pill" href="#media">Media</a> --}}
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <input type="hidden" name="is_validate" value="1">
                            <div class="">
                                <div id="tabs">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div id="banner_and_logo" class="tab-pane active show"><br>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="banner_heading">Banner Heading *</label>
                                                        <input type="text" name="banner_heading" class="form-control"
                                                            placeholder="Enter Website Title"
                                                            value="{{ $setting->banner_heading }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="banner_description">Banner Description *</label>
                                                        <textarea name="banner_description" rows="4"
                                                            class="form-control">{{ $setting->banner_description }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="banner_play_now_link">Play now button link *</label>
                                                        <input type="text" name="banner_play_now_link"
                                                            class="form-control"
                                                            placeholder="Enter play now button link"
                                                            value="{{ $setting->banner_play_now_link }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="banner_read_more_link">Read more link *</label>
                                                        <input type="text" name="banner_read_more_link"
                                                            class="form-control"
                                                            placeholder="Enter play now button link"
                                                            value="{{ $setting->banner_read_more_link }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="banner_photo">Banner Photo *</label>
                                                        <input type="file" name="banner_photo" class="form-control">
                                                    </div>
                                                    <img style="width: 50px;"
                                                        src="{{ asset('assets/images') }}/{{ $setting->banner_photo }}"
                                                        alt="{{ $setting->banner_photo }}">
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="banner_bg">Banner BG *</label>
                                                        <input type="file" name="banner_bg" class="form-control">
                                                    </div>
                                                    <img style="width: 50px;"
                                                        src="{{ asset('assets/images') }}/{{ $setting->banner_bg }}"
                                                        alt="{{ $setting->banner_bg }}">
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="logo">Logo *</label>
                                                        <input type="file" name="logo" class="form-control">
                                                    </div>
                                                    <img style="width: 50px;"
                                                        src="{{ asset('assets/images') }}/{{ $setting->logo }}"
                                                        alt="{{ $setting->logo }}">
                                                </div>
                                            </div>

                                        </div>
                                        <div id="exclusive_banner" class="tab-pane"><br>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="exclusive_title">Exclusive Title *</label>
                                                        <input type="text" name="exclusive_title" class="form-control"
                                                            value="{{ $setting->exclusive_title }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="exclusive_prev_price">Exclusive Previous Price
                                                            *</label>
                                                        <input type="text" name="exclusive_prev_price"
                                                            class="form-control"
                                                            value="{{ $setting->exclusive_prev_price }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="exclusive_current_price">Exclusive Current Price
                                                            *</label>
                                                        <input type="text" name="exclusive_current_price"
                                                            class="form-control"
                                                            value="{{ $setting->exclusive_current_price }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="exclusive_button_link">Exclusive Button Link
                                                            *</label>
                                                        <input type="text" name="exclusive_button_link"
                                                            class="form-control"
                                                            value="{{ $setting->exclusive_button_link }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="exclusive_bonus_to">Exclusive Bonus To *</label>
                                                        <input type="text" name="exclusive_bonus_to"
                                                            class="form-control"
                                                            value="{{ $setting->exclusive_bonus_to }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="exclusive_heading">Exclusive Heading *</label>
                                                        <input type="text" name="exclusive_heading" class="form-control"
                                                            value="{{ $setting->exclusive_heading }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="exclusive_promo_code">Exclusive Promo Code *</label>
                                                        <input type="text" name="exclusive_promo_code"
                                                            class="form-control"
                                                            value="{{ $setting->exclusive_promo_code }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="exclusive_photo">Exclusive Photo *</label>
                                                        <input type="file" name="exclusive_photo" class="form-control">
                                                    </div>
                                                    <img style="width: 50px;"
                                                        src="{{ asset('assets/images') }}/{{ $setting->exclusive_photo }}"
                                                        alt="{{ $setting->exclusive_photo }}">
                                                </div>
                                            </div>

                                        </div>
                                        <div id="all_bgs" class="tab-pane"><br>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="header_bg">Header BG *</label>
                                                        <input type="text" name="header_bg" class="form-control"
                                                            value="{{ $setting->header_bg }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="other_casino_bg">Other Casino BG *</label>
                                                        <input type="text" name="other_casino_bg" class="form-control"
                                                            value="{{ $setting->other_casino_bg }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="best_casino_bg_color">Best Casino BG *</label>
                                                        <input type="text" name="best_casino_bg_color"
                                                            class="form-control"
                                                            value="{{ $setting->best_casino_bg_color }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="partner_bg">Partner BG *</label>
                                                        <input type="text" name="partner_bg" class="form-control"
                                                            value="{{ $setting->partner_bg }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="trusted_casino_bg">Trusted Casino BG *</label>
                                                        <input type="text" name="trusted_casino_bg" class="form-control"
                                                            value="{{ $setting->trusted_casino_bg }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="exclusive_bg">Exclusive BG *</label>
                                                        <input type="text" name="exclusive_bg" class="form-control"
                                                            value="{{ $setting->exclusive_bg }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="related_game_bg">Related Game BG *</label>
                                                        <input type="text" name="related_game_bg" class="form-control"
                                                            value="{{ $setting->related_game_bg }}">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div id="other_casino" class="tab-pane"><br>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="other_casino_one_link">Other Casino One Link
                                                            *</label>
                                                        <input type="text" name="other_casino_one_link"
                                                            class="form-control"
                                                            value="{{ $setting->other_casino_one_link }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="other_casino_two_link">Other Casino Two Link
                                                            *</label>
                                                        <input type="text" name="other_casino_two_link"
                                                            class="form-control"
                                                            value="{{ $setting->other_casino_two_link }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="other_casino_three_link">Other Casino Three Link
                                                            *</label>
                                                        <input type="text" name="other_casino_three_link"
                                                            class="form-control"
                                                            value="{{ $setting->other_casino_three_link }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="other_casino_four_link">Other Casino Four Link
                                                            *</label>
                                                        <input type="text" name="other_casino_four_link"
                                                            class="form-control"
                                                            value="{{ $setting->other_casino_four_link }}">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div id="all_text" class="tab-pane"><br>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="best_casino_heading">Best Casino Heading *</label>
                                                        <input type="text" name="best_casino_heading"
                                                            class="form-control"
                                                            value="{{ $setting->best_casino_heading }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="trusted_casino_heading">Trusted Casino Heading
                                                            *</label>
                                                        <input type="text" name="trusted_casino_heading"
                                                            class="form-control"
                                                            value="{{ $setting->trusted_casino_heading }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="trusted_casino_description">Trusted Casino
                                                            Description *</label>
                                                        <input type="text" name="trusted_casino_description"
                                                            class="form-control"
                                                            value="{{ $setting->trusted_casino_description }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="trusted_casino_color_description">Trusted Casino
                                                            Color Description *</label>
                                                        <input type="text" name="trusted_casino_color_description"
                                                            class="form-control"
                                                            value="{{ $setting->trusted_casino_color_description }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="trusted_casino_title">Trusted Casino Title *</label>
                                                        <input type="text" name="trusted_casino_title"
                                                            class="form-control"
                                                            value="{{ $setting->trusted_casino_title }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="related_game_heading">Related Game Heading *</label>
                                                        <input type="text" name="related_game_heading"
                                                            class="form-control"
                                                            value="{{ $setting->related_game_heading }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="related_game_bottom_text">Related Game Bottom Text
                                                            *</label>
                                                        <input type="text" name="related_game_bottom_text"
                                                            class="form-control"
                                                            value="{{ $setting->related_game_bottom_text }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="related_game_bottom_color_text">Related Game Bottom
                                                            Color Text *</label>
                                                        <input type="text" name="related_game_bottom_color_text"
                                                            class="form-control"
                                                            value="{{ $setting->related_game_bottom_color_text }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="casino_location_heading">Casino Location Heading
                                                            *</label>
                                                        <input type="text" name="casino_location_heading"
                                                            class="form-control"
                                                            value="{{ $setting->casino_location_heading }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label for="footer_text">Footer Text *</label>
                                                        <input type="text" name="footer_text" class="form-control"
                                                            value="{{ $setting->footer_text }}">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        {{-- <div id="media" class="tab-pane"><br>

                                            <div class="row justify-content-center">

                                                <div class="col-lg-8">

                                                    <ul
                                                        class="nav nav-pills nav-justified nav-secondary nav-pills-no-bd">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="pill"
                                                                href="#logo">Logo</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="pill"
                                                                href="#favicon">Favicon</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="pill"
                                                                href="#loader">Loader</a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content">

                                                        <div id="logo" class="container tab-pane active"><br>
                                                            <div class="row justify-content-center">

                                                                <div class="col-lg-12 ">

                                                                    <div class="form-group">
                                                                        <label for="name">Current Image</label>
                                                                        <div class="col-lg-12 pb-1">
                                                                            <img class="admin-setting-img"
                                                                                src="https://eliah.creativehunk.com/assets/images/1649044957eliah-logo.png"
                                                                                alt="No Image Found">
                                                                        </div>
                                                                        <span>Image Size Should Be 140 x 40.</span>
                                                                    </div>

                                                                    <div class="form-group position-relative ">
                                                                        <label class="file">
                                                                            <input type="file" accept="image/*"
                                                                                class="upload-photo" name="logo"
                                                                                id="file"
                                                                                aria-label="File browser example">
                                                                            <span class="file-custom text-left">Upload
                                                                                Image...</span>
                                                                        </label>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div id="favicon" class="container tab-pane"><br>
                                                            <div class="row justify-content-center">

                                                                <div class="col-lg-12">

                                                                    <div class="form-group">
                                                                        <label for="name">Current Image</label>
                                                                        <div class="col-lg-12 pb-1">
                                                                            <img class="admin-setting-img my-mw-100"
                                                                                src="https://eliah.creativehunk.com/assets/images/1649044957eliah-favicon.png"
                                                                                alt="No Image Found">
                                                                        </div>
                                                                        <span>Image Size Should Be 16 x 16.</span>
                                                                    </div>

                                                                    <div class="form-group position-relative ">
                                                                        <label class="file">
                                                                            <input type="file" accept="image/*"
                                                                                class="upload-photo" name="favicon"
                                                                                id="file"
                                                                                aria-label="File browser example">
                                                                            <span class="file-custom text-left">Upload
                                                                                Image...</span>
                                                                        </label>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div id="loader" class="container tab-pane"><br>
                                                            <div class="row justify-content-center">

                                                                <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label class="switch-primary">
                                                                            <input type="checkbox"
                                                                                class="switch switch-bootstrap "
                                                                                name="is_loader" value="1" checked="">
                                                                            <span class="switch-body"></span>
                                                                            <span class="switch-text">Display
                                                                                Loader</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="name">Current Image</label>
                                                                        <div class="col-lg-12 pb-1">
                                                                            <img class="admin-setting-img my-mw-100"
                                                                                src="https://eliah.creativehunk.com/assets/images/1649044957simple-preloader-gif.gif"
                                                                                alt="No Image Found">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group position-relative ">
                                                                        <label class="file">
                                                                            <input type="file" accept="image/*"
                                                                                class="upload-photo" name="loader"
                                                                                id="file"
                                                                                aria-label="File browser example">
                                                                            <span class="file-custom text-left">Upload
                                                                                Image...</span>
                                                                        </label>
                                                                    </div>



                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group d-flex justify-content-center">
                                <button type="submit" class="btn btn-secondary ">Submit</button>
                            </div>


                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!-- end page title end breadcrumb -->
@endsection