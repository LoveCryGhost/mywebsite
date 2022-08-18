@extends('layouts.app')

@section('app-title')
    User-Register
@endsection

@section('app-content')
    <!-- Page content -->
    <div class="page-content">
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">

                <!-- Content area -->
                <div class="content d-flex justify-content-center align-items-center">


                    <!-- Login form -->
                    <form class="login-form" action="{{route('user.register')}}" method="post">
                        @method('post')
                        @csrf
                        <div class="card mb-0">
                            <div class="card-body">
                                @include('user.share_components.errors_massages')
                                <div class="text-center mb-3">
                                    <i class="icon-reading icon-2x text-secondary border-secondary border-3 rounded-pill p-3 mb-3 mt-1"></i>
                                    <h5 class="mb-0">User 註冊</h5>
                                    <span class="d-block text-muted">輸入您的相關訊息x</span>
                                </div>

                                <div class="form-group form-group-feedback form-group-feedback-left">
                                    <input type="text" class="form-control" placeholder="User Name" name="name" value="{{old('name')}}">
                                    <div class="form-control-feedback">
                                        <i class="icon-user text-muted"></i>
                                    </div>
                                </div>
                                <div class="form-group form-group-feedback form-group-feedback-left">
                                    <input type="text" class="form-control" placeholder="User Email" name="email" value="{{old('email')}}">
                                    <div class="form-control-feedback">
                                        <i class="icon-mail5 text-muted"></i>
                                    </div>
                                </div>

                                <div class="form-group form-group-feedback form-group-feedback-left">
                                    <input type="password" class="form-control" placeholder="Password" name="password" value="">
                                    <div class="form-control-feedback">
                                        <i class="icon-lock2 text-muted"></i>
                                    </div>
                                </div>

                                <div class="form-group form-group-feedback form-group-feedback-left">
                                    <input type="password" class="form-control" placeholder="Password Confirm" name="password_confirmation" value="">
                                    <div class="form-control-feedback">
                                        <i class="icon-lock2 text-muted"></i>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">註冊</button>
                                </div>

                                <div class="text-center">
                                    <a href="{{route("user.login")}}">已有帳號, 返回登入!!</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /login form -->

                </div>
                <!-- /content area -->
            </div>
            <!-- /inner content -->

        </div>
    </div>
    <!-- /page content -->
@endsection
