@extends('layouts.init')

@section('content')

<section class="heading-page header-text" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6>{{ __('language.upcoming_meetings_description') }}</h6>
                <h2>{{ __('language.upcoming_meetings') }}</h2>
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
                        <div class="filters">
                            <ul>
                                <li data-filter="*" class="active">{{ __('language.all_meetings') }}</li>
                                <li data-filter=".soon">{{ __('language.soon') }}</li>
                                <li data-filter=".imp">{{ __('language.important') }}</li>
                                <li data-filter=".att">{{ __('language.attractive') }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row grid">
                            <div class="col-lg-4 templatemo-item-col all soon">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                            <span>$14.00</span>
                                        </div>
                                        <a href="{{ route('meeting_details') }}"><img src={{ asset("images/meeting-01.jpg") }} alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Nov <span>12</span></h6>
                                        </div>
                                        <a href="{{ route('meeting_details') }}"><h4>{{ __('language.new_lecturers_meeting') }}</h4></a>
                                        <p>{{ __('language.meeting_description') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 templatemo-item-col all imp">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                            <span>$22.00</span>
                                        </div>
                                        <a href="{{ route('meeting_details') }}"><img src={{ asset("images/meeting-02.jpg") }} alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Nov <span>14</span></h6>
                                        </div>
                                        <a href="{{ route('meeting_details') }}"><h4>{{ __('language.online_teaching_techniques') }}</h4></a>
                                        <p>{{ __('language.meeting_description') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 templatemo-item-col all soon">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                            <span>$24.00</span>
                                        </div>
                                        <a href="{{ route('meeting_details') }}"><img src={{ asset("images/meeting-03.jpg") }} alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Nov <span>16</span></h6>
                                        </div>
                                        <a href="{{ route('meeting_details') }}"><h4>{{ __('language.network_teaching_concept') }}</h4></a>
                                        <p>{{ __('language.meeting_description') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 templatemo-item-col all att">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                            <span>$32.00</span>
                                        </div>
                                        <a href="{{ route('meeting_details') }}"><img src={{ asset("images/meeting-04.jpg") }} alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Nov <span>18</span></h6>
                                        </div>
                                        <a href="{{ route('meeting_details') }}"><h4>{{ __('language.online_teaching_tools') }}</h4></a>
                                        <p>{{ __('language.meeting_description') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 templatemo-item-col all att">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                            <span>$34.00</span>
                                        </div>
                                        <a href="{{ route('meeting_details') }}"><img src={{ asset("images/meeting-02.jpg") }} alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Nov <span>22</span></h6>
                                        </div>
                                        <a href="{{ route('meeting_details') }}"><h4>{{ __('language.new_teaching_techniques') }}</h4></a>
                                        <p>{{ __('language.meeting_description') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 templatemo-item-col all imp">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                            <span>$45.00</span>
                                        </div>
                                        <a href="{{ route('meeting_details') }}"><img src={{ asset("images/meeting-03.jpg") }} alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Nov <span>24</span></h6>
                                        </div>
                                        <a href="{{ route('meeting_details') }}"><h4>{{ __('language.technology_conference') }}</h4></a>
                                        <p>{{ __('language.template_description') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 templatemo-item-col all imp att">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                            <span>$52.00</span>
                                        </div>
                                        <a href="{{ route('meeting_details') }}"><img src={{ asset("images/meeting-01.jpg") }} alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Nov <span>27</span></h6>
                                        </div>
                                        <a href="{{ route('meeting_details') }}"><h4>{{ __('language.online_teaching_techniques') }}</h4></a>
                                        <p>{{ __('language.meeting_description') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 templatemo-item-col all soon imp">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                            <span>$64.00</span>
                                        </div>
                                        <a href="{{ route('meeting_details') }}"><img src={{ asset("images/meeting-02.jpg") }} alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Nov <span>28</span></h6>
                                        </div>
                                        <a href="{{ route('meeting_details') }}"><h4>{{ __('language.instant_lecture_design') }}</h4></a>
                                        <p>{{ __('language.meeting_description') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 templatemo-item-col all att soon">
                                <div class="meeting-item">
                                    <div class="thumb">
                                        <div class="price">
                                            <span>$74.00</span>
                                        </div>
                                        <a href="{{ route('meeting_details') }}"><img src={{ asset("images/meeting-03.jpg") }} alt=""></a>
                                    </div>
                                    <div class="down-content">
                                        <div class="date">
                                            <h6>Nov <span>30</span></h6>
                                        </div>
                                        <a href="{{ route('meeting_details') }}"><h4>{{ __('language.online_social_networking') }}</h4></a>
                                        <p>{{ __('language.meeting_description') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="pagination">
                            <ul>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved. 
            <br>Design: <a href="https://templatemo.com/page/1" target="_parent" title="website templates">TemplateMo</a></p>
    </div>
</section>


@endsection