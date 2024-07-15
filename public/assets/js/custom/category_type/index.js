
$('#category_type').on('submit', function (e){
    e.preventDefault()

    $(".error-log").html('')

    $(this).find()
    var $that = $(this)
    var formData = new FormData($(this)[0]);
    console.log(formData)
    var url='/en/author/question-count'

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
        console.log(data)
        $('#test_option').html(data)




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
