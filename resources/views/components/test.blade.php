<form class ="m-5" method="post"
        {{-- action="{{ route('test-store') }}" --}}
        id="test"
     >

    <div class="card my-2">
        <div class="card-body">
            <input type="hidden"  name="author_id" value="{{ $authorId }}">
            <input type="hidden"  name="category_id" value="1">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Հարց</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="question[0][text]"  value="">
                </div>
                <div class="mb-3 row justify-content-end" data-id="question.0.text"></div>
            </div>

            <div class="form-group row">
                <legend class="col-form-label col-sm-2 float-sm-left pt-0">Պատասխանների տարբերակներ</legend>
                <div class="col-sm-10">

                    <div class="form-check d-flex">
                        <textarea class="form-control"
                                  rows="3"
                                  name='question[0][answer_option][0][name]'
                                  ></textarea>
                        <input class="form-check-input" type="radio" name="question[0][answer_option][0][radio]"
                            id="gridRadios2">

                    </div>
                    <div class="mb-3 row" data-id="question.0.answer_option.0.name"></div>

                    <div class="form-check d-flex my-2">
                        <textarea class="form-control"  rows="3"
                            name='question[0][answer_option][1][name]'></textarea>
                        <input class="form-check-input" type="radio" name="question[0][answer_option][1][radio]">
                    </div>
                    <div class="mb-3 row" data-id="question.0.answer_option.1.name">

                    </div>

                    <div class="form-check d-flex">
                        <textarea class="form-control"  rows="3"
                            name='question[0][answer_option][2][name]'></textarea>
                        <input class="form-check-input" type="radio" name="question[0][answer_option][2][radio]">
                    </div>
                    <div class="mb-3 row" data-id="question.0.answer_option.2.name"></div>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Գնահատականը</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="question[0][point]">
                </div>
                <div class="mb-3 row justify-content-end" data-id="question.0.point"></div>
            </div>
        </div>
    </div>

    <div class="m-3 row" id="addBtn">
        <label for="email" class="col-form-label">Ավելացնել
            <button type="button" id="add_section" data-conf-count="0" class="btn btn-primary mx-3">+</button>
        </label>
    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Պահպանել</button>
        </div>
    </div>
</form>
