@extends('layouts.app1')
@section('container')
    <style>
        .step_radio {
            height: 30px;
            width: 30px;
            background-color: #3498db;
            border-radius: 50%;
        }
    </style>


    <section id="contact" class="contact mt-5">
        <div class="container">
            <div class="section-title" data-aos="fade-up">

                <div class="d-flex justify-content-around">
                    <div class="step_radio">2</div>
                    <div class="step_radio">3</div>
                    <div class="step_radio">4</div>
                    <div class="step_radio">5</div>
                </div>
            </div>
            @php
                $author_id = session('author_id');

            @endphp

            <div class="row" id="test_option">
                <x-question-count :authorId="session('author_id')" :test="$test"/>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

@section('script')
    <script src="{{ asset('assets/js/custom/category_type/index.js') }}"></script>
@endsection
@endsection
