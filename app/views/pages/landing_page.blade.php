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
                            <h1 class="brand-heading">Medic Nigeria</h1>
                            <p class="intro-text">Find. Book Appointments.</p>
                            <p class="intro-text">With Medical Specialist Nearest to You.</p>
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

