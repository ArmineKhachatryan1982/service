

    let count = 0
    $('#add_section').on("click", function () {


        let btnId=$(this).attr('data-id')
        count++
        console.log(count);
        $(this).attr('data-conf-count',count)

        $.get('/author/test/componenet/'+count, function(data) {
                $('#addBtn').before(data)
                $('.form-check-input').click(function(){

                    $(this).parent().parent().find('input:radio').prop('checked', false);
                    $(this).prop('checked', true);
                  })

        })


    })


    $('#test').on('submit', function (e){
        e.preventDefault()
        $(".error-log").html('')

        $(this).find()
        var $that = $(this)
        var formData = new FormData($(this)[0]);
        console.log(formData)
        var url='/author/test/store'
        //
        $.ajax({
          url: url,
          data: formData,
          processData: false,
          contentType: false,
          type: 'post',
          beforeSend: function (x) {
            console.log('befor sebd')
          },
          success: function (data) {

              if(data.message){

                $('.modal_class').click()

                $('#linkText').attr('value', data.message);
                $('#copyBtn').click(function(){
                    text=$('#linkText').value
                    console.log(text)
                    $('#linkText').select()
                    navigator.clipboard.writeText(data.message);

                })


              }

          },
          error: function (data) {

            if(data.errorMessage){
              console.log(data.errorMessage)
            }

            var errors = data.responseJSON.errors;

            $.each(errors, function (field_name, error) {


              $that.find('[data-id="' + field_name + '"]').html("<div class='col-sm-10 mt-2 text-danger fts-14 error-log' >" + error + "</div>")
            })

          }
        });


      } )
      $('.form-check-input').click(function(){

        $(this).parent().parent().find('input:radio').prop('checked', false);
        $(this).prop('checked', true);
      })

