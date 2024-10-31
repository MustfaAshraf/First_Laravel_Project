@extends('layouts.app')

@section('content')
<!-- SIDEBAR -->
<input type="checkbox" class="menu__checkbox" id="sideview-crawl">
        <div class="side-view">
            <nav class="admin-view__menu">
                <div class="admin-view__header">
                    <h3 class="company-name">
                        <span>{{__('language.DASHBOARD')}}</span>
                    </h3>
                    <div class="menu-icon">
                        <label for="sideview-crawl" class="menu-bar">
                            <svg>
                                <use xlink:href={{ asset('icons.svg#icon-menu')}}></use>
                            </svg>
                        </label>
                    </div>
                </div>
                <ul class="side-nav">
                    <li class="side-nav__active">
                        <a href="#">
                            <svg>
                                <use xlink:href={{ asset('icons.svg#icon-home')}}></use>
                            </svg>
                            <span>{{__('language.HOME2')}}</span>
                        </a>
                    </li>
                    <li class="side-nav__products">
                        <a href="#">
                            <svg>
                                <use xlink:href={{ asset('icons.svg#icon-user')}}></use>
                            </svg>
                            <span>{{__('language.USERS')}}</span>
                        </a>
                    </li>
                    <li class="side-nav__users">
                        <a href="#">
                            <svg>
                            <use xlink:href={{ asset('icons.svg#icon-package')}}></use>
                            </svg>
                            <span>{{__('language.CATEGORIES')}}</span>
                        </a>
                    </li>
                    <li class="side-nav__orders">
                        <a href="#">
                            <svg>
                                <use xlink:href={{ asset('icons.svg#icon-briefcase')}}></use>
                            </svg>
                            <span>{{__('language.COURSES2')}}</span>
                        </a>
                    </li>
                    <li class="side-nav__account">
                        <a href="#">
                            <svg>
                                <use xlink:href={{ asset('icons.svg#icon-calendar')}}></use>
                            </svg>
                            <span>{{__('language.MEETINGS2')}}</span>
                        </a>
                    </li>
                    <li class="side-nav__messages">
                        <a href="#">
                            <svg>
                                <use xlink:href={{ asset('icons.svg#icon-message-circle')}}></use>
                            </svg>
                            <span>{{__('language.MESSAGES')}}</span>
                        </a>
                    </li>
                    <li class="side-nav__orders">
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            <svg>
                                <use xlink:href={{ asset('icons.svg#icon-log-out')}}></use>
                            </svg>
                            <span>{{__('language.LOGOUT2')}}</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>

            <footer class="footer">
            </footer>
        </div>

        <!-- MAIN --->
        <main class="main main-content">
            <div class="header">
                <h1>{{__('language.WELCOME_BACK,')}} {{Auth::user()->name}}</h1>
            </div>
            
            <div class="overview-cards">
                <div class="card product-card mb-5">
                    <div class="title">
                        <h2 class="text-center">{{__('language.USERS')}}</h2>
                    </div>
                    <span class="content product-content">
                        <svg>
                            <use xlink:href={{ asset('icons.svg#icon-user')}}></use>
                        </svg>
                        <div class="number">
                        <p>{{$users->count()}}</p>
                        </div>
                    </span>
                </div>
                <div class="categories">
                    <div class="card user-card">
                        <div class="title">
                            <h2 class="text-center">{{__('language.CATEGORIES')}}</h2>
                        </div>
                        <span class="content user-content">
                            <svg>
                                <use xlink:href={{ asset('icons.svg#icon-package')}}></use>
                            </svg>
                            <div class="number">
                            <p>{{$categories->count()}}</p>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="courses">
                    <div class="card order-card">
                        <div class="title">
                            <h2 class="text-center">{{__('language.COURSES2')}}</h2>
                        </div>
                        <span class="content order-content">
                            <svg>
                                <use xlink:href={{ asset('icons.svg#icon-briefcase')}}></use>
                            </svg>
                            <div class="number">
                            <p>{{$courses->count()}}</p>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="meeting">
                    <div class="card">
                        <div class="title">
                            <h2 class="text-center">{{__('language.MEETINGS2')}}</h2>
                        </div>
                        <span class="content order-content">
                            <svg>
                                <use xlink:href={{ asset('icons.svg#icon-calendar')}}></use>
                            </svg>
                            <div class="number">
                            <p>{{$meetings->count()}}</p>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="message">
                    <div class="card">
                        <div class="title">
                            <h2 class="text-center">{{__('language.MESSAGES')}}</h2>
                        </div>
                        <span class="content order-content">
                            <svg>
                                <use xlink:href={{ asset('icons.svg#icon-message-circle')}}></use>
                            </svg>
                            <div class="number">
                            <p>{{$messages->count()}}</p>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
        </main>

        <!-- Users Section -->
        <section class="product-section">
            <div class="header">
                <h1>{{__('language.USERS')}}</h1>
            </div>
            
            <div class="product--new">
                <a>
                    <button class="btn btn--new">{{__('language.NEW_USER')}}</button>
                </a>
            </div>

            @if (session('message'))
                <h4 class="alert alert-success text-center">{{session('message')}}</h4>
            @endif

            <div class="container product-container">
                <div class="products">
                    <div class="products-keys">
                        <div class="keys product-id">
                            ID
                        </div>
                        <div class="keys product-name">
                            {{__('language.NAME')}}
                        </div>
                        <div class="keys product-description">
                            {{__('language.EMAIL')}}
                        </div>
                        <div class="keys product-action_value">
                            {{__('language.ACTIONS')}}
                        </div>
                    </div>
                    @foreach ($users as $item)
                    <div class="products-values">
                        <div class="values product-id_value">
                            {{$item->id}}
                        </div>
                        <div class="values product-name_value">
                            {{$item->name}}
                        </div>
                        <div class="values product-description_value">
                            {{$item->email}}
                        </div>
                        <div class="values product-action_value">
                            <a href="{{ route('users.update',$item->id) }}">
                                <svg>
                                    <use xlink:href={{ asset('icons.svg#icon-edit')}}></use>
                                </svg>
                            </a>
                            <a href="{{ route('users.delete',$item->id) }}">
                                <svg>
                                    <use xlink:href={{ asset('icons.svg#icon-delete')}}></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Categories Section -->
        <section class="user-section">
            <div class="header">
                <h1>{{__('language.CATEGORIES')}}</h1>
            </div>

            <div class="user--new">
                <a>
                    <button class="btn btn--new">{{__('language.NEW_CATEGORY')}}</button>
                </a>
            </div>

            @if (session('category_message'))
                <h4 class="alert alert-success text-center">{{session('category_message')}}</h4>
            @endif

            <div class="container user-container">
                <div class="users">
                    <div class="users-keys">
                        <div class="keys user-id">
                            ID
                        </div>
                        <div class="keys user-name">
                            {{__('language.TITLE3')}}
                        </div>
                        <div class="keys user-email">
                            {{__('language.DESCRIPTION3')}}
                        </div>
                        <div class="keys user-action_value">
                            {{__('language.ACTIONS')}}
                        </div>
                    </div>
                    @foreach ($categories as $item)
                    <div class="users-values">
                        <div class="values user-id_value">
                            {{$item->id}}
                        </div>
                        <div class="values user-name_value">
                            {{$item->title}}
                        </div>
                        <div class="values user-email_value">
                            {{$item->description}}
                        </div>
                        <div class="values user-action_value">
                            <a href="{{ route('categories.update' , $item->id) }}">
                                <svg>
                                    <use xlink:href={{ asset('icons.svg#icon-edit')}}></use>
                                </svg>
                            </a>
                            <a href="{{ route('categories.delete' , $item->id) }}">
                                <svg>
                                    <use xlink:href={{ asset('icons.svg#icon-delete')}}></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Courses Section -->
        <section class="order-section">
            <div class="header">
                <h1>{{__('language.COURSES2')}}</h1>
            </div>

            <div class="user--new">
                <a>
                    <button class="btn btn--new">{{__('language.NEW_COURSE')}}</button>
                </a>
            </div>

            @if (session('course_message'))
                <h4 class="alert alert-success text-center">{{session('course_message')}}</h4>
            @endif

            <div class="container order-container">
                <div class="orders">
                    <div class="orders-keys">
                        <div class="keys order-id">
                            ID
                        </div>
                        <div class="keys product-name">
                        {{__('language.TITLE3')}}
                        </div>
                        <div class="keys user-name">
                        {{__('language.DESCRIPTION3')}}
                        </div>
                        <div class="keys order-placedAt">
                        {{__('language.HOURS')}}
                        </div>
                        <div class="keys order-price">
                        {{__('language.PRICE')}}
                        </div>
                        <div class="keys order-action_value">
                        {{__('language.ACTIONS')}}
                        </div>
                    </div>
                    @foreach ($courses as $item)
                    <div class="orders-values">
                        <div class="values order-id_value">
                            {{$item->id}}
                        </div>
                        <div class="values product-name_value">
                            {{$item->title}}
                        </div>
                        <div class="values user-name_value">
                            {{$item->description}}
                        </div>
                        <div class="values order-placedAt_value">
                            {{$item->hours}}
                        </div>
                        <div class="values order-price">
                            {{$item->price}}
                        </div>
                        <div class="values order-action_value">
                            <a href="{{ route('courses.update' , $item->id) }}">
                                <svg>
                                    <use xlink:href={{ asset('icons.svg#icon-edit')}}></use>
                                </svg>
                            </a>
                            <a href="{{ route('courses.delete',$item->id) }}">
                                <svg>
                                    <use xlink:href={{ asset('icons.svg#icon-delete')}}></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Meetings Section -->
        <section class="account-section">
            <div class="header">
                <h1>{{__('language.MEETINGS2')}}</h1>
            </div>

            <div class="user--new">
                <a>
                    <button class="btn btn--new">{{__('language.NEW_MEETING')}}</button>
                </a>
            </div>

            @if (session('meeting_message'))
                <h4 class="alert alert-success text-center">{{session('meeting_message')}}</h4>
            @endif

            <div class="container section-container2">
                <div class="sections">
                    <div class="sections-keys">
                        <div class="keys">
                            ID
                        </div>
                        <div class="keys">
                        {{__('language.TITLE3')}}
                        </div>
                        <div class="keys">
                        {{__('language.DESCRIPTION3')}}
                        </div>
                        <div class="keys">
                        {{__('language.DATE')}}
                        </div>
                        <div class="keys">
                        {{__('language.PRICE')}}
                        </div>
                        <div class="keys section-action_value">
                        {{__('language.ACTIONS')}}
                        </div>
                    </div>
                    @foreach ($meetings as $item)
                    <div class="sections-values">
                        <div class="values order-id_value">
                            {{$item->id}}
                        </div>
                        <div class="values product-name_value">
                            {{$item->title}}
                        </div>
                        <div class="values user-name_value">
                            {{$item->description}}
                        </div>
                        <div class="values order-placedAt_value">
                            {{$item->date}}
                        </div>
                        <div class="values order-price">
                            {{$item->price}}
                        </div>
                        <div class="values section-action_value">
                            <a href="{{ route('meetings.update' , $item->id) }}">
                                <svg>
                                    <use xlink:href={{ asset('icons.svg#icon-edit')}}></use>
                                </svg>
                            </a>
                            <a href="{{ route('meetings.delete',$item->id) }}">
                                <svg>
                                    <use xlink:href={{ asset('icons.svg#icon-delete')}}></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Messages Section -->
        <section class="message-section">
            <div class="header">
                <h1>{{__('language.MESSAGES')}}</h1>
            </div>

            <div class="user--new">
                <a>
                    <button class="btn btn--new">{{__('language.NEW_MESSAGE')}}</button>
                </a>
            </div>

            @if (session('new_message'))
                <h4 class="alert alert-success text-center">{{session('new_message')}}</h4>
            @endif

            <div class="container message-container3">
                <div class="messages">
                    <div class="messages-keys">
                        <div class="keys">
                            ID
                        </div>
                        <div class="keys">
                        {{__('language.NAME')}}
                        </div>
                        <div class="keys">
                        {{__('language.EMAIL')}}
                        </div>
                        <div class="keys">
                        {{__('language.SUBJECT')}}
                        </div>
                        <div class="keys">
                        {{__('language.MESSAGE')}}
                        </div>
                        <div class="keys message-action_value">
                        {{__('language.ACTIONS')}}
                        </div>
                    </div>
                    @foreach ($messages as $item)
                    <div class="messages-values">
                        <div class="values order-id_value">
                            {{$item->id}}
                        </div>
                        <div class="values product-name_value">
                            {{$item->name}}
                        </div>
                        <div class="values user-name_value">
                            {{$item->email}}
                        </div>
                        <div class="values order-placedAt_value">
                            {{$item->subject}}
                        </div>
                        <div class="values order-price">
                            {{$item->message}}
                        </div>
                        <div class="values message-action_value">
                            <a href="{{ route('messages.update' , $item->id) }}">
                                <svg>
                                    <use xlink:href={{ asset('icons.svg#icon-edit')}}></use>
                                </svg>
                            </a>
                            <a href="{{ route('messages.delete',$item->id) }}">
                                <svg>
                                    <use xlink:href={{ asset('icons.svg#icon-delete')}}></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!---- NEW User ---->
        <section class="new--product_container">
            <div class="new--product_header">
                <div class="back--btn">
                    <a>
                        <svg>
                            <use xlink:href={{ asset('icons.svg#icon-skip-back')}}></use>
                        </svg>
                        <span>{{__('language.BACK')}}</span>
                    </a>
                </div>
                <div class="header text-center">
                    <h1>{{__('language.NEW_USER')}}</h1> 
                </div>
            </div>
            

            <form class="form new--productCreate__form" method="post" action="{{ route('users.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-new product__name">
                    <label>{{__('language.NAME')}}</label>
                    <input type="text" name="name" class="new--product_name" onfocus="this.placeholder= ''" onblur="this.placeholder= 'Username'" required>
                </div>
                <div class="form-new product__keyword">
                    <label>{{__('language.EMAIL_ADDRESS')}}</label>
                    <input type="email" name="email" class="new--product_keyword" onfocus="this.placeholder= ''" onblur="this.placeholder= 'Email'" required>
                </div>
                <div class="form-new product__brand">
                    <label>{{__('language.PASSWORD')}}</label>
                    <input type="password" name="password" class="new--product_brand" onfocus="this.placeholder= ''" onblur="this.placeholder= 'Password'" required>
                </div>
                <div class="new--product_create">
                    <button type="submit" class="btn btn--create">{{__('language.CREATE')}}</button>
                </div>
            </form>
        </section>

        <!---- NEW Categpry ---->
        <section class="new--user_container">
            <div class="new--user_header">
                <div class="header">
                    <h1>{{__('language.NEW_CATEGORY')}}</h1> 
                </div>
            </div>
            
 
            <form class="form new--UserCreate__form" method="post" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-new user__name">
                    <label>ID</label>
                    <input type="text" name="id" class="new--user_name" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" required>
                </div>
                <div class="form-new user__email">
                    <label>{{__('language.TITLE')}}</label>
                    <input type="text" name="title_en" class="new--user_email" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" required>
                </div>
                <div class="form-new user__email">
                    <label>{{__('language.TITLE2')}}</label>
                    <input type="text" name="title_ar" class="new--user_email" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" required>
                </div>
                <div class="form-new user__password">
                    <label>{{__('language.DESCRIPTION')}}</label>
                    <input type="text" name="description_en" class="new--user_password" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" minlength='' required>
                </div>
                <div class="form-new user__password">
                    <label>{{__('language.DESCRIPTION2')}}</label>
                    <input type="text" name="description_ar" class="new--user_password" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" minlength='' required>
                </div>
                <div class="new--user_create">
                    <button type="submit" class="btn btn--create">{{__('language.CREATE')}}</button>
                </div>
            </form>
        </section>
        
        <!---- NEW Course ---->
        <section class="new--course_container">
            <div class="new--user_header">
                <div class="header">
                    <h1>{{__('language.NEW_COURSE')}}</h1> 
                </div>
            </div>
            
 
            <form class="form new--UserCreate__form" method="post" action="{{ route('courses.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-new user__name">
                    <label>ID</label>
                    <input type="text" name="id" class="new--user_name" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" required>
                </div>
                    @error('id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <div class="form-new user__email">
                    <label>{{__('language.TITLE')}}</label>
                    <input type="text" name="title_en" class="new--user_email" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" required>
                </div>
                    @error('title_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <div class="form-new user__email">
                    <label>{{__('language.TITLE2')}}</label>
                    <input type="text" name="title_ar" class="new--user_email" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" required>
                </div>
                    @error('title_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <div class="form-new user__password">
                    <label>{{__('language.DESCRIPTION')}}</label>
                    <input type="text" name="description_en" class="new--user_password" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" minlength='' required>
                </div>
                    @error('description_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <div class="form-new user__password">
                    <label>{{__('language.DESCRIPTION2')}}</label>
                    <input type="text" name="description_ar" class="new--user_password" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" minlength='' required>
                </div>
                    @error('description_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <div class="form-new user__password">
                    <label>{{__('language.HOURS')}}</label>
                    <input type="text" name="hours" class="new--user_password" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" minlength='' required>
                </div>
                    @error('hours')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <div class="form-new user__password">
                    <label>{{__('language.PRICE')}}</label>
                    <input type="text" name="price" class="new--user_password" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" minlength='' required>
                </div>
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <div class="new--user_create">
                    <button type="submit" class="btn btn--create">{{__('language.CREATE')}}</button>
                </div>
            </form>
        </section>

        <!---- NEW Meeting ---->
        <section class="new--meeting_container">
            <div class="new--user_header">
                <div class="header">
                    <h1>{{__('language.NEW_MEETING')}}</h1> 
                </div>
            </div>
            
 
            <form class="form new--UserCreate__form" method="post" action="{{ route('meetings.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-new user__name">
                    <label>ID</label>
                    <input type="text" name="id" class="new--user_name" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" required>
                </div>
                    @error('id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <div class="form-new user__email">
                    <label>{{__('language.TITLE')}}</label>
                    <input type="text" name="title_en" class="new--user_email" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" required>
                </div>
                    @error('title_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <div class="form-new user__email">
                    <label>{{__('language.TITLE2')}}</label>
                    <input type="text" name="title_ar" class="new--user_email" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" required>
                </div>
                    @error('title_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <div class="form-new user__password">
                    <label>{{__('language.DESCRIPTION')}}</label>
                    <input type="text" name="description_en" class="new--user_password" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" minlength='' required>
                </div>
                    @error('description_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <div class="form-new user__password">
                    <label>{{__('language.DESCRIPTION2')}}</label>
                    <input type="text" name="description_ar" class="new--user_password" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" minlength='' required>
                </div>
                    @error('description_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <div class="form-new user__password">
                    <label>{{__('language.DATE')}}</label>
                    <input type="text" name="date" class="new--user_password" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" minlength='' required>
                </div>
                    @error('date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <div class="form-new user__password">
                    <label>{{__('language.PRICE')}}</label>
                    <input type="text" name="price" class="new--user_password" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" minlength='' required>
                </div>
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <div class="new--user_create">
                    <button type="submit" class="btn btn--create">{{__('language.CREATE')}}</button>
                </div>
            </form>
        </section>

        <!---- NEW Message ---->
        <section class="new--message_container">
            <div class="new--user_header">
                <div class="header">
                    <h1>{{__('language.NEW_MESSAGE')}}</h1> 
                </div>
            </div>
            
 
            <form class="form new--UserCreate__form" method="post" action="{{ route('messages.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-new user__name">
                    <label>ID</label>
                    <input type="text" name="id" class="new--user_name" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" required>
                </div>
                    @error('id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <div class="form-new user__email">
                    <label>{{__('language.NAME')}}</label>
                    <input type="text" name="name" class="new--user_email" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" required>
                </div>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <div class="form-new user__password">
                    <label>{{__('language.EMAIL_ADDRESS')}}</label>
                    <input type="text" name="email" class="new--user_password" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" minlength='' required>
                </div>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <div class="form-new user__password">
                    <label>{{__('language.SUBJECT')}}</label>
                    <input type="text" name="subject" class="new--user_password" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" minlength='' required>
                </div>
                    @error('subject')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <div class="form-new user__password">
                    <label>{{__('language.MESSAGE')}}</label>
                    <input type="text" name="message" class="new--user_password" onfocus="this.placeholder= ''" onblur="this.placeholder= ''" minlength='' required>
                </div>
                    @error('message')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <div class="new--user_create">
                    <button type="submit" class="btn btn--create">{{__('language.CREATE')}}</button>
                </div>
            </form>
        </section>
        
        <script src="app.js"></script>
@endsection
