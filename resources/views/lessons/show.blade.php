@extends('layouts.app')

@section('lesson_detail')
    <div class="lesson-detail">
        <div class="detail-link">Home > All courses > Course detail > Lesson detail</div>
        <div class="detail-content d-flex">
            <div class="detail-left">
                <div class="detail-img">
                    <img class="w-100 h-100" src="{{ $course->img_url }}" alt="img of {{ $course->title }}">
                </div>
                <div class="detail-left-content">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Descriptions</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <form action="">
                                <button class="des-btn btn btn-success mt-3" type="submit">Hoàn Thành</button>
                            </form>
                            <div class="des-content">
                                <div class="des-title">
                                    Descriptions lesson
                                </div>
                                <div class="des-text">{{ $lesson->description }}</div>
                                <div class="reqire-title">Requirements</div>
                                <div class="require-text">{{ $lesson->description }}</div>
                                <div class="des-tag d-flex align-items-center">
                                    <div class="des-tag-title">Tag:</div>
                                    <div class="des-tag-content d-flex align-items-center">
                                        @foreach ($tags as $tag)
                                            <div class="des-tag-item">
                                                #{{ $tag->name }}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                            ....
                        </div>
                    </div>
                </div>  
            </div>
            <div class="detail-right">
                <div class="course-info">
                    <div class="info-item info-learner d-flex align-items-center">
                        <i class="far fa-desktop"></i>
                        <span class="info-text info-course">Course</span>
                        <span class="colon">:</span>
                        <span class="data">{{ $course->title }}</span>
                    </div>
                    <div class="info-item info-learner d-flex align-items-center">
                        <i class="fa fa-users"></i>
                        <span class="info-text">Learners</span>
                        <span class="colon">:</span>
                        <span class="data">{{ $course->learner }}</span>
                    </div>
                    <div class="info-item info-time d-flex align-items-center">
                        <i class="far fa-clock"></i>
                        <span class="info-text text-time">Times</span>
                        <span class="colon">:</span>
                        <span class="data">{{ $course->time }} hours</span>
                    </div>
                    <div class="info-item info-tag d-flex align-items-center">
                        <i class="far fa-key"></i>
                        <span class="info-text text-tag">Tags</span>
                        <span class="colon">:</span>
                        <span class="data">
                            @foreach ($tags as $tag)
                                <a href="{{ route('courses.index', ['tag[]' => $tag->id]) }}">{{ $tag->name }},</a>
                            @endforeach
                        </span>
                    </div>
                    <div class="info-item info-price d-flex align-items-center">
                        <i class="far fa-money-bill-alt"></i>
                        <span class="info-text text-price">Price</span>
                        <span class="colon">:</span>
                        @if ($course->price == 0)
                            <span class="data">Free</span>   
                        @else
                            <span class="data">{{ $course->price }} $</span>
                        @endif
                    </div>
                    <div class="lesson-detail-btn text-center">
                        <button type="submit">Kết thúc khóa học</button>
                    </div>
                </div>
                @include('courses.course_other')
            </div>
        </div>
    </div>
@endsection
