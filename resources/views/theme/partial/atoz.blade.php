<section id="index-part" data-aos="fade-up" data-aos-delay="100">
        <?php
        $data = \App\Models\LinkCategory::singleCategory($id,$page,$is_utilities);
        $i=100;
        ?>
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8 col-sm-12 d_center">
                <p class="paragraph">{{ $data->content }}</p>

                <a href="{{ route('aToZ') }}" class="btn regular_btn big_btn">{{ $data->external_link_text }}</a>
            </div>
        </div>
    </div>
</section>
