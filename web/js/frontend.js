$(document).ready(function() {
    

    //setFrameHeight();
    setImageRatio();

    /* 2 Text input switching

    $("input[type='text'], textarea").focus(function(e){
        if($(this).val() == $(this).attr("data-value")) $(this).val('');
    }).blur(function(e){
        if($(this).val() == '') $(this).val($(this).attr("data-value"));
    }); */

    /* 2 Newsletter */

    var Dial = {
        create : function(parent, content, w, h, posX, posY) {
            var dial = $('<div class="dial"><p>' +  content + '</p></div>');
            $(parent).append(dial);
            return dial;
        }
    }

    helpDial = Dial.create("footer form", "Inscrivez votre adresse email");
    processDial = Dial.create("footer form", "...");

    $( "footer form .button" ).click(function(e) {

        var form = $('footer form');
            $.ajax({
                type: "POST",
                beforeSend: function() {processDial.fadeIn(200);},
                url: uriNewsletter,
                data: form.serialize(),
                error: function(jqXHR, textStatus, errorThrown) {processDial.html("Désolé ! Une erreur est survenue.")},
                success: function(htmlResponse) {
                    $( processDial ).delay(3000).children("p").fadeOut(200, function(e) {
                        $( processDial ).children("p").text(htmlResponse)
                        $( processDial ).delay(50).children("p").fadeIn(200, function(e) {
                            $( processDial ).delay(50).fadeOut(200);
                        });
                    });
                }
            });
    })

    $( "footer form input[type='text']" )
        .focus(function(e) {helpDial.fadeIn(200);})
        .focusout(function(e) {helpDial.fadeOut(350);})
    

    /* 1 Slider */

    $(window).resize(function(e) {
        //setFrameHeight();
        setImageRatio();
        sly.reload();
    })

    function setImageRatio(e) {
        var h = parseInt($("#frame li.type-image").css("height")) * 1.5;
        $("#frame li.type-image").css("width", h);
    }

    function setFrameHeight(e) {
        var frameH = parseInt($("#content").css("height")) - parseInt($("footer").css("height")) - 350;
        $("#frame").css("height", frameH);
    }

    var sly = new Sly("#frame", {
            horizontal: 1,
            itemNav: 'basic',
            scrollBy: 1,
            scrollSource: $(document),
            speed: 300,
            smart: 1,
            dragHandle: 1,
            dynamicHandle: 1,
            clickBar: 1,

            prevPage: "a.to-left",
            nextPage: "a.to-right",

            keyboardNavBy: "items",

            /* Scrollbar */
            scrollBar: '#scrollbar'

        });

        sly.init();

      $("body.story .h2").click(function() {
          sly.toStart();
      })

    /* 1 Image captions */

    $("article.type-image").mouseenter(function() {
        $(".caption", this).fadeIn(200);
    }).mouseleave(function() {
        $(".caption", this).fadeOut(200);
    })

    /* -----------------------------------------------------------------------------
        Filters
    ----------------------------------------------------------------------------- */

    if($("body").attr("class") == "story") {

        var story = $(".slidee").clone();

        $(".filters a").click(function(e) {

            e.preventDefault();
            
            if(!$(this).hasClass("active")) {
            
                /* Filters state */
                $(".filters a.active").removeClass("active");
                $(this).toggleClass("active");
                var filter = $(this).attr("data-filter");

                /* Content filtering */
                $("#frame").fadeOut(150, function() {

                    if(filter == "all") {
                        $(".slidee").html($("> li", story.clone()));
                    } else {
                        $(".slidee").html($("li.type-" + filter + ", li.type-empty", story.clone()));
                    }

                    sly.reload();
                    $("#frame").fadeIn(150);
                });
            }
        })
    }


    /* Debug purpose */
    $("footer .colophon a").click(function(e){
        e.preventDefault();
        console.log("dfsd");
        sly.reload();
    });

    /* 2 List */

    $(".shortener").click(function() {

        if($("#log-list .content p:not('.shortener')").css("opacity") == 0) {
            logListOpen();
        } else {
            logListClose();
        }
    })

    function logListClose() {
        $("#log-list .content")
            .animate({bottom:176}, 350, 'easeInBack', function() {
                $(".shortener img").attr("src", "/images/log-list/log-list-shortener-off.png");
            });
        $("#log-list .content p:not('.shortener')")
            .delay(250)
            .animate({opacity:0}, 150);
    }

    function logListOpen() {
        $("#log-list .content")
            .animate({bottom:20}, 350, 'easeInBack', function() {
                $(".shortener img").attr("src", "/images/log-list/log-list-shortener.png");
            });
        $("#log-list .content p:not('.shortener')")
            .delay(250)
            .animate({opacity:1}, 150);
        
    }

    /* Journeys */

    $("#contact .expes tr").click(function(e) {
        window.open($(".file a", this).attr("href"), "_blank");
    })

})