//hide date-picker-1
$(".date-field").focusin(function () {
  $(".field-icon").hide();
});

$(".date-field").focusout(function () {
  $(".field-icon").show();
});

//hide date-picker-2
$(".dates-field").focusin(function () {
  $(".field-icons").hide();
});

$(".dates-field").focusout(function () {
  $(".field-icons").show();
});

// Mobile Menu Js
$('.mobile-toggle').click(function(){
	$('.mobile-wrap').addClass('active');
});
// Mobile Navigation Close Button Js
$('.toogle-close-btn').click(function(){
	$('.mobile-wrap').removeClass('active');
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


//image-uploader-customer-tab
//round-image-start
$('#imageUploadNew').click(function(){
  function readURL(input) { 
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
          $('#imagePreviewNew').css('background-image', 'url('+e.target.result +')');
          $('#imagePreviewNew').hide();
          $('#imagePreviewNew').fadeIn(650);
      }
      reader.readAsDataURL(input.files[0]);
  }
}
$("#imageUploadNew").change(function() {
  readURL(this);
});
})


//round-image-start-2
$('#imageUploadNews').click(function(){
  function readURL(input) { 
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
          $('#imagePreviewNews').css('background-image', 'url('+e.target.result +')');
          $('#imagePreviewNews').hide();
          $('#imagePreviewNews').fadeIn(650);
      }
      reader.readAsDataURL(input.files[0]);
  }
}
$("#imageUploadNews").change(function() {
  readURL(this);
});
})
//round-image-end-2
   
                                                                                                                                                                                                                                                                                   
//round-image-start-3
  $('#imageUploadNewss').click(function(){
    function readURL(input) { 
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreviewNewss').css('background-image', 'url('+e.target.result +')');
            $('#imagePreviewNewss').hide();
            $('#imagePreviewNewss').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
  }
  $("#imageUploadNewss").change(function() {
    readURL(this);
  });
})
//round-image-end-3

// SHOW/HIDE PASSWORD JS START
$(".showPass").click(function() {
  if ($(this).hasClass("fa-eye")) {
    $(this).toggleClass("fa-eye-slash");
    var input = $($(this).attr());
    alert($(input).attr());
  }
  else {
    $(this).toggleClass("fa-eye");
  }
});

function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  }
  else {
    x.type = "password";
  }
}
// SHOW/HIDE PASSWORD JS END
// SHOW/HIDE PASSWORD JS START-2
$(".showPasss").click(function() {
  if ($(this).hasClass("fa-eye")) {
    $(this).toggleClass("fa-eye-slash");
    var input = $($(this).attr());
    alert($(input).attr());
  }
  else {
    $(this).toggleClass("fa-eye");
  }
});

function myFunction() {
  var x = document.getElementById("passwords");
  if (x.type === "password") {
    x.type = "text";
  }
  else {
    x.type = "password";
  }
}
// SHOW/HIDE PASSWORD JS END-2

//data-table-start
$(document).ready(function(){
  $('#examp').dataTable({
    paging: false,
    responsive: true,
    fixedHeader: {
      header: true
    },
    dom: 'Bfrtip',
    buttons: [
    {
      extend: 'excel',
      text: 'Excel <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>'
    },
    {
      extend: 'pdf',
      text: 'PDF <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>'
    }, 
    'copy',
    'pdf',
    'colvis'
    ],
    
  });
});

//data-table-end


//data-table-start
$(document).ready(function(){
  $('#examptwo').dataTable({
    paging: false,
    responsive: true,
    fixedHeader: {
      header: true
    },
    dom: 'Bfrtip',
    buttons: [
    {
      extend: 'excel',
      text: 'Excel <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>'
    },
    {
      extend: 'pdf',
      text: 'PDF <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>'
    }, 
    'copy',
    'pdf',
    'colvis'
    ],
    
  });
});

//data-table-end

//data-table-start
$(document).ready(function(){
  $('#exampthree').dataTable({
    paging: false,
    responsive: true,
    fixedHeader: {
      header: true
    },
    dom: 'Bfrtip',
    buttons: [
    {
      extend: 'excel',
      text: 'Excel <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>'
    },
    {
      extend: 'pdf',
      text: 'PDF <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>'
    }, 
    'copy',
    'pdf',
    'colvis'
    ],
    
  });
});

//data-table-end

//data-table-start
$(document).ready(function(){
  $('#exampfour').dataTable({
    paging: false,
    responsive: true,
    fixedHeader: {
      header: true
    },
    dom: 'Bfrtip',
    buttons: [
    {
      extend: 'excel',
      text: 'Excel <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>'
    },
    {
      extend: 'pdf',
      text: 'PDF <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>'
    }, 
    'copy',
    'pdf',
    'colvis'
    ],
    
  });
});


$(document).ready(function(){
  $('#exampfive').dataTable({
    paging: false,
    responsive: true,
    fixedHeader: {
      header: true
    },
    dom: 'Bfrtip',
    buttons: [
    {
      extend: 'excel',
      text: 'Excel <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>'
    },
    {
      extend: 'pdf',
      text: 'PDF <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>'
    }, 
    'copy',
    'pdf',
    'colvis'
    ],
    
  });
});

//data-table-start
$(document).ready(function(){
  $('#exampsev').dataTable({
    paging: false,
    responsive: true,
    fixedHeader: {
      header: true
    },
    dom: 'Bfrtip',
    buttons: [
    {
      extend: 'excel',
      text: 'Excel <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>'
    },
    {
      extend: 'pdf',
      text: 'PDF <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>'
    }, 
    'copy',
    'pdf',
    'colvis'
    ],
    
  });
});

//data-table-end

//data-table-end
$(".activeTab").click(function() {
    $(".activeTab").removeClass("active");
    $(this).addClass("active");
});


//page-up-and-down
$('.open').click(function(){
	$('.load-details-page').addClass('active');
});
$('.closeBtn').click(function(){
	$('.load-details-page').removeClass('active');
});

//tab-showandhide-customers-detail
// $(document).ready(function(){
//   $('.open-tab').click(function(){
//     $('#tabs-show').toggle();
//     $('.activeTab').removeClass('active');
//     $('#activeTabs').addClass('active');
   
//   })
// });


// full page searchbar
function openSearchHero() {
  document.getElementById("FullScreenOverlay").style.display = "block";
}

function closeSearchHero() {
  document.getElementById("FullScreenOverlay").style.display = "none";
}