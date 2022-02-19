<section id="events_part" class="mg_top">
    <?php
    $data = \App\Models\ApiModel::events();
    $i=100;
    $j=0;
    ?>
    <div class="container">
        <h2 class="heading_two text_center mb-4" data-aos="fade-up" data-aos-delay="100">Events</h2>

        <div class="row">
            @php
                $events = (array) $data;
            @endphp
            @foreach($events['data'] as $event)
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12" data-aos="fade-up" data-aos-delay="{!! $i+=100 !!}">
                <div class="cart_main">
                    <div class="cart_img event_img">
                        <img src="https://daffodilvarsity.edu.bd/{{ $event->photo}}" alt="{{ $event->title}}">
                        @php
                            $day = Carbon\Carbon::createFromFormat('Y-m-d', $event->event_date)->day;
                            $month = Carbon\Carbon::createFromFormat('Y-m-d', $event->event_date)->month;
                            $year = Carbon\Carbon::createFromFormat('Y-m-d', $event->event_date)->year;
                            $dateObj   = DateTime::createFromFormat('!m', $month);
                            $monthName = $dateObj->format('M')
                        @endphp

                        <div class="event_date">
                            <div class="day">{{ $day }}</div>
                            <div class="month-year">{{ $monthName }}</div>
                            <div class="month-year">{{ $year }}</div>
                        </div>
                    </div>
                    <div class="cart_details">
                        <h3 class="heading_three mb-4"><a target="_blank"  href="https://daffodilvarsity.edu.bd/events-detail/{{$event->id}}" class="hover_text">{{ $event->title}} </a></h3>
                        <p class="paragraph mb-2">
                            {!! \Illuminate\Support\Str::limit(strip_tags($event->content,80))  !!}
                        </p>
                        <a target="_blank" href="https://daffodilvarsity.edu.bd/events-detail/{{$event->id}}" class="btn regular_btn">Learn More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
