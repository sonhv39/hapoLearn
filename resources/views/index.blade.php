@extends('layouts.app')

@section('content')
    <main>
        <section class="banner">
            <div class="banner-img">
            </div>
            <div class="banner-content">
                <div>
                    <p class="">Learn Anytime, Anywhere</p>
                    <div class="banner-content-imgsmall">at HapoLearn <img src="{{ asset('images/imghaposmall.png') }}" alt="imghaposmall"> !
                    </div>
                    <p class="banner-tagp">Interactive lessons, "on-the-go" <br>
                        practice, peer support</p>
                    <button class="banner-btn">Start Learning Now!</button>
                </div>
            </div>
        </section>
        <section class="courses custom-container text-center">
            <div class="courses-list d-sm-flex justify-content-around">
                @foreach($courses as $c)
                    <div class="card">
                        <div class="courses-img courses-hcj">
                            <img src="{{ $c->img_url }}" class="card-img-top w-100" alt="img.{{ $c->title }}">
                        </div>
                        <div class="card-body courses-card-body">
                            <div class="card-title">{{ $c->title }}</div>
                            <p class="card-text">{{ $c->description }}</p>
                            <a href="#" class="btn courses-btn">Take This Course</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="courses-other">
                <p class="text-center">Other courses</p>
                <div class="courses-other-list d-sm-flex justify-content-around">
                    @foreach($courses as $c)
                        <div class="card">
                            <div class="courses-img courses-hcj">
                                <img src="{{ $c->img_url }}" class="card-img-top w-100" alt="img.{{ $c->title }}">
                            </div>
                            <div class="card-body courses-card-body">
                                <div class="card-title">{{ $c->title }}</div>
                                <p class="card-text">{{ $c->description }}</p>
                                <a href="#" class="btn courses-btn">Take This Course</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="#" class="courses-view-courses">View All Our Courses <i
                        class="fa fa-long-arrow-alt-right"></i></a>
            </div>
        </section>
        <section class="whyhapo-lg">
            <div class="whyhapo-topimg">
                <img src="{{ asset('images/bgwhylearnhapolearnsmalllaptop.png') }}" alt="bgwhylearnhapolearnsmalllaptop"
                     class="w-100">
            </div>
            <div class="whyhapo-content d-flex">
                <div class="whyhapo-left">
                    <div class="whyhapo-title">Why HapoLearn?</div>
                    <span><i class="fa fa-check-circle"></i>Interactive lessons, "on-the-go" practice, peer
                            support.</span>
                    <span><i class="fa fa-check-circle"></i>Interactive lessons, "on-the-go" practice, peer
                            support.</span>
                    <span><i class="fa fa-check-circle"></i>Interactive lessons, "on-the-go" practice, peer
                            support.</span>
                    <span><i class="fa fa-check-circle"></i>Interactive lessons, "on-the-go" practice, peer
                            support.</span>
                    <span><i class="fa fa-check-circle"></i>Interactive lessons, "on-the-go" practice, peer
                            support.</span>
                </div>
                <div class="whyhapo-right">
                    <img src="{{ asset('images/bgwhylearnhapolearnsmall.png') }}" alt="bgwhylearnhapolearnsmall"
                         class="w-100">
                </div>
            </div>
        </section>
        <section class="whyhapo-md">
            <div class="whyhapo-top d-flex">
                <div class="whyhapo-topimg">
                    <img src="{{ asset('images/bgwhylearnhapolearnsmalllaptop.png') }}"
                         alt="bgwhylearnhapolearnsmalllaptop"
                         class="w-100">
                </div>
                <div class="whyhapomd-title">Why HapoLearn?</div>
            </div>
            <div class="whyhapo-bot d-sm-flex">
                <div class="whyhapomd-text ">
                        <span><i class="fa fa-check-circle"></i>Interactive lessons, "on-the-go" practice, peer
                            support.</span>
                    <span><i class="fa fa-check-circle"></i>Interactive lessons, "on-the-go" practice, peer
                            support.</span>
                    <span><i class="fa fa-check-circle"></i>Interactive lessons, "on-the-go" practice, peer
                            support.</span>
                    <span><i class="fa fa-check-circle"></i>Interactive lessons, "on-the-go" practice, peer
                            support.</span>
                    <span><i class="fa fa-check-circle"></i>Interactive lessons, "on-the-go" practice, peer
                            support.</span>
                </div>
                <div class="whyhapomd-right">
                    <img src="{{ asset('images/bgwhylearnhapolearnsmall.png') }}" alt="bgwhylearnhapolearnsmall" class="w-100">
                </div>
            </div>
        </section>
        <section class="feedback">
            <div class="feedback-title">Feedback</div>
            <p class="feedback-undertitle">What other students turned professionals have to say about us after
                learning
                with us and reaching their goals</p>
            <div class="feedback-content custom-container">
                @foreach($reviews as $rv)
                    <div class="feedback-item">
                        <div class="feedback-text">
                            <p class="review-text">“{{ $rv->content }}</p>
                        </div>
                        <div class="feedback-bot">
                            <div class="feedback-img">
                                <img src="{{ $rv->user->avata_url }}" alt="feedback_img_cat"
                                     class="w-100">
                            </div>
                            <div class="feedback-right">
                                <p>{{ $rv->user->name }}</p>
                                <span>{{ $rv->course->title }}</span>
                                <div class="feedback-stars">
                                    @for($i = 0; $i < $rv->star_rating; $i++)
                                        <i class="fa fa-star"></i>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <section class="slogan d-flex justify-content-center align-items-center">
            <div class="slogan-content text-center">
                <p>Become a member of our
                    <br>
                    growing community!
                </p>
                <button class="slogan-btn">Start Learning Now!</button>
            </div>
        </section>
        <section class="statistic">
            <div class="statistic-title">Statistic</div>
            <div class="counters d-sm-flex justify-content-between">
                <div class="statistic-item">
                    <p>Courses</p>
                    <span class="counter">{{ $numberCourse }}</span>
                </div>
                <div class="statistic-item">
                    <p>Lessons</p>
                    <span class="counter">{{ $numberLesson }}</span>
                </div>
                <div class="statistic-item">
                    <p>Learners</p>
                    <span class="counter">{{ $numberUser }}</span>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('messenger')
    <div class="icon-mess">
        <div class="icon-img d-flex align-items-center justify-content-center">
            <i class="fab fa-facebook-messenger"></i>
        </div>
        <div class="mess-content">
            <div class="mess-name">HapoLearn</div>
            <div class="mess-ava d-flex">
                <div class="ava-hapo">
                    <img src="{{ asset('images/ava_hapo.png') }}" alt="avata_hapo" class="w-100">
                </div>
                <div class="mess-chat">
                    <p>HapoLearn xin chào bạn. <br>
                        Bạn cần chúng tôi trợ giúp gì không?</p>
                </div>
            </div>
            <button class="mess-btn"><i class="fab fa-facebook-messenger"></i> <span>Đăng nhập vào
                        Messenger</span></button>
            <div class="mess-text">Chat với HapoLearn trong Messenger</div>
            <div class="icon-close"><i class="fa fa-times"></i></div>
        </div>

    </div>
