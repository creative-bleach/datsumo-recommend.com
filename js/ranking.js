$(document).ready(function() {
  $('#ranking_area ul li:nth-of-type(4)').hide();
  $('#ranking_area ul li:nth-of-type(5)').hide();
  // SHOW WHEN BTN IS CLICKED
  $('#show-rank').on('click', function(){
    $(this).toggleClass('open');
    $('#ranking_area ul li:nth-of-type(4)').slideToggle();
    $('#ranking_area ul li:nth-of-type(5)').slideToggle();
  });
});