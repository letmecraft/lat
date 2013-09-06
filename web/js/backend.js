$(document).ready(function() {

    /* -----------------------------------------------------------------------------
        Map positions
    ----------------------------------------------------------------------------- */

    $(".story_map_position .pin").css({ "left":$("input#story_pos_x").val()+"px", "top":$("input#story_pos_y").val()+"px" })

    $(".story_map_position .content").click(function (e){

        e.preventDefault();

        var posX = e.pageX - $(this).position().left - 10;
        var posY = e.pageY - $(this).position().top - 10;

        console.log(posX + "," + posY)

        $(".story_map_position .pin").css({ "left":posX+"px", "top":posY+"px" })

        $("input#story_pos_y").val(posY);
        $("input#story_pos_x").val(posX);
    });

})