<section id="utilities_part" class="mg_top">

    <div class="container">
        <h2 class="heading_two text_center mb-4" data-aos="fade-up" data-aos-delay="100">Utilities</h2>

        <div class="row">

            <?php
            $datas = \App\Models\LinkCategory::utilities($page,$is_utilities);
            $i=100;
            ?>
            @foreach($datas as $data)
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12" data-aos="fade-up" data-aos-delay="200">
                <div class="cart_main">
                    <div class="cart_img">
                        <img src="{{ $data->picture->getUrl() }}" alt="{{ $data->title }}">
                    </div>
                    <div class="cart_details">
                        <h3 class="heading_three mb-4"><a href="https://hall.daffodilvarsity.edu.bd/" class="hover_text">{{ $data->title }}</a></h3>
                        <p class="paragraph mb-2 aos-init aos-animate">
                            {!! \Illuminate\Support\Str::limit(strip_tags($data->content,150))  !!}
                        </p>
                        @if($data->external_link_text)
                            <a href="{{$data->external_link}}" class="btn regular_btn" >{{$data->external_link_text}}</a>
                        @endif
                    </div>
                </div>
            </div>
                @endforeach
        </div>
    </div>
</section>
