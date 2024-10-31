@extends('layouts.init')

@section('content')

<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>{{ __('language.get_all_details') }}</h6>
                <h2>{{ __('language.online_teaching_and_learning_tools') }}</h2>
            </div>
        </div>
    </div>
</section>


<section class="meetings-page" id="meetings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="meeting-single-item">
                            <div class="thumb">
                                <div class="price">
                                    <span>$14.00</span>
                                </div>
                                <div class="date">
                                    <h6>Nov <span>12</span></h6>
                                </div>
                                <a href="{{ route('meeting_details') }}"><img src="{{ asset('images/single-meeting.jpg') }}" alt=""></a>
                            </div>
                            <div class="down-content">
                                <a href="{{ route('meeting_details') }}"><h4>{{ __('language.online_teaching_and_learning_tools') }}</h4></a>
                                <p>{{ __('language.location_address') }}</p>
                                <p class="description">
                                    {{ __('language.edu_meeting_template_description') }}
                                    <br><br>
                                    {{ __('language.template_usage_terms') }}
                                </p>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="hours">
                                            <h5>{{ __('language.hours') }}</h5>
                                            <p>{{ __('language.hours_details') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="location">
                                            <h5>{{ __('language.location') }}</h5>
                                            <p>{{ __('language.location_full_address') }}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="book now">
                                            <h5>{{ __('language.book_now') }}</h5>
                                            <p>010-020-0340<br>090-080-0760</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="share">
                                            <h5>{{ __('language.share') }}:</h5>
                                            <ul>
                                                <li><a href="#">Facebook</a>,</li>
                                                <li><a href="#">Twitter</a>,</li>
                                                <li><a href="#">Linkedin</a>,</li>
                                                <li><a href="#">Behance</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="main-button-red">
                            <a href="{{ route('meetings') }}">{{ __('language.back_to_meetings_list') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>{{ __('language.copyright') }}<br> {{ __('language.design_by') }}: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p>
    </div>
</section>


@endsection