<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="TemplateMo">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="{{ asset('css/flag-icons.min.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


  <title>Edu Meeting</title>

  <!-- Bootstrap core CSS -->
  <link href={{asset("bootstrap/css/bootstrap.min.css")}} rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href={{asset("css/fontawesome.css")}}>
  <link rel="stylesheet" href={{asset("css/templatemo-edu-meeting.css")}}>
  <link rel="stylesheet" href={{asset("css/owl.css")}}>
  <link rel="stylesheet" href={{asset("css/lightbox.css")}}>
  <!--

TemplateMo 569 Edu Meeting

https://templatemo.com/tm-569-edu-meeting

-->
</head>

<body>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="{{ route('welcome') }}" class="logo">
              Edu Meeting
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="{{ route('welcome') }}">{{__('language.HOME')}}</a></li>
              <li><a href="{{ route('meetings') }}">{{__('language.MEETINGS')}}</a></li>
              <li class="scroll-to-section"><a href="#apply">{{__('language.APPLY_NOW')}}</a></li>
              <li class="has-sub">
                <a href="javascript:void(0)">{{__('language.PAGES')}}</a>
                <ul class="sub-menu">
                  <li><a href="{{ route('meetings') }}">{{ __('language.Upcoming_Meetings') }}</a></li>
                  <li><a href="{{ route('meeting_details') }}">{{ __('language.Meeting_Details') }}</a></li>
                </ul>
              </li>
              <li class="scroll-to-section"><a href="#courses">{{__('language.COURSES')}}</a></li>
              <li class="scroll-to-section"><a href="#contact">{{__('language.CONTACT_US')}}</a></li>
              @if (Route::has('login'))
              @auth
              @if (Auth::user()->role=='admin')
              <li><a href="{{ url('/home') }}">{{__('language.DASHBOARD')}}</a></li>
              <li>
                <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                  <span>{{__('language.LOGOUT')}}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </li>
              @else
              <li>
                <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                  <span>{{__('language.LOGOUT')}}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </li>
              @endif
              @else
              <li><a href="{{ route('login') }}">{{__('language.LOGIN')}}</a></li>

              @if (Route::has('register'))
              <li><a href="{{ route('register') }}">{{__('language.REGISTER')}}</a></li>
              @endif
              @endauth
              @endif
              <li>
                <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}" onclick="updateFlag('en')">
                  <img src="{{ asset('images/gb.svg') }}" width="20" height="20" alt="English">
                </a>
              </li>
              <li>
                <a href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}" onclick="updateFlag('ar')">
                  <img src="{{ asset('images/eg.svg') }}" width="20" height="20" alt="Arabic">
                </a>
              </li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  @yield('content')

  <!-- Scripts -->
  <script>
    function updateFlag(localeCode) {
      // Get the image source based on the selected locale
      const flagSrc = localeCode === 'en' ? '{{ asset("images/flags/4x3/gb.svg") }}' : '{{ asset("images/flags/4x3/eg.svg") }}';

      // Update the displayed flag in the navbar
      document.getElementById('selectedFlag').src = flagSrc;
    }
  </script>
  <!-- Bootstrap core JavaScript -->
  <script src={{asset("jquery/jquery.min.js")}}></script>
  <script src={{asset("bootstrap/js/bootstrap.bundle.min.js")}}></script>
  <script src={{asset("js/isotope.min.js")}}></script>
  <script src={{asset("js/owl-carousel.js")}}></script>
  <script src={{asset("js/lightbox.js")}}></script>
  <script src={{asset("js/tabs.js")}}></script>
  <script src={{asset("js/isotope.js")}}></script>
  <script src={{asset("js/video.js")}}></script>
  <script src={{asset("js/slick-slider.js")}}></script>
  <script src={{asset("js/custom.js")}}></script>
  <script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
      var
        direction = section.replace(/#/, ''),
        reqSection = $('.section').filter('[data-section="' + direction + '"]'),
        reqSectionPos = reqSection.offset().top - 0;

      if (isAnimate) {
        $('body, html').animate({
            scrollTop: reqSectionPos
          },
          800);
      } else {
        $('body, html').scrollTop(reqSectionPos);
      }

    };

    var checkSection = function checkSection() {
      $('.section').each(function() {
        var
          $this = $(this),
          topEdge = $this.offset().top - 80,
          bottomEdge = topEdge + $this.height(),
          wScroll = $(window).scrollTop();
        if (topEdge < wScroll && bottomEdge > wScroll) {
          var
            currentId = $this.data('section'),
            reqLink = $('a').filter('[href*=\\#' + currentId + ']');
          reqLink.closest('li').addClass('active').
          siblings().removeClass('active');
        }
      });
    };

    $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function(e) {
      e.preventDefault();
      showSection($(this).attr('href'), true);
    });

    $(window).scroll(function() {
      checkSection();
    });
  </script>
</body>

</body>

</html>