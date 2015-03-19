function invalid_quantity()
{
  event.preventDefault();
  bootbox.dialog({
      message : 'Invalid ticket quantity! Please check the values',
      title : 'Error',
      buttons:
      {
        success: 
        {
          label: "Ok",
          className: "btn-success",
          callback: function() {
            $(':submit').removeAttr('disabled');
          }
        }
      }
    });
}

// $(document).ready(function(){
    // $("form").submit(function(){
      function publish_submit_button()
      {
          var check = 1;
          if ($('#total_qty_toggle').val() == "1")
          {
            if (isNaN($('#total_quantity').val()) || $.trim($('#total_quantity').val()) === '')
            {
              invalid_quantity();
              return false;
              check = 0;
            }
            else
            {
              var total_q = 0;
              $("input[name^='ticket_quantity']").each(function(event){
                var val = $(this).attr('id');
                var myString = val.substr(val.lastIndexOf("_") + 1);
                var myString2 = $('#ticket_volume_'+myString).val();

                if (isNaN($(this).val()))
                {
                  invalid_quantity();
                  return false;
                  check = 0;
                }
                else
                {
                  var a = parseFloat($(this).val()) * parseFloat(myString2);
                  a = a ? a : 0;
                  total_q = parseFloat(total_q) + a;
                }
              });
              if (check == 1)
              {
                if (total_q > parseFloat($('#total_quantity').val()))
                {
                  invalid_quantity();
                  return false;
                }
              }
            }
          }
          $('#form_submit').submit();
      }
      // });
// });