$(document).ready(function () {
    $(".comment").click(function (event) {
        event.preventDefault();
        $("#commentmodal").modal("show");
    });
});
