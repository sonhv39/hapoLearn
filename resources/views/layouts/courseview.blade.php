@foreach($courses as $course)
    <div class="col-md-6">
        <div class="ls-item">
            <div class="ls-item-top d-flex">
                <div class="ls-img">
                    <img class="w-100 h-100" src="{{ $course->img_url }}" alt="imgof{{ $course->title }}">
                </div>
                <div class="ls-item-content">
                    <div class="ls-item-title">{{ $course->title }}</div>
                    <p class="ls-item-text">
                        @if(strlen($course->description) > 100)
                        {{ substr($course->description, 0, 97) }}...
                        @else
                        {{ $course->description }}
                        @endif
                    </p>
                </div>
            </div>
            <div class="ls-item-btn text-right">More</div>
            <div class="ls-item-bot d-flex justify-content-between">
                <div class="item-bot-static">
                    <p>Learners</p>
                    <p>
                        {{ $course->learner }}
                    </p>
                </div>
                <div class="item-bot-static">
                    <p>Lessons</p>
                    <p>{{ $course->lesson }}</p>
                </div>
                <div class="item-bot-static">
                    <p>Times</p>
                    <p>{{ $course->time }} (h)</p>
                </div>
            </div>
        </div>
    </div>
@endforeach
