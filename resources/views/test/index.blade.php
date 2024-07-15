@extends('layouts.app1')

@section('container')
    <section>
        <div class="container mt-5">
            <ul class="nav nav-tabs" id="myTab" role="tablist">

                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#one_correct_answer" type="button" role="tab" aria-controls="home" aria-selected="true">one_correct_answer</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#more_than_one_correct_answer" type="button" role="tab" aria-controls="profile" aria-selected="false">more_than_one_correct_answer</button>
                </li>
                <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#with_no_correct_answer" type="button" role="tab" aria-controls="contact" aria-selected="false">with_no_correct_answer</button>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="one_correct_answer" role="tabpanel" aria-labelledby="home-tab">
                    <x-test
                    :authorId="$user_id"
                     ></x-test>
                </div>
                <div class="tab-pane fade" id="more_than_one_correct_answer" role="tabpanel" aria-labelledby="profile-tab">asssssssssssss</div>
                <div class="tab-pane fade" id="with_no_correct_answer" role="tabpanel" aria-labelledby="contact-tab">ccccccccccccccc</div>
            </div>
        <div>
            <!-- Button trigger modal -->
            <button type="button"  style="display:none" class="btn btn-primary modal_class" data-toggle="modal" data-target="#exampleModal">
                Launch demo modal
            </button>
              <x-modal/>
    </section>
    @section('script')

    <script src="{{ asset('assets/js/custom/test/index.js') }}"></script>

    @endsection
@endsection




