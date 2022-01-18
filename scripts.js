//start -- click on picture
$('#ls-ci-ib-picture').click(function(e) {
    $('#ls-ci-ib-hidden-upload').trigger('click');
});
//end -- click on picture

//start -- show picture
function readURL(input){
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#ls-ci-ib-picture').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);

        $("#ls-ci-ib-remove-photo").css("display", "block");
    }
}
//end -- show picture

// start -- remove picture
$("#ls-ci-ib-remove-photo").click(function() {
    $('#ls-ci-ib-picture').attr('src', './profile.jpeg');
    $("#ls-ci-ib-remove-photo").css("display", "none");
});
// end -- remove picture


//start -- changePage button function
function changePage(direction) {
    if (direction == "next"){
        var currPageNumber = $("#page-info").data("page");
        var currBlockId = $(`div[data-page=${currPageNumber}]`).attr('id');
        currPageNumber++;
        var nextBlockId = $(`div[data-page=${currPageNumber}]`).attr('id');
        var wNextBlockId = $(`div[data-page=${currPageNumber+1}]`).attr('id');
        $(`#${currBlockId}`).hide();
        $(`#${nextBlockId}`).show();
        $("#bb-previous-button").show();
        $("#page-info").data("page", currPageNumber);
        if (wNextBlockId==null) {
            $("#bb-next-button").hide();
            return false;
        }
    }else if (direction=="previous"){
        var currPageNumber = $("#page-info").data("page");
        var currBlockId = $(`div[data-page=${currPageNumber}]`).attr('id');
        currPageNumber--;
        var prevBlockId = $(`div[data-page=${currPageNumber}]`).attr('id');
        var wPrevBlockId = $(`div[data-page=${currPageNumber-1}]`).attr('id');
        $(`#${currBlockId}`).hide();
        $(`#${prevBlockId}`).show();
        $("#bb-next-button").show();
        $("#page-info").data("page", currPageNumber);
        if (wPrevBlockId==null) {
            $("#bb-previous-button").hide();
            return false;
        }
    }
}


function addInPreview (input) {
    $value = $('#ls-ci-pd-fn-input').val();
    $('#rs-first-name').text($value);
}
