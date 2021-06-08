@extends('layout.app')


@section('sidebar')
    @parent
@stop

@section('content')



    </head>
    <body>

    <div class="slideshow-container">
        @foreach( $productImages as $productImage)
        <div class="mySlides ">
            <div class="numbertext">{{$imgCunt}}:Photos</div>
            <img src="{{ asset('storage/images') }}/{{$productImage}}" style="width:100%; max-height: 600px;">
            <div class="text">Caption Text</div>
            <div class="numbertext2"><a href="{{route('show-product')}}"><h1>x</h1></a></div>
        </div>
        @endforeach



        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

    </div>
    <br>


    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            // var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            // for (i = 0; i < dots.length; i++) {
            //     dots[i].className = dots[i].className.replace(" active", "");
            // }
            slides[slideIndex-1].style.display = "block";
            // dots[slideIndex-1].className += " active";
        }
    </script>


@stop
