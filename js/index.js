jQuery(document).ready(function() {
  $('.add_comment, .hide').hide();
  $('#const').show();
  $('button').click(function() {
    var $id   = $(this).attr('id');
    var $clas = $(this).attr('class');
    if ($clas < 5) {
      $('#add_' + $id).show();
    } else if ($clas==5){
      alert("макс. ур-нь вложенности 5");
    } else if ($clas=="drop") {
      $.ajax({
        type: 'POST',
        url: '/hotels/delete.php',
        data: 'id='+$id,
          success: function(data) {
            location.reload();
          }
      });
    }
  });

});