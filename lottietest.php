<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #ffd571;
        }

        .vh {
            height: 100vh;
        }

        .container {
            max-width: 95%;
            margin: 0 auto;
            padding: 0 0;
        }

        .timeline-slider.slick-slider {
            display: flex;
            align-items: center;
            flex-direction: row-reverse;
            justify-content: flex-start;
            height: 100vh;
            padding: 0 5rem;
            background-color: #181818;
        }

        .timeline-slider.slick-slider .slick-list {
            width: 90%;
        }

        .timeline-slider.slick-vertical .slick-slide.item {
            height: 100vh;
            padding: 2.5rem 0 2.5rem 0;
        }

        .timeline-slider img {
            max-width: 100%;
            height: auto;
            margin-bottom: 1rem;
        }

        .timeline-slider h4 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 1.5rem;
            line-height: 1.5;
            color: aquamarine;
            max-width: 60%;
            margin: 1rem 0;
        }

        .timeline-slider .slick-dots {
            display: flex;
            justify-content: space-evenly;
            align-items: flex-end;
            flex-direction: column;
            margin-right: 5%;
            top: 0;
            left: 0;
            bottom: auto;
            width: 10%;
            height: 100%;
            border: solid;
            border-top: 0;
            border-bottom: 0;
            border-left: 0;
            border-image: linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%, rgba(226, 226, 226, 1) 48%, rgba(255, 255, 255, 0) 100%);
            border-image-slice: 1;
            padding-right: 1.6rem;
            position: relative;
        }

        .timeline-slider .slick-dots li {
            display: block;
            height: 100%;
            width: 100%;
        }

        .timeline-slider .slick-dots li button {
            font-size: 2rem;
            color: #ffd571;
            height: 100%;
            width: 100%;
        }


        .timeline-slider .slick-dots li button::before {
            content: none;
        }
    </style>
</head>

<body>
    <div class="vh"></div>

    <div class="container">
        <div class="timeline-slider">
            <div class="item">
                <img class="timeline-banner desktop-img" src="https://www.outfittersstores.com/wp-content/uploads/2020/12/outfitters-2003-timeline-banner.png" alt="Outfitters 2003">
                <h4>Outfitters is born with the vision to uplift the western fashion industry in Pakistan</h4>
            </div>

            <div class="item">
                <img class="timeline-banner desktop-img" src="https://www.outfittersstores.com/wp-content/uploads/2020/12/outfitters-2004-timeline-banner.png" alt="Outfitters 2004 - multi-city brand">
                <h4>Outfitters is a multi-city brand</h4>
            </div>

            <div class="item">
                <img class="timeline-banner desktop-img" src="https://www.outfittersstores.com/wp-content/uploads/2021/03/outfitters-2005-timeline-banner-v2.png" alt="Outfitters 2005 - Womenswear">
                <h4>The first collection for Outfitters Womenswear launches in stores</h4>
            </div>

            <div class="item">
                <img class="timeline-banner desktop-img" src="https://www.outfittersstores.com/wp-content/uploads/2020/12/outfitters-2008-timeline-banner.png" alt="Outfitters 2008 - Outfitters">
                <h4>Outfitters Juniors is introduced, a trendy fashion line for kids</h4>
            </div>

            <div class="item">
                <img class="timeline-banner desktop-img" src="https://www.outfittersstores.com/wp-content/uploads/2020/12/outfitters-2013-timeline-desktop.jpg" alt="Outfitters 2013 - Ethnic">
                <h4>Outfitters Stores becomes an umbrella company and launches the much awaited eastern wear brand, Ethnic, Outfitters</h4>
            </div>

            <div class="item">
                <img class="timeline-banner desktop-img" src="https://www.outfittersstores.com/wp-content/uploads/2020/12/outfitters-2020-timeline-banner.png" alt="Outfitters 2020 - Bespoke Studio">
                <h4>Outfitters launches its largest flagship store in Lahore with Pakistan’s first Bespoke Studio</h4>
            </div>
        </div>
    </div>

    <div class="vh"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="text/javascript">
        const slider = jQuery(".timeline-slider");
        slider.slick({
            dots: true,
            arrows: false,
            infinite: false,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            vertical: true,
            verticalSwiping: true
        });
        slider.on('wheel', (function(e) {
            e.preventDefault();
            if (e.originalEvent.deltaY < 0) {
                $(this).slick('slickPrev');
            } else {
                $(this).slick('slickNext');
            }
        }));

        gsap.registerPlugin(ScrollTrigger);
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: ".container",
                duration: 1.5,
                pin: true,
                scrub: true,
                start: "top top",
                end: "+=3000",

            }
        });

        tl.from(
                "[data-slick-index='0'] ", {
                    opacity: 1,
                    duration: 10,
                },
                "+=1"
            )

            .to(
                "[data-slick-index='5'] ", {
                    opacity: 1,
                    duration: 10,
                    ease: "power1"
                },
                "+=10"
            )
    </script>
</body>

</html>