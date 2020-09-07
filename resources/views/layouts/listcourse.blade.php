@extends('layouts.app')

@section('content')

<div class="listcourse-search d-flex justify-content-start ml-5 pl-5">
    <div class="filter ml-4 px-3 py-1 ">
        <img src="{{ asset('storage/image/filter.png') }}">
        Filter
    </div>
    <div class="listcourse-search d-flex col-9 d-flex">
        <form method="get" action="{{ route('list_course.search') }}" class="col-12 d-flex">
            @csrf
            <input type="text" name="course_search" class="form-control col-7"  placeholder="Search...." aria-label="Search" @if (isset($keyword)) value="{{ $keyword }}" @endif>
            <input type="submit" class="btn btn-search" value="Search"/>
        </form>
    </div>
</div>
<div class = "list-course d-flex flex-wrap justify-content-center my-5 mx-5">
    @foreach($listCourse as $key => $courses)
    <div class = "courses col-5 d-flex flex-column mb-3 mr-5">
        <div class="course-body d-flex ">
            <img class=" col-2 px-3 py-2 mt-4" src="{{ asset ($courses->image) }}">
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
                        2,568
                    </div>
                </div>
                <div class="footer-count text-center col-4  d-flex flex-column">
                    <div class="footer-title mb-2">
                        Lessons
                    </div>
                    <div class ="footer-number">
                        12,568
                    </div>
                </div> 
                <div class="footer-count text-center col-4  d-flex flex-column">
                    <div class="footer-title mb-2">
                        Quizzes
                    </div>
                    <div class ="footer-number">
                        14,125
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

{{ $listCourse->links() }}

@endsection
