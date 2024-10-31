@extends('layouts.init')
@section('content')
<!-- ***** Main Banner Area Start ***** -->
<section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
        <source src={{asset("images/course-video.mp4")}} type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="caption">
                        <h6>{{ __('language.hello_students') }}</h6>
                        <h2>{{ __('language.welcome_to_education') }}</h2>
                        <p>{!! __('language.description2') !!}</p>
                        <div class="main-button-red">
                            <div class="scroll-to-section"><a href="#contact">{{ __('language.join_us_now') }}</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  <!-- ***** Main Banner Area End ***** -->
  <section class="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-service-item owl-carousel">
                    
                    <div class="item">
                        <div class="icon">
                            <img src={{asset("images/service-icon-01.png")}} alt="">
                        </div>
                        <div class="down-content">
                            <h4>{{ __('language.best_education') }}</h4>
                            <p>{{ __('language.best_education_description') }}</p>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="icon">
                            <img src={{asset("images/service-icon-02.png")}} alt="">
                        </div>
                        <div class="down-content">
                            <h4>{{ __('language.best_teachers') }}</h4>
                            <p>{{ __('language.best_teachers_description') }}</p>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="icon">
                            <img src={{asset("images/service-icon-03.png")}} alt="">
                        </div>
                        <div class="down-content">
                            <h4>{{ __('language.best_students') }}</h4>
                            <p>{{ __('language.best_students_description') }}</p>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="icon">
                            <img src={{asset("images/service-icon-02.png")}} alt="">
                        </div>
                        <div class="down-content">
                            <h4>{{ __('language.online_meeting') }}</h4>
                            <p>{{ __('language.online_meeting_description') }}</p>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="icon">
                            <img src={{asset("images/service-icon-03.png")}} alt="">
                        </div>
                        <div class="down-content">
                            <h4>{{ __('language.best_networking') }}</h4>
                            <p>{{ __('language.best_networking_description') }}</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>


