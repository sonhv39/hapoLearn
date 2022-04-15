<div class="col-md-6">
    <div class="ls-item">
        <div class="ls-item-top d-flex">
            <div class="ls-img">
                <img class="w-100 h-100" src="{{ $c->img_url }}" alt="imgof{{ $c->title }}">
            </div>
            <div class="ls-item-content">
                <div class="ls-item-title">{{ $c->title }}</div>
                <p class="ls-item-text">
                    @if(strlen($c->description) > 100)
                    {{ substr($c->description, 0, 97) }}...
                    @else
                    {{ $c->description }}
                    @endif
                </p>
            </div>
        </div>
        <div class="ls-item-btn text-right">More</div>
        <div class="ls-item-bot d-flex justify-content-between">
            <div class="item-bot-static">
                <p>Learners</p>
                <p>
                    {{ $c->learner }}
                </p>
            </div>
            <div class="item-bot-static">
                <p>Lessons</p>
                <p>{{ $c->lesson }}</p>
            </div>
            <div class="item-bot-static">
                <p>Times</p>
                <p>{{ $c->time }} (h)</p>
            </div>
        </div>
    </div>
</div>