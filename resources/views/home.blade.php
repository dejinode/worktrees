@extends('layouts.app')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">
            <!-- Slide 2 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum is</h2>
                    <h2 class="animate__animated animate__fadeInDown">simply dummy text</h2>
                    <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        @include('sections/programs')
        @include('sections/articles')
        @include('sections/testimonials')
    </main>
    <!-- End #main -->
@endsection
