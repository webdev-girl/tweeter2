@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            @if ($message = Session::get('success'))

            <div class="alert alert-success alert-block">

                <button type="button" class="close" data-dismiss="alert">×</button>

                <strong>{{ $message }}</strong>

            </div>

            @endif

            @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
                @endif
            </div>
                <div class="row justify-content-center">

                    <div class="profile-header-container">
                        <div class="profile-header-img">
                            <img class="rounded-circle" src="/storage/avatars/{{ $currentUser->avatar }}" />
                            <!-- badge -->
                            <div class="rank-label-container">
                             <span class="label label-default rank-label">{{$user->name}}</span>
                        </div>
                    </div>
                </div>

                </div>
                <div class="row justify-content-center">
                    <form action="/edit-profile" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>



            {{-- @section('content')
            <div class="py-4">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <profile></profile>
                    </div>
                </div>
            </div>
            @endsection
            @extends('layouts.app')
            <title>{{ ('Tweeter') }}</title>
            @section('content')
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Profile') }}</div>


            {{-- <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        {{-- <h3>{{ $user->name }}</h3> --}}

                    {{-- </div>
                </div>
            </div> --}}
             {{-- <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                         <div class="panel panel-default">
                            <div class="panel-body">
                                <a href="#"><img class="img-responsive" alt="" src=""></a>
                                <div class="row">
                                    <div class="col-xs-3">
                                        <h5>
                                            <small>TWEETS</small>
                                            <a href="#">1,545</a>
                                        </h5>
                                    </div>
                                    <div class="col-xs-4">
                                        <h5>
                                            <small>FOLLOWING</small>
                                            <a href="#">251</a>
                                        </h5>
                                    </div>
                                    <div class="col-xs-5">
                                        <h5>
                                            <small>FOLLOWERS</small>
                                        </br>
                                        <a href="#">251</a>
                                    </h5>
                                </div>
                            </div>

                             <div class="panel panel-default panel-custom">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        Trends
                                        <small><a href="#">ciao</a></small>
                                    </h3>
                                </div>

                                <div class="panel-body">

                                </div>
                            </div>

                        </div>
                    </div>
                </div> --}}

            <div class="col-sm-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="media">
                            <div class="glyphicon glyphicon-camera">
                            <a class="media-left" href="#444">
                                <img alt="" class="media-object img-rounded" src="{{$user->avatar}}">
                            </a>
                            <div class="container">
                                <div class="row justify-content-center">

                                    <div class="col-md-12">
                                        <h1> Up date your profile</h1>

                                        <div class="nav">
                                                <form name="profile-form" method="post" action="/edit-profile">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-12 align-right">
                                                            First Name
                                                        </div>
                                                        <div class="col-xs-8 col-md-9">
                                                            <input type="text" class="username" name="first_name" placeholder="Username"  value="{{ $user->first_name }}" required/><br/>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 align-right">
                                                            Last Name
                                                        </div>
                                                        <div class="col-xs-8 col-md-9">
                                                            <input type="text" name="last_name" class="username" placeholder="Username"  value="{{ $user->last_name }}" required /><br/>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 align">
                                                            Phone
                                                        </div>
                                                        <div class="col-xs-8 col-md-9">
                                                            <input type="text" class="username" placeholder="phone" name="phone"  value="{{ $user->phone }}" required /><br/>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 align-right">
                                                            email
                                                        </div>
                                                        <div class="col-xs-8 col-md-9">
                                                            <input type="email" class="email" name="email" placeholder="email" value="{{ $user->username }}" required/><br/>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 align-right">
                                                            Gender
                                                        </div>
                                                        <div class="col-xs-8 col-md-9">
                                                            <input type="text" class="username"  name="gender" placeholder="gender" value="{{ $user->gender }}" required /><br/>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 align-right">
                                                            Date of Birth
                                                        </div>
                                                        <div class="col-xs-8 col-md-9">
                                                            <input type="dob" class="username" placeholder="dob"  name="dob" value="{{ $user->dob }}" required/><br/>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12 align-right">
                                                            Country
                                                        </div>
                                                        <div class="col-xs-8 col-md-9">
                                                            <input type="text" class="username" placeholder="country" name="country"  value="{{ $user->country }}" required /><br/>
                                                        </div>
                                                    </div>
                                                    <input type="submit" value="save changes" class="button" alt=""/></br>
                                                    <label>
                                                        <input type="checkbox" value="Remember me" class="checkbox"/> <span>Remember me</span>
                                                    </label>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


@endsection
