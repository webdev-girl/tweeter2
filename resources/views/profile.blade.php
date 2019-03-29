@extends('layouts.app')
@section('content')

<div cass="conainer">
    <div class="row">
        <div class="col-sm">
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
                            <img class="rounded-circle" src="/storage/avatars/{{ $user->avatar }}" />
                            <!-- badge -->
                            <div class="rank-label-container">
                                <span class="label label-default rank-label">{{$user->name}}</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row justify-content-center">
                    <form action="/profile" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
            <div class="col-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                             <div class="panel panel-default">

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="glyphicon glyphicon-camera">
                                    {{-- <a class="media-left" href="#444">
                                        <img alt="profile" class="media-object img-rounded" src="{{$user->avatar}}">
                                     </a> --}}

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h1>Welcome {{ $user->name }}</h1>

                                                <div class="nav">
                                                    <form name="profile-form" method="post" action="/profile/{{$user->id}}">
                                                        @csrf
                                                        <div class="glyphicon glyphicon-user">
                                                            <div class="col-md-12 align-right">
                                                                First Name
                                                                <br/>
                                                                {{-- {{ $userDetail->first_name }} --}}
                                                            </div>
                                                        </div>
                                                        <div class="glyphicon glyphicon-user">
                                                            <div class="col-md-12 align-right">
                                                                Last Name
                                                                <br/>
                                                                {{ $userDetail->last_name }}
                                                            </div>
                                                        </div>
                                                        <div class="glyphicon glyphicon-envelope">
                                                            <div class="col-md-12 align-right">
                                                                Email
                                                                {{ $userDetail->email }}
                                                            </div>
                                                        </div>
                                                        <div class="glyphicon glyphicon-phone">
                                                            <div class="col-md-12 align-right">
                                                                Telephone<br/>
                                                                {{ $userDetail->phone }}
                                                            </div>
                                                        </div>
                                                        <div class="glyphicon glyphicon-user">
                                                            <div class="col-md-12 align-right">
                                                                Gender
                                                                <br/>
                                                                {{ $userDetail->gender }}
                                                            </div>
                                                        </div>
                                                        <div class="glyphicon glyphicon-calendar">
                                                            <div class="col-md-12 align-right">
                                                                Date of Birth<br/>
                                                                {{ $userDetail->dob }}
                                                            </div>
                                                        </div>
                                                        <div class="glyphicon glyphicon-globe">
                                                            <div class="col-md-12 align-right">
                                                                Country<br/>
                                                            </div>
                                                            <div class="col-md-12 align-right">
                                                                {{ $userDetail->country }}
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <a href="/edit-profile/{{$user->id}}"class="btn btn-primary">{{ __('Edit') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
