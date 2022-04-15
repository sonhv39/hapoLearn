@extends('layouts.app')

@section('courses')
    <main>
        <section class="listcourse">
            <form action="{{ route('listcourse') }}" method="GET">
                <div class="listcourse-top d-flex">
                    <div class="btn-listcourse-filter"><i class="fa fa-filter"></i> Filter</div>
                    <div class="listcourse-search">
                        <input placeholder="Search..." name="input" value="{{ $data['input'] }}">
                        <i class="fa fa-search"></i>
                    </div>
                    <button class="btn-listcourse-search" type="submit">Tìm kiếm</button>
                </div>
                <div class="ls-filter align-items-center @if(!is_null($data['input']) || !is_null($data['sort']) || !is_null($data['teacher']) || !is_null($data['amountstd']) || !is_null($data['timelearn']) || !is_null($data['amountls']) || !is_null($data['tag']))filter-active @endif">
                    <p class="ls-filter-title">Lọc theo</p>
                    <div class="ls-filter-content d-flex">
                        <div class="filter-sort sort-e">
                            <input class="filter-input" type="radio" name="sort" id="earliest" value="desc" @if($data['sort'] == Config::get('course.sort.decrease') || is_null($data['sort']))checked @endif>
                            <label for="earliest">Mới nhất</label>
                        </div>
                        <div class="filter-sort">
                            <input class="filter-input" type="radio" name="sort" id="lastest" value="asc" @if($data['sort'] == Config::get('course.sort.ascending'))checked @endif>
                            <label for="lastest">Cũ nhất</label>
                        </div>
                        <select name="teacher" class="select-custom custom-teacher">
                            <option value="null">Giáo viên</option>
                            @foreach($teachers as $t)
                                <option value="{{ $t->id }}" @if($data['teacher'] == $t->id) selected @endif>{{ $t->name }}</option>
                            @endforeach
                        </select>
                        <select name="amountstd" class="select-custom">
                            <option value="null">Số người học</option>
                            <option value="{{ Config::get('course.sort.ascending') }}" @if($data['amountstd'] == Config::get('course.sort.ascending')) selected @endif>Tăng dần</option>
                            <option value="{{ Config::get('course.sort.decrease') }}" @if($data['amountstd'] == Config::get('course.sort.decrease')) selected @endif>Giảm dần</option>
                        </select>
                        <select name="timelearn" class="select-custom">
                            <option value="null">Thời gian học</option>
                            <option value="{{ Config::get('course.sort.ascending') }}" @if($data['timelearn'] == Config::get('course.sort.ascending')) selected @endif>Tăng dần</option>
                            <option value="{{ Config::get('course.sort.decrease') }}" @if($data['timelearn'] == Config::get('course.sort.decrease')) selected @endif>Giảm dần</option>
                        </select>
                        <select name="amountls" class="select-custom">
                            <option value="null">Số bài học</option>
                            <option value="{{ Config::get('course.sort.ascending') }}" @if($data['amountls'] == Config::get('course.sort.ascending')) selected @endif>Tăng dần</option>
                            <option value="{{ Config::get('course.sort.decrease') }}" @if($data['amountls'] == Config::get('course.sort.decrease')) selected @endif>Giảm dần</option>
                        </select>
                        <select name="tag[]" class="select-custom custom-tag" multiple>
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}" @if(!is_null($data['tag'])) @foreach($data['tag'] as $t) @if($t == $tag->id) selected @endif @endforeach @endif>{{ $tag->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </form>
            <div class="listcourse-content">
                <div class="row">
                    @foreach($courses as $c)
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
                    @endforeach
                </div>
            </div>
            <div class="pagination-lc d-flex justify-content-end">
                {{ $courses->withQueryString()->links('layouts.pagination') }}
            </div>
        </section>
    </main>
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
                <form class="form-r d-none @if($errors->first('username') || $errors->first('password') || $errors->first('cfpassword') || $errors->first('email')) form-r-err  @endif" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username">
                        @if($errors->first('username'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('username') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                        @if($errors->first('email'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @if($errors->first('password'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="rppassword">Repeat Password:</label>
                        <input type="password" class="form-control" id="rppassword" name="confirm_password">
                        @if($errors->first('confirm_password'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('confirm_password') }}
                            </div>
                        @endif
                    </div>
                    <div class="text-center">
                        <button type="submit">REGISTER</button>
                    </div>
                </form>

                <form class="form-l d-block @if($errors->first('login_username') || $errors->first('login_password') || session('error')) form-l-err @endif" action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="usernamel">Username:</label>
                        <input type="text" class="form-control" id="usernamel" name="login_username">
                        @if($errors->first('login_username'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('login_username') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="passwordl">Password:</label>
                        <input type="password" class="form-control" id="passwordl" name="login_password">
                        @if($errors->first('login_password'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('login_password') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group form-check d-flex justify-content-between">
                        <div>
                            <input type="checkbox" class="form-check-input" id="rememberl" name="remember_token" value="remember_token">
                            <label class="form-check-label" for="rememberl">Remember me</label>
                        </div>
                        <a href="#" class="">Forgot Password</a>
                    </div>
                    @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
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