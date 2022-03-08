@extends('layouts.master')
@section('content')

    <!-- ----------------------- Newsfeed start ----------------------- -->
    <section id="newsfeed">
        <div class="container">
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12">
                    <?php
                    $data = \App\Models\LinkCategory::singleCategory('13','newsfeed','0');
                    ?>

                    <div class="top_news background_radius mb-2">
                        <div class="top_news_img">
                            <img src="{{ $data->picture->getUrl() }}" alt="9th Convocation DIU">
                        </div>

                        <div class="top_news_details">
                            <h1 class="paragraph text_bold mb-2">{{$data->title}}</h1>

                            <p class="news_feed_text mb-2">{!! $data->content !!}</p>

                            <a href="{{$data->external_link}}" class="btn regular_btn" >{{$data->external_link_text}}</a>
                        </div>
                    </div>

                        <?php
                        $datas = \App\Models\LinkCategory::utilities('newsfeed','1');
                        ?>
                        @foreach($datas as $key=> $data)
                        <div class="link_box background_radius mb-2">
                            <h2 class="paragraph text_bold orange_text mb-1">{{ $data->title }}</h2>

                            <ul>
                                @foreach($data->linkCategoryLinks as $link)
                                <li class="link_space"><a href="{{ $link->link }}" class="news_feed_text hover_text">{{$link->title}}</a></li>
                                @endforeach
                            </ul>
                    </div>
                        @endforeach

                </div>

                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">



@foreach($newsLetters as $key=>$news)
                    <div class="article_main mb-2">

                        <div id="demo" class="carousel slide" data-bs-ride="carousel">
                            <!-- Indicators/dots -->
                            <div class="carousel-indicators">
                                @foreach($news->picture as $key => $media)
                                <button type="button" data-bs-target="#demo" data-bs-slide-to="{{$key}}" class="@if($key==0) active @endif"></button>
                                @endforeach
                            </div>
                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                                @foreach($news->picture as $key => $media)
                                <div class="carousel-item @if($key==0) active @endif">
                                    <img src="{{ $media->getUrl() }}" class="d-block w-100" alt="{{$news->title}}">
                                </div>
                                @endforeach
                            </div>

                            <!-- Left and right controls/icons -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>

{{--                        <div class="article_img">--}}
{{--                            <img src="{{ url('assets/theme/images/article1.jpg') }}" alt="article 1">--}}
{{--                        </div>--}}

                        <div class="article_details background_radius">
                            <h3 class="paragraph text_bold mb-2">{{$news->title}}</h3>

                            <div class="news_feed_text">

                                {!! \Illuminate\Support\Str::limit(strip_tags($news->content,400))  !!}
                                <a href="{{$news->external_link}}" class="read_more_text">{{$news->external_link_text}}</a></div>
                        </div>

                    </div>

                    @endforeach


                </div>

                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12">
                    <div class="calender">
                        <h4 class="paragraph text_bold mb-2">Calender</h4>

                        <div class="calender_main">
                            <?php
                            $data = \App\Models\ApiModel::events(5);
                            $events = (array) $data;
                            ?>
                                @foreach($events['data'] as $event)
                                    @php
                                        $day = Carbon\Carbon::createFromFormat('Y-m-d', $event->event_date)->day;
                                        $month = Carbon\Carbon::createFromFormat('Y-m-d', $event->event_date)->month;
                                        $year = Carbon\Carbon::createFromFormat('Y-m-d', $event->event_date)->year;
                                        $dateObj   = DateTime::createFromFormat('!m', $month);
                                        $monthName = $dateObj->format('M')
                                    @endphp
                             <div class="calender_box mb-2">
                                <div class="date">
                                    <div class="day">{{$day}}</div>
                                    <div class="month-year">{{$monthName}}</div>
                                    <div class="month-year">{{$year}}</div>
                                </div>
                                <div class="event_title">
                                    <p class="paragraph">{{$event->title}}</p>
                                </div>
                            </div>

                                @endforeach
                            <div class="calender_events calender_box mb-4">
                                <div class="c_event_icon">
                                    <i class="fas fa-calendar-alt"></i>
                                </div>

                                <div class="c_link event_title">
                                    <a href="#" class="paragraph hover_text">Calendar of Events</a>
                                </div>
                            </div>
                        </div>

                        <div class="resource_support">
                            <div class="resource mb-3">
                                <h4 class="paragraph text_bold mb-1">Resources</h4>
                                <a href="{{ route('newsfeed') }}" class="paragraph hover_text">A - Z Index</a>
                            </div>

                            <div class="support">
                                <div class="support_box mb-3">
                                    <h5 class="paragraph text_bold mb-1">Support</h5>
                                    <p class="paragraph">Need help? Feel free to contact us by phone or email using the information below.</p>
                                </div>

                                <div class="hotline mb-3">
                                    <p class="paragraph">Hotline Number:</p>
                                    <p class="paragraph text_bold">{{ Site::config()->site_phone_number, '+88 09617901212' }} </p>
                                </div>

                                <div class="email mb-3">
                                    <p class="paragraph">Email:</p>
                                    <p class="paragraph text_bold">{{ Site::config()->site_email, '+info@daffodilvarsity.edu.bd' }} </p>
                                </div>

                                <div class="help_desk">
                                    <p class="paragraph mb-1">Helpdesk:</p>
                                    <a href="https://pd.daffodilvarsity.edu.bd/support_ticket" class="btn regular_btn">Click Here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ----------------------- Newsfeed end ----------------------- -->


@endsection
