$(document).ready(function() {
  $("#appForm").on("submit", function(e) {
    let isValid = true;

    $("input[required], textarea[required]").each(function() {
      if ($(this).val().trim() === "") {
        $(this).css("border", "2px solid red");
        isValid = false;
      } else {
        $(this).css("border", "1px solid #ccc");
      }
    });

    if (!isValid) {
      e.preventDefault();
      alert("Please fill all required fields.");
    }
  });
});
