<section id="{{ $html_id }}" class="mg_top">
<?php
    $data = \App\Models\LinkCategory::singleCategory($id,$page,$is_utilities);
$i=100;
?>
    <div class="container-fluid">
        <div class="row column_change">

            @if($data->image_position=='left')
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="resource_img">
                        @if($data->picture)
                            <img src="{{ $data->picture->getUrl() }}" alt="{{ $data->title }}">
                        @endif
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="resource_details_right">
                        <h2 class="heading_two mb-3" data-aos="fade-up" data-aos-delay="100">{{ $data->title }}</h2>
                        <p class="paragraph mb-4" data-aos="fade-up" data-aos-delay="200">

                            {!! \Illuminate\Support\Str::limit(strip_tags($data->content,150))  !!}

                        </p>
                        @if($data->external_link)
                        <a href="{{$data->external_link}}" class="btn regular_btn" data-aos="fade-up" data-aos-delay="300">{{$data->external_link_text}}</a>
                        @endif

                        @if(count($data->linkCategoryLinks)>0)
                            <ul class="resource_links">
                                @foreach($data->linkCategoryLinks as $link)
                                    <li class="paragraph" data-aos="fade-up" data-aos-delay="{!! $i+=100 !!}"><a target="_blank" href="{{$link->link}}">{{ $link->title }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    </div>
                </div>
            @endif
                @if($data->image_position=='right')
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="resource_details">
                        <h2 class="heading_two mb-3" data-aos="fade-up">{{ $data->title }}</h2>
                        <p class="paragraph mb-2" data-aos="fade-up" data-aos-delay="100">{!! $data->content !!}</p>
                        @if($data->external_link)
                            <a href="{{$data->external_link}}" class="btn regular_btn" data-aos="fade-up" data-aos-delay="300">{{$data->external_link_text}}</a>
                        @endif
                  @if(count($data->linkCategoryLinks)>0)
                        <ul class="resource_links">
                            @foreach($data->linkCategoryLinks as $link)
                            <li class="paragraph" data-aos="fade-up" data-aos-delay="{!! $i+=100 !!}"><a target="_blank" href="{{$link->link}}">{{ $link->title }}</a></li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="resource_img">
                        @if($data->picture)
                            <img src="{{ $data->picture->getUrl() }}" alt="{{ $data->title }}">
                        @endif
                    </div>
                </div>
                @endif
        </div>
    </div>
</section>
