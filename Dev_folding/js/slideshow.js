$("#slideshow > div:gt(0)").hide();

        // fade out current slide (first), fade in next slide and move first slide to end
        var nextSlide = function() { 
            $("#slideshow > div:first")
            .fadeOut(1000)
            .next()
            .fadeIn(0)
            .end()
            .appendTo("#slideshow");
        }

        var nextSlideTimer = setInterval(nextSlide,  5000);

        // fade out current slide (first) and move last slide to top and fade in
        $("#prev").click(function() {
            clearInterval(nextSlideTimer);

            $("#slideshow > div:first")
            .fadeOut(1000);
            $("#slideshow > div:last")
            .fadeIn(1000)
            .prependTo("#slideshow");

            nextSlideTimer = setInterval(nextSlide, 5000)
            setTimeout(nextSlideTimer, 5000)
        });

        $("#next").click(function() {
            clearInterval(nextSlideTimer);

            $("#slideshow > div:first")
            .fadeOut(1000)
            .next()
            .fadeIn(1000)
            .end()
            .appendTo("#slideshow");

            nextSlideTimer = setInterval(nextSlide, 5000)
            setTimeout(nextSlideTimer, 5000)
        });