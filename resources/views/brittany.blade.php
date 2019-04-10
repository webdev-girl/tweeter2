@include('partials.header')
   <title>Tweeter.com</title>
   <body class="timeline-bg">
       {{-- <div class="timeline-nav"> --}}

       <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
           <div class="container">
               {{-- <a class="navbar-brand" href="{{ url('/') }}">
                   {{ config('app.name', 'Laravel') }}
               </a> --}}
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                   <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <!-- Left Side Of Navbar -->
                   <ul class="navbar-nav mr-auto">
                       <li><a class="login" class="navbar-brand" href="{{ url('/') }}"><img src="../images/twitterbird.png" width="23px" height="23px">Home</a></li>
                       <li><a href="/moments">Moments</a></li>
                       <li><a href="/notifications">Notifications</a></li>
                       <li><a href="/messages">Messages</a></li>
                       <li><i class="fab fa-twitter"></i></li>
                       <li><a href="/profile">Profile</a></li>
                       <li><a href="{{ url('/logout') }}"> logout </a></li>
                   </ul>

                   <!-- Right Side Of Navbar -->
                   <ul class="navbar-nav ml-auto">
                       <!-- Authentication Links -->
                       @guest
                           <li class="nav-item">
                               <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                           </li>
                           @if (Route::has('register'))
                               <li class="nav-item">
                                   <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                               </li>
                           @endif
                       @else
                           <li class="nav-item dropdown">
                               <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   {{ Auth::user()->name }} <span class="caret"></span>
                               </a>

                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                       {{ __('Logout') }}
                                   </a>

                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       @csrf
                                   </form>
                               </div>
                           </li>
                       @endguest
                   </ul>
               </div>
           </div>
       </nav>
              <div class="container-fluid timeline-div">
                  <div class="row">
                       <div class="col-sm-4 left-profile">
                           <div class="container">
                              <div>
                                   <div class="col-md">
                                      <div class="card card-default">
                                          <div class="card-header header">
                                              <div>
                                                  <ul class="profile-contact">
                                                      <li><a href="/moments">Rachel Sakac</a></li>
                                                      <li><a href="/moments">@sakac934</a></li>
                                                  </ul>
                                               </div>
                                          </div>
                                          <div class="card-body">
                                              {{-- <div class="container">
                                                  <div class="row">
                                                      <div class="col-md-12">

                                                          @if(auth()->user()->isNot($user))
                                                              @if(auth()->user()->isFollowing($user))
                                                                  <a href="{{ route('user.unfollow', $user) }}" class="btn btn-danger">No Follow</a>
                                                                  @else
                                                                  <a href="{{ route('user.follow', $user) }}" class="btn btn-success">Follow</a>
                                                              @endif
                                                          @endif

                                                      </div>
                                                  </div>
                                              </div>

                                           @foreach ($potentialfollowers as $potentialfollower)
                                             <form method="post" action="follow">
                                               @csrf
                                                   <input type="hidden" name="user_id" value="{{ $potentialfollower->id}}">
                                                 - <div>
                                                      <div>
                                                          <img src="http://placehold.it/32x32" alt="" class="media-object img-rounded">
                                                      </div>
                                                     <h4 class="media-heading">{{ $potentialfollower -> name}}</h4>
                                                      <a href="/users/{{ $potentialfollower->id }}">{{ $potentialfollower -> name}}
                                                      <a href="{{ route('user.follow', $user) }}" class="btn btn-default btn-xs">    </a>
                                                      <div class="container">
                                                          <div class="row">
                                                              <div class="col-md-12">

                                                                  @if(auth()->user()->isNot($user))
                                                                      @if(auth()->user()->isFollowing($user))
                                                                          <a href="{{ route('user.unfollow', $user) }}" class="btn btn-danger"
                                                                              style="background-color: #1da1f2; color:white;">No Follow</a>
                                                                          @else
                                                                           <a href="{{ route('user.follow', $user) }}" class="btn btn-success">Follow</a>
                                                                      @endif
                                                                  @endif

                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </form>
                                           @endforeach --}}
                                          </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                             <div class="col-sm-8 card-right">
                                 <div class="container">
                                     <div>
                                         <div class="col-md">
                                             <div class="card card-default">
                                                 <div class="card-header right-card-header">
                                                     <div class="container">
                                                         <div class="row">
                                                             <div class="col-sm-1">
                                                                 <img class="tweet-avatar" src="images/profile.png" alt="profile">
                                                             </div>
                                                             <div class="col-sm">
                                                                 <form method="post" action="/tweet">
                                                                  @csrf
                                                                      <textarea name="tweet" class="form-control" rows="1" placeholder="What's happening?" required></textarea>
                                                                      <button type="submit" class="btn btn-primary"> {{ __('Tweet') }}</button>
                                                                 </form>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 @foreach ($tweets as $tweet)
                                                    <p><b> {{$tweet->tweet}} <b><br/>
                                                     by {{$tweet->user->name}} </p>   at {{$tweet->created_at}}
                                                      <a href="" class="btn btn-success">Follow</a>
                                                     <button  type="submit" class="btn btn-primary"> {{ __('Follow') }}</button>
                                                  <div class="card-body">
                                                      <div class="container">
                                                          <div class="row">
                                                              <div class="col-md-3 tweet-buttons">
                                                                  <a href="/edit-tweet/{{$tweet->id}}"><i class="far fa-edit"></i></a>
                                                              </div>

                                                              <div class="col-md-3 tweet-buttons">
                                                                  <form method="POST" action="/like-tweet">
                                                                   @csrf
                                                                      <input type="hidden" name="tweet_id" value="{{ $tweet->id }}"/>
                                                                      <input type="hidden" name="id" value="{{$tweet->id}}"/>
                                                                      <input type="hidden" name="like" value="1"/>
                                                                      <button class="btn btn-default like btn-like" ng-click="like()">
                                                                          <i class="fa fa-heart"></i>
                                                                       </button>
                                                                  </form>
                                                             </div>
                                                             <div class="col-md-3 tweet-buttons">
                                                                  <form method="POST" action="/like-tweet" >
                                                                  @csrf
                                                                      <input type="hidden" name="tweet_id" value="{{ $tweet->id }}"/>
                                                                      <input type="hidden" name="id" value="{{$tweet->id}}"/>
                                                                      <input type="hidden" name="like" value="0"/>
                                                                      <button type="submit" class="btn btn-default like btn-unlike" ng-click="like()">
                                                                        <i class="fas fa-thumbs-down"></i>
                                                                      </button>
                                                                  </form>
                                                               </div>
                                                               <div class="col-md-3 tweet-buttons">
                                                                  <form name="delete-form" method="post" action="delete-tweet">
                                                                  @csrf
                                                                    {{$tweet->id}}
                                                                     <input type="hidden" name="_method" value="DELETE"/>
                                                                     <input type="hidden" name="tweet_id" value="{{$tweet->id}}"/>
                                                                     <button type="submit" class="btn btn-default like btn-delete" ng-click="like()">
                                                                        <i class="fa fa-trash"> </i>
                                                                     </button>
                                                                  </form>
                                                               </div>
                                                          </div>
                                                      </div>

                                                      <div class="container">
                                                          <div class="row">
                                                                  <div class="col-sm-2">
                                                                     <img class="comment-avatar" src="images/profile.png" alt="profile">
                                                                  </div>

                                                                  <div class="col-md-6">
                                                                      <form  method="POST" action="comment">
                                                                       @csrf
                                                                          <textarea name="comment" class="form-control comment-box" rows="1" placeholder="What's happening?" required></textarea>
                                                                          <input type="hidden" name="user_id"  value="{{ $tweet->user_id}}" />
                                                                          <input type="hidden" name="tweet_id"  value="{{ $tweet->id}}" />
                                                                          <button  type="submit" class="btn btn-primary"> {{ __('Comment') }}</button>
                                                                      </form>
                                                                  </div>
                                                              </div>

                                                              @foreach ($tweet->comments as $comment)
                                                                  <p><b> {{$comment->comment}}<b></p>
                                                                         {{ $comment->name }}
                                                                      by {{$comment->user->name}}

                                                          <div class="row">
                                                              <div class="col-md-2 tweet-buttons">
                                                                  <a href="/edit-comment/{{$comment->id}}"><i class="far fa-edit"></i></a>
                                                              </div>
                                                              <div class="col-md-3 tweet-buttons">
                                                                  <form method="POST" action="/like-tweet">
                                                                   @csrf
                                                                      <input type="hidden" name="comment_id" value="{{ $comment->id }}"/>
                                                                      <input type="hidden" name="id" value="{{$comment->id}}"/>
                                                                      <input type="hidden" name="like" value="1"/>
                                                                      <button class="btn btn-default like btn-like" ng-click="Unlike()">
                                                                          <i class="fa fa-heart"></i>
                                                                       </button>
                                                                  </form>
                                                             </div>
                                                             <div class="col-md-3 tweet-buttons">
                                                                  <form method="POST" action="/like-tweet" >
                                                                      @csrf
                                                                      <input type="hidden" name="comment_id" value="{{ $comment->id }}"/>
                                                                      <input type="hidden" name="id" value="{{$comment->id}}"/>
                                                                      <input type="hidden" name="like" value="0"/>
                                                                      <button type="submit" class="btn btn-default like btn-unlike" ng-click="like()">
                                                                        <i class="fas fa-thumbs-down"></i>
                                                                      </button>
                                                                  </form>
                                                               </div>

                                                              <div class="col-md-3">
                                                                  <form name="delete-form" method="post" action="delete/{id}">
                                                                  @csrf
                                                                      <input type="hidden" name="_method" value="DELETE"/>
                                                                      <input type="hidden" name="comment_id" value="{{$comment->id}}"/>
                                                                      <button type="submit" class="btn btn-default like btn-delete" ng-click="like()">
                                                                          <i class="fa fa-trash"> </i>
                                                                      </button>
                                                                  </form>
                                                              </div>
                                                              <hr/>
                                                          </div>
                                                      @endforeach
                                                      </div>
                                                  </div>
                                              </div>
                                          @endforeach
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
@include('partials.footer')
  </body>
</html> 
