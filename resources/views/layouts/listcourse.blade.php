<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HapoLearn') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/listcourse.css') }}" rel="stylesheet"> 
    
</head>
<body >
@include('layouts.header')
<div class="listcourse-search d-flex justify-content-start ml-5 pl-5">
    <div class="filter ml-5 mr-4 px-2 py-2">
        <img src="{{ asset('storage/image/filter.png') }}">
        Filter
    </div>
    <div class="listcourse-search d-flex col-8">
    
              <input type="text" name="query"   class="form-control col-6"  placeholder="Search...." aria-label="Search">
              <span class="icon"><i class="fa fa-search"></i></span>
    </div>

</div>
<div class = "list-course d-flex flex-wrap justify-content-center my-5 mx-5">
    @foreach($listCourse as $key => $courses)
    <div class = "courses col-5 d-flex flex-column mb-3 mr-5">
        <div class="course-body d-flex ">
        <img class=" col-2 px-2 mt-4" src="{{ asset( $courses->image) }}">
        <div class ="card-body col-10">
                <div class="card-title">
                    {{ $courses->name }}
                </div>
                <div class = "card-text mb-3">
                    {{ $courses->description }}
                </div>
                <a class= "card-link " href="#"> More </a>
            </div>
       </div>      
            <div class="footer d-flex mt-3 justify-content-around pb-3" >
                <div class="footer-count text-center col-4  d-flex flex-column">
                <div class="footer-title mb-2">
                    Learner
                </div>
                <div class ="footer-number">
                    ABC
                </div>
                </div>
                <div class="footer-count text-center col-4  d-flex flex-column">
                <div class="footer-title mb-2">
                    Lessons
                </div>
                <div class ="footer-number">
                    ABC
                </div>
                </div>
            
                <div class="footer-count text-center col-4  d-flex flex-column">
                <div class="footer-title mb-2">
                    Quizzes
                                </div>
                <div class ="footer-number">
                    ABC
                </div>
                </div>
            
            
        </div>
        </div>
        @endforeach
        </div>
@include('layouts.footer') 
</body>
</html>