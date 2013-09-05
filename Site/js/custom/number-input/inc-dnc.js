
// Create 2 bottons after the number input

 $(function() {

  $(".custom-number-wrap").append('<span class="inc custom-number-button">+</span><span class="dec custom-number-button">-</span>');

  $(".custom-number-button").on("click", function() {

    var $button = $(this);
    var oldValue = $button.parent().find("input").val();

    if ($button.text() == "+") {
      var newVal = parseFloat(oldValue) + 1;
    } else {
     // Don't allow decrementing below zero
      if (oldValue > 0) {
        var newVal = parseFloat(oldValue) - 1;
      } else {
        newVal = 0;
      }
    }

    $button.parent().find("input").val(newVal);

  });


// Add Search Icon

$('input#search').after('<i class="icon-search seach-input-icon class="seach-input-icon"></i>');


// Input focus change mag icon color
 $('#search').focus(function(){
   $(this).next().removeClass("active-search");
   $(this).next().addClass("active-search");

  }).blur(function(){
    $(this).next().removeClass("active-search");
   // $(this).parent().addClass("round");
  })

}); 






