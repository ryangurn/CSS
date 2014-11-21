$(document).ready(function(){

  /* All of the autoSave Bull shit */
  var timeoutId;
  $('.autoSave').on('input propertychange', function() {
    timeoutId = setTimeout(function() {
      /* Eventually will be ajax */
      alert('SAVE');
    }, 200);
  });
  $('.firstname').on('input propertychange', function() {
    timeoutId = setTimeout(function() {
      /* Eventually will be ajax */
      alert('SAVE');
    }, 200);
  });

  $('#team_edit').on('input propertychange', function(){
    timeoutId = setTimeout(function() {
      /* Eventually will be ajax */
      $('#team_edit_form').attr('value', 'Dodgers');
    }, 10);
  });

});
