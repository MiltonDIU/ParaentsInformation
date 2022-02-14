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
                        <p class="paragraph mb-2 aos-init aos-animate">{{ $data->content }}</p>
                        @if($data->external_link_text)
                            <a href="{{$data->external_link}}" class="btn regular_btn" >{{$data->external_link_text}}</a>
                        @endif
                    </div>
                </div>
            </div>
                @endforeach

{{--            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12" data-aos="fade-up" data-aos-delay="400">--}}
{{--                <div class="cart_main">--}}
{{--                    <div class="cart_img">--}}
{{--                        <img src="{{ url('assets/theme/images/payment-portal.jpg')}}" alt="Payment Portal">--}}
{{--                    </div>--}}
{{--                    <div class="cart_details">--}}
{{--                        <h3 class="heading_three mb-4"><a href="#" class="hover_text">Payment Portal</a></h3>--}}
{{--                        <p class="paragraph mb-2">Check your student’s account balance, make payments, view payment history or enroll in a payment plan:</p>--}}
{{--                        <a href="#" class="btn regular_btn">Payment Portal</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12" data-aos="fade-up" data-aos-delay="600">--}}
{{--                <div class="cart_main">--}}
{{--                    <div class="cart_img">--}}
{{--                        <img src="{{ url('assets/theme/images/helpdesk.jpg')}}" alt="Helpdesk Support">--}}
{{--                    </div>--}}
{{--                    <div class="cart_details">--}}
{{--                        <h3 class="heading_three mb-4"><a href="https://pd.daffodilvarsity.edu.bd/support_ticket" class="hover_text">Helpdesk Support</a></h3>--}}
{{--                        <p class="paragraph mb-2">Get connected with the Registrar Office, Departments and support offices through our trackable HelpDesk Support Ticket:</p>--}}
{{--                        <a href="https://pd.daffodilvarsity.edu.bd/support_ticket" class="btn regular_btn">Helpdesk Support</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</section>