@endsection
@section('login_register')
    <div class="modal fade" id="loginRegisterModal" tabindex="-1" aria-labelledby="loginRegisterModal"
         aria-hidden="true">
        <div class="d-flex justify-content-center">
            <div class="form-rl-header">
                <div class="modal-header-custom">
                    <p class="modal-header-l modal-active-cus">LOGIN</p>
                    <P class="modal-header-r">REGISTER</P>
                </div>
                <form class="form-r d-none">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div class="form-group">
                        <label for="rppassword">Repeat Password:</label>
                        <input type="password" class="form-control" id="rppassword">
                    </div>
                    <div class="text-center">
                        <button type="submit">REGISTER</button>
                    </div>
                </form>
                <form class="form-l d-block" action="login" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="usernamel">Username:</label>
                        <input type="text" class="form-control" id="usernamel" name="username">
                        @if($errors->first('username'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('username') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="passwordl">Password:</label>
                        <input type="password" class="form-control" id="passwordl" name="password">
                      @if($errors->first('password'))
                        <div class="alert alert-danger" role="alert">
                          {{ $errors->first('password') }}
                        </div>
                      @endif
                    </div>
                    <div class="form-group form-check d-flex justify-content-between">
                        <div>
                            <input type="checkbox" class="form-check-input" id="rememberl">
                            <label class="form-check-label" for="rememberl">Remember me</label>
                        </div>
                        <a href="#" class="">Forgot Password</a>
                    </div>
                    <div class="text-center">
                        <button type="submit">LOGIN</button>
                    </div>
                    <div class="loginwith-text">Login with</div>
                    <div class="login-google d-flex justify-content-center">
                        <div class="d-flex align-items-center">
                            <i class="fab fa-google-plus-g"></i>
                            <span>Google</span>
                        </div>
                    </div>
                    <div class="login-facebook d-flex justify-content-center align-items-center">
                        <div class="d-flex align-items-center">
                            <i class="fab fa-facebook-f"></i>
                            <span>Facebook</span>
                        </div>
                    </div>
                </form>
                <div class="modal-close">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>
@endsection
<<<<<<< HEAD
=======
>>>>>>>> a2e3c18 (ignore foder public):resources/views/index.blade.php
>>>>>>> a2e3c18 (ignore foder public)
