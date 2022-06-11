var postId = 0;
var userId = 0;
var postBodyElement = null;
$(document).ready(function () {
    $(".commentbtn").click(function (event) {
        event.preventDefault();
        userId = event.target.dataset["user"];
        postId = event.target.dataset["post"];
        // var postBody = postBodyElement.textContent;
        $("#cmntmodal").modal("show");
    });

    $("#modalsave").click(function () {
        $.ajax({
            method: "POST",
            url: urlComment,
            data: {
                body: $("#body").val(),
                userId: userId,
                postId: postId,
                _token: token,
            },
        }).done(function (msg) {
            $(postBodyElement).text(msg["new-body"]);
            $("#cmntmodal").modal("hide");
        });
    });
});
