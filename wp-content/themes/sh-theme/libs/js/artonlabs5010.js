$(document).ready(function () {

    // nav icon builder
    $(".nav").find("a[title='Beranda']").html("<i class='glyphicon glyphicon-home'></i> Beranda");
    $(".nav").find("a[title='Profil']").html("<i class='fa fa-university fa-lg'></i> Profil");
    $(".nav").find("a[title='Berita']").html("<i class='glyphicon glyphicon-globe'></i> Berita");
    $(".nav").find("a[title='Pengumuman']").html("<i class='fa fa-newspaper-o fa-lg'></i> Pengumuman");
    $(".nav").find("a[title='Galeri']").html("<i class='fa fa-picture-o fa-lg'></i> Galeri");
    $(".nav").find("a[title='Kontak']").html("<i class='fa fa-phone fa-lg'></i> Kontak");
    $(".nav").find("a[title='Tenaga Pengajar']").html("<i class='fa fa-user fa-lg'></i> Tenaga Pengajar");

    // slideshow height optimalization
    if ($(window).height() < $(window).width()) {
        $("#home-slideshow").css("height", ( $(window).height() - $(".navbar").height()));
    }


	$(window).scroll(function(e) {
       if ($(this).scrollTop() > 150) {
           if ($(".navbar").hasClass("navbar-mini") == false) {
               $(".top-bar").hide();
               $(".navbar").addClass("navbar-mini");
           }
       } else {
           if ($(".navbar").hasClass("navbar-mini")) {
               $(".top-bar").show();
               $(".navbar").removeClass("navbar-mini");
           }
       }
    });


    function  Shuffle(o) {
    	for(var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
    	return o[0];
    };


    var slide_duration = 21000;
    var slide_dirs = ["left", "right", "right", "left"];
    var slide_directions = ["up", "down", "left", "right"];
    var slide_effects = ["slide", "fade"]
    function slideshow() {
        $(".animation").hide();
        $("#home-slideshow > .slide-content:first")
            .show("slide", {duration: 475, direction: Shuffle(slide_dirs)}, function () {
                $(this).find(".animation").each(function (index, element) {
                    $(element).delay(300 * index).show(Shuffle(slide_effects),
                        {duration: 750, direction: Shuffle(slide_directions)});
                })
            })
            .delay(slide_duration)
            .hide("highlight")
            .next()
            .end()
            .appendTo("#home-slideshow")
    }
    $(".slide-content").hide();
    slideshow();
    setInterval(slideshow, slide_duration);

    $('#search-btn').click(function(event) {
        $("#search-form")
            .slideDown()
            .find("input")
            .focus();
    });

    $('#close-search').click(function(event) {
        $("#search-form").slideUp();
    });

    $(".showup-menu").click(function(event) {
        event.preventDefault();
        var hrefTarget = $(this).attr("href");
        $(".showup-content").hide();
        $(hrefTarget).fadeIn();
    });

    $("#padding-top").height($(".navbar").height());

    // create post gallery
    var create_post_gallery = function(column_items, column_size) {
        if (column_items == 1) {
            $("<div></div>", {'id': 'images-phd'}).prependTo('.post-content');
        } else {
            $("<div></div>", {'id': 'images-phd'}).appendTo('.post-content');
        }
        var columns = [];
        var row     = [];
        $(".post-content").find("img").each(function(index, element) {
            if (index % column_items == 0 && index > 0) {
                columns.push(row);
                row = [];
            }
            row.push(element);
            $(element).parents('a').remove();
        });
        columns.push(row);
        $.each(columns, function(index, column) {
            var idx = 'row-' + index;
            $("<div></div>", {'id': idx, 'class': 'row'}).appendTo('#images-phd');
            $.each(column, function(subindex, row) {
                $('<div></div>', {'class': 'image-col col-md-' + column_size})
                    .append(row)
                    .appendTo('#' + idx);
            });
        });

        $('#images-phd').find('img').click(function (event){
            event.preventDefault();
            var images_viewer = $('<div></div>', {'id': 'images-viewer'}).html(this.outerHTML);
            images_viewer.appendTo('body');
            images_viewer.click(function (event) {
                event.preventDefault();
                $(this).remove();
            });
        });

    }

    function calculate_post_gallery() {
        if (! $('.post-layout').length ) {
            return;
        }
        var column_items = 4;
        var column_size  = 3;
        var post_images  = $(".post-content").find("img").length;
        if (post_images == 1) {
            column_items = 1;
            column_size  = 12;
        } else if (post_images == 2) {
            column_items = 2;
            column_size  = 6;
        } else if (post_images == 3) {
            column_items = 3;
            column_size  = 4;
        } else if (post_images == 6) {
            column_items = 5;
            column_size  = 2;
        } else if (post_images == 12) {
            column_items = 12;
            column_size  = 1;
        }
        create_post_gallery(column_items, column_size);
    }
    calculate_post_gallery();

})
