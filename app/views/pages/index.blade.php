@extends('layouts.pages')
@section('body')
    <!-- Navigation -->
        @include('pages.partials.nav')
        <!-- Intro Header -->
        <header class="intro">
            <div class="intro-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            {{ Form::open(['id'=>'main-search-form']) }}
                                <!--  text field -->
                                <div class="form-group">
                                   {{ Form::text('search',null,['class'=>'form-control main-search-box','placeholder'=>'e.g Children doctor in Lekki']) }}
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            {{ Form::submit('Search',['class'=>'btn btn-primary btn-lg btn-block']) }}
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                         <div class="form-group">
                                            {{ Form::button('Use Widget',['class'=>'btn btn-warning btn-lg btn-block']) }}
                                        </div>
                                    </div>
                                </div>
                            {{ Form::close() }}

                            <a href="#about" class="btn btn-circle page-scroll">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- About Section -->
        <section id="about" class="container content-section text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    @include('pages.partials.invitation-form')
                </div>
            </div>
        </section>
        @include('pages.partials.footer')
@stop

