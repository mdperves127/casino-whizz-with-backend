/**
 * Theme: Crovex - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Module/App: Main Js
 */

// In your Javascript (external .js resource or <script> tag)
$(document).ready(function () {
    $('.js-example-basic-multiple').select2();
});


(function ($) {

    'use strict';

    function initSlimscroll() {
        $('.slimscroll').slimscroll({
            height: 'auto',
            position: 'right',
            size: "7px",
            color: '#a2b1d021',
            opacity: 1,
            wheelStep: 5,
            touchScrollStep: 50
        });
    }


    function initMetisMenu() {
        //metis menu
        $(".metismenu").metisMenu();
        $(window).resize(function () {
            initEnlarge();
        });
    }

    function initLeftMenuCollapse() {
        // Left menu collapse
        $('.button-menu-mobile').on('click', function (event) {
            event.preventDefault();
            $("body").toggleClass("enlarge-menu");
            initSlimscroll();
        });
    }

    function initEnlarge() {
        if ($(window).width() < 1025) {
            $('body').addClass('enlarge-menu enlarge-menu-all');
        } else {
            // if ($('body').data('keep-enlarged') != true)
            $('body').removeClass('enlarge-menu enlarge-menu-all');
        }
    }

    function initTooltipPlugin() {
        $.fn.tooltip && $('[data-toggle="tooltip"]').tooltip()
    }

    function initMainIconTabMenu() {
        $('.main-icon-menu .nav-link').on('click', function (e) {
            $("body").removeClass("enlarge-menu");
            e.preventDefault();
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
            $('.main-menu-inner').addClass('active');
            var targ = $(this).attr('href');
            $(targ).addClass('active');
            $(targ).siblings().removeClass('active');
        });
    }


    function initActiveMenu() {
        // === following js will activate the menu in left side bar based on url ====
        $(".leftbar-tab-menu a, .left-sidenav a").each(function () {
            var pageUrl = window.location.href.split(/[?#]/)[0];
            if (this.href == pageUrl) {
                $(this).addClass("active");
                $(this).parent().addClass("active"); // add active to li of the current link                 
                $(this).parent().parent().addClass("in");
                $(this).parent().parent().addClass("mm-show");
                $(this).parent().parent().parent().addClass("mm-active");
                $(this).parent().parent().prev().addClass("active"); // add active class to an anchor
                $(this).parent().parent().parent().addClass("active");
                $(this).parent().parent().parent().parent().addClass("mm-show"); // add active to li of the current link                
                $(this).parent().parent().parent().parent().parent().addClass("mm-active");
                var menu = $(this).closest('.main-icon-menu-pane').attr('id');
                $("a[href='#" + menu + "']").addClass('active');

            }
        });
    }

    function initFeatherIcon() {
        feather.replace()
    }
    // Auto complate

    function initAutoComplate() {
        $(document).ready(function () {
            BindControls();
        });

        function BindControls() {
            var Countries = ['Forms',
                'Tables',
                'Charts',
                'Icones',
                'Maps'
            ];

            $('#AllCompo').autocomplete({
                source: Countries,
                minLength: 0,
                scroll: true
            }).focus(function () {
                $(this).autocomplete("search", "");
            });
        }
    }


    function initMainIconMenu() {
        $(".navigation-menu a").each(function () {
            var pageUrl = window.location.href.split(/[?#]/)[0];
            if (this.href == pageUrl) {
                $(this).parent().addClass("active"); // add active to li of the current link
                $(this).parent().parent().parent().addClass("active"); // add active class to an anchor
                $(this).parent().parent().parent().parent().parent().addClass("active"); // add active class to an anchor
            }
        });
    }

    function initTopbarMenu() {
        $('.navbar-toggle').on('click', function (event) {
            $(this).toggleClass('open');
            $('#navigation').slideToggle(400);
        });

        $('.navigation-menu>li').slice(-2).addClass('last-elements');

        $('.navigation-menu li.has-submenu a[href="#"]').on('click', function (e) {
            if ($(window).width() < 992) {
                e.preventDefault();
                $(this).parent('li').toggleClass('open').find('.submenu:first').toggleClass('open');
            }
        });
    }

    function init() {
        initSlimscroll();
        initMetisMenu();
        initLeftMenuCollapse();
        initEnlarge();
        initTooltipPlugin();
        initMainIconTabMenu();
        initActiveMenu();
        initFeatherIcon();
        initAutoComplate();
        initMainIconMenu();
        initTopbarMenu();
        Waves.init();
    }

    init();
    // Appending Specification To Items
    $('.add-speciality').on('click', function () {
        var text = $(this).data('text');
        var text1 = $(this).data('text1');
        $('#speciality-section').append(`
        <div class="d-flex">
        <div class="flex-grow-1">
        <div class="form-group">
            <input type="text" class="form-control"
                name="speciality_name[]"
                placeholder="${text}" value="">
            </div>
    </div>
    <div class="flex-grow-1">
        <div class="form-group">
            <input type="text" class="form-control"
                name="speciality_description[]"
                placeholder="${text1}" value="">
            </div>
    </div>
    <div class="flex-btn">
                <button type="button"
                    class="btn btn-danger remove-speciality">
                    <i class="fa fa-minus"></i>
                </button>
            </div>
    </div>
        `);

        $('.social-picker').iconpicker();

    });


    $(document).on('click', '.remove-speciality', function () {
        $(this).parent().parent().remove();
    });
    // Appending Features To Items
    $('.add-hot_list').on('click', function () {
        var text = $(this).data('text');
        $('#hot_list').append(`
        <div class="d-flex">
        <div class="flex-grow-1">
        <div class="form-group">
            <input type="text" class="form-control"
                name="hot_list[]"
                placeholder="${text}" value="">
            </div>
    </div>
    <div class="flex-btn">
                <button type="button"
                    class="btn btn-danger remove-hot_list">
                    <i class="fa fa-minus"></i>
                </button>
            </div>
    </div>
        `);

        $('.social-picker').iconpicker();

    });


    $(document).on('click', '.remove-hot_list', function () {
        $(this).parent().parent().remove();
    });



    // Appending Features To Items
    $('.add-feature').on('click', function () {
        var text = $(this).data('text');
        var text1 = $(this).data('text1');
        $('#feature-section').append(`
        <div class="d-flex">
        <div class="flex-grow-1">
        <div class="form-group">
            <input type="text" class="form-control"
                name="feature_name[]"
                placeholder="${text}" value="">
            </div>
    </div>
    <div class="flex-grow-1">
        <div class="form-group">
            <input type="text" class="form-control"
                name="feature_description[]"
                placeholder="${text1}" value="">
            </div>
    </div>
    <div class="flex-btn">
                <button type="button"
                    class="btn btn-danger remove-feature">
                    <i class="fa fa-minus"></i>
                </button>
            </div>
    </div>
        `);

        $('.social-picker').iconpicker();

    });


    $(document).on('click', '.remove-feature', function () {
        $(this).parent().parent().remove();
    });






})(jQuery)