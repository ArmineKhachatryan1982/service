

    <div class="card my-2">
        <div class="card-body">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Հարց</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="question[{{ $count }}][text]" >
                </div>
                <div class="mb-3 row justify-content-end" data-id="question.{{ $count }}.text"></div>
            </div>

            <div class="form-group row">
                <legend class="col-form-label col-sm-2 float-sm-left pt-0">Պատասխանների տարբերակներ</legend>
                <div class="col-sm-10">

                    <div class="form-check d-flex">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='question[{{ $count }}][answer_option][0][name]' ></textarea>
                        <input class="form-check-input" type="radio" name="question[{{ $count }}][answer_option][0][radio]" >
                    </div>
                    <div class="mb-3 row" data-id="question.{{ $count }}.answer_option.0.name"></div>

                    <div class="form-check d-flex my-2">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name='question[{{ $count }}][answer_option][1][name]'></textarea>
                        <input class="form-check-input" type="radio"  name="question[{{ $count }}][answer_option][1][radio]"  >
                    </div>
                    <div class="mb-3 row" data-id="question.{{ $count }}.answer_option.1.name"></div>

                    <div class="form-check d-flex">
                        <textarea class="form-control" rows="3" name='question[{{ $count }}][answer_option][2][name]'></textarea>
                        <input class="form-check-input" type="radio"  name="question[{{ $count }}][answer_option][2][radio]"  >
                    </div>
                    <div class="mb-3 row" data-id="question.{{ $count }}.answer_option.2.name">
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Գնահատականը</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="question[{{ $count }}][point]" >
                </div>
                <div class="mb-3 row justify-content-end" data-id="question.{{ $count }}.point"></div>
            </div>
        </div>
    </div>

