// 
$('.menuBar-btn').click(function(){
	$('.main-left-wrap').addClass('active');
});
$('.closeBtn-top').click(function(){
	$('.main-left-wrap').removeClass('active');
});


// 
$('.unassigned-box').click(function(){
	$('.load-details-page').addClass('active');
});
$('.closeBtn').click(function(){
	$('.load-details-page').removeClass('active');
});

// 
$('.unassign-table').click(function(){
	$('.load-details-page').addClass('active');
});
$('.closeBtn').click(function(){
	$('.load-details-page').removeClass('active');
});


function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#imagePreview').css('background-image', 'url('+e.target.result +')');
      $('#imagePreview').hide();
      $('#imagePreview').fadeIn(650);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
$("#imageUpload").change(function() {
  readURL(this);
});