<section class="upcoming-meetings" id="meetings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>{{ __('language.upcoming_meetings') }}</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories">
                    <h4>{{ __('language.meeting_categories') }}</h4>
                    <ul>
                        <li><a href="#">{{ __('language.meeting_category_1') }}</a></li>
                        <li><a href="#">{{ __('language.meeting_category_2') }}</a></li>
                        <li><a href="#">{{ __('language.meeting_category_3') }}</a></li>
                        <li><a href="#">{{ __('language.meeting_category_4') }}</a></li>
                        <li><a href="#">{{ __('language.meeting_category_5') }}</a></li>
                    </ul>
                    <div class="main-button-red">
                        <a href="meetings.html">{{ __('language.all_upcoming_meetings') }}</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="meeting-item">
                            <div class="thumb">
                                <div class="price">
                                    <span>$22.00</span>
                                </div>
                                <a href="meeting-details.html"><img src="{{ asset('images/meeting-01.jpg') }}" alt="{{ __('language.new_lecturer_meeting') }}"></a>
                            </div>
                            <div class="down-content">
                                <div class="date">
                                    <h6>Nov <span>10</span></h6>
                                </div>
                                <a href="meeting-details.html"><h4>{{ __('language.meeting_1') }}</h4></a>
                                <p>{{ __('language.meeting_1_description') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="meeting-item">
                            <div class="thumb">
                                <div class="price">
                                    <span>$36.00</span>
                                </div>
                                <a href="meeting-details.html"><img src="{{ asset('images/meeting-02.jpg') }}" alt="{{ __('language.online_teaching') }}"></a>
                            </div>
                            <div class="down-content">
                                <div class="date">
                                    <h6>Nov <span>24</span></h6>
                                </div>
                                <a href="meeting-details.html"><h4>{{ __('language.meeting_2') }}</h4></a>
                                <p>{{ __('language.meeting_2_description') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="meeting-item">
                            <div class="thumb">
                                <div class="price">
                                    <span>$14.00</span>
                                </div>
                                <a href="meeting-details.html"><img src="{{ asset('images/meeting-03.jpg') }}" alt="{{ __('language.higher_education') }}"></a>
                            </div>
                            <div class="down-content">
                                <div class="date">
                                    <h6>Nov <span>26</span></h6>
                                </div>
                                <a href="meeting-details.html"><h4>{{ __('language.meeting_3') }}</h4></a>
                                <p>{{ __('language.meeting_3_description') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="meeting-item">
                            <div class="thumb">
                                <div class="price">
                                    <span>$48.00</span>
                                </div>
                                <a href="meeting-details.html"><img src="{{ asset('images/meeting-04.jpg') }}" alt="{{ __('language.student_training') }}"></a>
                            </div>
                            <div class="down-content">
                                <div class="date">
                                    <h6>Nov <span>30</span></h6>
                                </div>
                                <a href="meeting-details.html"><h4>{{ __('language.meeting_4') }}</h4></a>
                                <p>{{ __('language.meeting_4_description') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="apply-now" id="apply">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="item">
                            <h3>{{ __('language.apply_for_bachelor_degree') }}</h3>
                            <p>{{ __('language.apply_description_1') }}</p>
                            <div class="main-button-red">
                                <div class="scroll-to-section"><a href="#contact">{{ __('language.join_us_now') }}</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="item">
                            <h3>{{ __('language.apply_for_bachelor_degree') }}</h3>
                            <p>{{ __('language.apply_description_2') }}</p>
                            <div class="main-button-yellow">
                                <div class="scroll-to-section"><a href="#contact">{{ __('language.join_us_now') }}</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accordions is-first-expanded">
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>{{ __('language.about_template') }}</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>{{ __('language.latest_templates_info') }} <a rel="nofollow" href="https://www.toocss.com/" target="_blank">{{ __('language.too_css_website') }}</a>. {{ __('language.contact_form_info') }} <a href="https://templatemo.com/contact" target="_parent">{{ __('language.our_contact_page') }}</a> {{ __('language.for_more_info') }}.</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>{{ __('language.bootstrap_layout') }}</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>{{ __('language.bootstrap_description_1') }}<br><br>
                                {{ __('language.bootstrap_description_2') }}</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion">
                        <div class="accordion-head">
                            <span>{{ __('language.tell_your_friends') }}</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>{{ __('language.tell_friends_description_1') }}<br><br>
                                {{ __('language.tell_friends_description_2') }}</p>
                            </div>
                        </div>
                    </article>
                    <article class="accordion last-accordion">
                        <div class="accordion-head">
                            <span>{{ __('language.share_with_colleagues') }}</span>
                            <span class="icon">
                                <i class="icon fa fa-chevron-right"></i>
                            </span>
                        </div>
                        <div class="accordion-body">
                            <div class="content">
                                <p>{{ __('language.share_colleagues_description_1') }}<br><br>
                                {{ __('language.share_colleagues_description_2') }}</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="our-courses" id="courses">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>{{ __('language.our_popular_courses') }}</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="owl-courses-item owl-carousel">
                    <div class="item">
                        <img src="{{ asset('images/course-01.jpg') }}" alt="الدورة الأولى">
                        <div class="down-content">
                            <h4>{{ __('language.course_1_title') }}</h4>
                            <div class="info">
                                <div class="row">
                                    <div class="col-8">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <span>{{ __('language.course_1_price') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/course-02.jpg') }}" alt="الدورة الثانية">
                        <div class="down-content">
                            <h4>{{ __('language.course_2_title') }}</h4>
                            <div class="info">
                                <div class="row">
                                    <div class="col-8">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <span>{{ __('language.course_2_price') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/course-03.jpg') }}" alt="الدورة الثالثة">
                        <div class="down-content">
                            <h4>{{ __('language.course_3_title') }}</h4>
                            <div class="info">
                                <div class="row">
                                    <div class="col-8">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <span>{{ __('language.course_3_price') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/course-04.jpg') }}" alt="الدورة الرابعة">
                        <div class="down-content">
                            <h4>{{ __('language.course_4_title') }}</h4>
                            <div class="info">
                                <div class="row">
                                    <div class="col-8">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <span>{{ __('language.course_4_price') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/course-01.jpg') }}" alt="الدورة الخامسة">
                        <div class="down-content">
                            <h4>{{ __('language.course_5_title') }}</h4>
                            <div class="info">
                                <div class="row">
                                    <div class="col-8">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <span>{{ __('language.course_5_price') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/course-02.jpg') }}" alt="الدورة السادسة">
                        <div class="down-content">
                            <h4>{{ __('language.course_6_title') }}</h4>
                            <div class="info">
                                <div class="row">
                                    <div class="col-8">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <span>{{ __('language.course_6_price') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/course-03.jpg') }}" alt="الدورة السابعة">
                        <div class="down-content">
                            <h4>{{ __('language.course_7_title') }}</h4>
                            <div class="info">
                                <div class="row">
                                    <div class="col-8">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <span>{{ __('language.course_7_price') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/course-04.jpg') }}" alt="الدورة الثامنة">
                        <div class="down-content">
                            <h4>{{ __('language.course_8_title') }}</h4>
                            <div class="info">
                                <div class="row">
                                    <div class="col-8">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <span>{{ __('language.course_8_price') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/course-01.jpg') }}" alt="الدورة التاسعة">
                        <div class="down-content">
                            <h4>{{ __('language.course_9_title') }}</h4>
                            <div class="info">
                                <div class="row">
                                    <div class="col-8">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <span>{{ __('language.course_9_price') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/course-02.jpg') }}" alt="الدورة العاشرة">
                        <div class="down-content">
                            <h4>{{ __('language.course_10_title') }}</h4>
                            <div class="info">
                                <div class="row">
                                    <div class="col-8">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <span>{{ __('language.course_10_price') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/course-03.jpg') }}" alt="الدورة الحادية عشر">
                        <div class="down-content">
                            <h4>{{ __('language.course_11_title') }}</h4>
                            <div class="info">
                                <div class="row">
                                    <div class="col-8">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <span>{{ __('language.course_11_price') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/course-04.jpg') }}" alt="الدورة الثانية عشر">
                        <div class="down-content">
                            <h4>{{ __('language.course_12_title') }}</h4>
                            <div class="info">
                                <div class="row">
                                    <div class="col-8">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                        <span>{{ __('language.course_12_price') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="our-facts">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>{{ __('language.facts_about_university') }}</h2>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="count-area-content percentage">
                                    <div class="count-digit">94</div>
                                    <div class="count-title">{{ __('language.successed_students') }}</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="count-area-content">
                                    <div class="count-digit">126</div>
                                    <div class="count-title">{{ __('language.current_teachers') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="count-area-content new-students">
                                    <div class="count-digit">2345</div>
                                    <div class="count-title">{{ __('language.new_students') }}</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="count-area-content">
                                    <div class="count-digit">32</div>
                                    <div class="count-title">{{ __('language.awards') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="video">
                    <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank"><img src={{asset("images/play-icon.png")}} alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>

  
<section class="contact-us" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 align-self-center">
                <div class="row">
                    <div class="col-lg-12">
                        <form id="contact" method="post" action={{ route('messages.new') }} enctype="multipart/form-data">
                            @csrf 
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>{{ __('language.get_in_touch') }}</h2>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="{{ __('language.your_name') }}*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="{{ __('language.your_email') }}..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4">
                                    <fieldset>
                                        <input name="subject" type="text" id="subject" placeholder="{{ __('language.subject') }}*" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input name="message" type="text" class="form-control" id="message" placeholder="{{ __('language.your_message') }}..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="button">{{ __('language.send_message_now') }}</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="right-info">
                    <ul>
                        <li>
                            <h6>{{ __('language.phone_number') }}</h6>
                            <span>012-036-76371</span>
                        </li>
                        <li>
                            <h6>{{ __('language.email_address') }}</h6>
                            <span>mostafa012f@gmail.com</span>
                        </li>
                        <li>
                            <h6>{{ __('language.street_address') }}</h6>
                            <span>Al-Zagazig, Sharkia, Egypt</span>
                        </li>
                        <li>
                            <h6>{{ __('language.website_url') }}</h6>
                            <span>www.meeting.edu</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>Copyright © 2024 Edu Meeting Co., Ltd. {{ __('language.all_rights_reserved') }}</p>
    </div>
</section>

@endsection