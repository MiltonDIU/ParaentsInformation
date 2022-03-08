<!-- ----------------------- main carousel start ----------------------- -->
<section id="main_carousel">
    @foreach(\App\Models\Slider::sliders($page) as $slider)
    <div class="carousel_text">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-7 col-lg-7 col-sm-10 slider-p">
                    <h1 class="heading_one mb-2" data-aos="fade-up">{{$slider->title}}</h1>
                    <p class="paragraph white_text mb-1" data-aos="fade-up" data-aos-delay="100">{!! $slider->content !!}</p>
                    <a target="_blank" href="{{$slider->link_url}}" class="btn regular_btn big_btn" data-aos="fade-up" data-aos-delay="200">{{$slider->link_text}}</a>
                </div>
            </div>
        </div>
    </div>


    <div class="owl-carousel owl-theme">



        @foreach($slider->picture as $key => $media)
            <div class="item">
                <div class="overlay"></div>
                <img src="{{ $media->getUrl() }}" alt="DIU Students Activities">
            </div>


        @endforeach

    </div>
    @endforeach
</section>
<!-- ----------------------- main carousel end ----------------------- -->

@push('style')
    <style>
        .slider-p p{color: white}
    </style>
@endpush
