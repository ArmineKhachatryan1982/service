<div class="col-lg-8 col-md-12" data-aos="fade-up" data-aos-delay="300">
    <div class="section-title" data-aos="fade-up">

        <h2>{{ __('messages.caregory_type') }}</h2>
    </div>
    <form action="{{ route('question_count', app()->getLocale()) }}" method="post" class="php-email-form">
        {{-- <form method="post" class="php-email-form" id="category_type"> --}}
        @csrf
        <input type="hidden" value={{ $authorId }} name="author_id">
        @foreach ($categoryType as $item)
            <div class="mt-2">
                <input type="radio" name="category_type[{{ $item->id }}]name"
                    id="flexRadioDefault{{ $item->id }}">
                {{ $item->translation('ru')->text }}

            </div>
        @endforeach
        <div class="text-center">
            <button type="submit" class="btn btn-primary">{{ __('messages.next') }} </button>
        </div>



    </form>
</div>
