<div class="course-other">
    <div class="course-other-top">Other Courses</div>
    <div class="course-other-content">
        @foreach ($courses as $key => $c)
            @if ($c !== $course)
                <div class="course-other-item">
                    {{ ++ $key }}. {{ $c->title }}
                </div>
            @endif
        @endforeach
        <div class="course-other-btn">
            <button>View all ours courses</button>
        </div>
    </div>
</div>