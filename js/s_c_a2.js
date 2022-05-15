$(document).ready(function () {
  $(".editbtn").on("click", function () {
    $("#editmodal").modal("show");

    $tr = $(this).closest("tr");

    var data = $tr
      .children("td")
      .map(function () {
        return $(this).text();
      })
      .get();

    console.log(data);
    $("#an_s").val(data[0]);
  });
});
