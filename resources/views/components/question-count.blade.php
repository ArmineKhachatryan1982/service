<div class="col-lg-8 col-md-12" data-aos="fade-up" data-aos-delay="300">
    <div class="section-title" data-aos="fade-up">

        <h2>{{ __('messages.question_count') }}</h2>
    </div>



    <form action="{{ route('question_type', app()->getLocale()) }}" method="post" class="php-email-form">
        @csrf
        <input type="hidden" value = "{{ $test->id }}" name="test_id">
        <div class="form-group">
            <input type="number" name="question_count" class="form-control">
        </div>
        @error('name')
            <div class="mb-3 row justify-content-end">
                <div class="col-sm-10 text-danger fts-14">{{ $message }}
                </div>
            </div>
        @enderror


        <div class="text-center">
            <button type="submit">{{ __('messages.next') }} </button>
        </div>
    </form>



</div>
