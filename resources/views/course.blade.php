@extends('layouts.app')

@section('courses')
<section class="listcourse">
    <form action="{{ route('courses.index') }}" method="GET">
        <div class="listcourse-top d-flex">
            <div class="btn-listcourse-filter"><i class="fa fa-filter"></i> Filter</div>
            <div class="listcourse-search">
                <input placeholder="Search..." name="key_course_search" value="{{ $request['key_course_search'] }}">
                <i class="fa fa-search"></i>
            </div>
            <button class="btn-listcourse-search" type="submit">Tìm kiếm</button>
        </div>
        <div class="ls-filter align-items-center @if(!is_null($request['key_course_search']) || !is_null($request['sort']) || !is_null($request['teacher']) || !is_null($request['amount_user']) || !is_null($request['time_learn']) || !is_null($request['amount_lesson']) || !is_null($request['tag']))filter-active @endif">
            <p class="ls-filter-title">Lọc theo</p>
            <div class="ls-filter-content d-flex">
                <div class="filter-sort sort-e">
                    <input class="filter-input" type="radio" name="sort_time" id="earliest" value="{{ Config::get('course.sort.decrease') }}" @if($request['sort_time'] == Config::get('course.sort.decrease') || is_null($request['sort_time']))checked @endif>
                    <label for="earliest">Mới nhất</label>
                </div>
                <div class="filter-sort">
                    <input class="filter-input" type="radio" name="sort_time" id="lastest" value="{{ Config::get('course.sort.ascending') }}" @if($request['sort_time'] == Config::get('course.sort.ascending'))checked @endif>
                    <label for="lastest">Cũ nhất</label>
                </div>
                <select name="teacher" class="select-custom custom-teacher">
                    <option value="">Giáo viên</option>
                    @foreach($teachers as $teacher)
                    <option value="{{ $teacher->id }}" @if($request['teacher']==$teacher->id) selected @endif>{{ $teacher->name }}</option>
                    @endforeach
                </select>
                <select name="amount_user" class="select-custom">
                    <option value="">Số người học</option>
                    <option value="{{ Config::get('course.sort.ascending') }}" @if($request['amount_user']==Config::get('course.sort.ascending')) selected @endif>Tăng dần</option>
                    <option value="{{ Config::get('course.sort.decrease') }}" @if($request['amount_user']==Config::get('course.sort.decrease')) selected @endif>Giảm dần</option>
                </select>
                <select name="time_learn" class="select-custom">
                    <option value="">Thời gian học</option>
                    <option value="{{ Config::get('course.sort.ascending') }}" @if($request['time_learn']==Config::get('course.sort.ascending')) selected @endif>Tăng dần</option>
                    <option value="{{ Config::get('course.sort.decrease') }}" @if($request['time_learn']==Config::get('course.sort.decrease')) selected @endif>Giảm dần</option>
                </select>
                <select name="amount_lesson" class="select-custom">
                    <option value="">Số bài học</option>
                    <option value="{{ Config::get('course.sort.ascending') }}" @if($request['amount_lesson']==Config::get('course.sort.ascending')) selected @endif>Tăng dần</option>
                    <option value="{{ Config::get('course.sort.decrease') }}" @if($request['amount_lesson']==Config::get('course.sort.decrease')) selected @endif>Giảm dần</option>
                </select>
                <select name="tag[]" class="select-custom custom-tag" multiple>
                    @foreach($tags as $tag)
                    <option value="{{ $tag->id }}" @if(!is_null($request['tag'])) @foreach($request['tag'] as $t) @if($t==$tag->id) selected @endif @endforeach @endif>{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </form>
    <div class="listcourse-content">
        <div class="row">
            @include('layouts.courseview')
        </div>
    </div>
    <div class="pagination-lc d-flex justify-content-end">
        {{ $courses->withQueryString()->links('layouts.pagination') }}
    </div>
</section>
@endsection
