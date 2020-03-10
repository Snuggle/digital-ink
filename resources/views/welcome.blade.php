@extends('base')

@section('title')

@endsection

    <title>Home | Digital Ink.</title>

@section ('content')

<header class="masthead">
    <div class="banner h-25">

    </div>
    <div class="recent-stories">
        <h2>Recent Stories.</h2>
        <div class="row">
            <div class="col story">
                Story
            </div>
            <div class="col story">
                Story
            </div>
            <div class="col story">
                Story
            </div>
        </div>
    </div>
    <div class="login">
        <h2>Login.</h2>
        <div class="card login-form">
            <form action="{{url('post-login')}}" method="POST" id="login">
                {{ csrf_field() }}
                    <label>Email:
                        <input type="email" id="inputEmail" name="email" placeholder="Email">
                    </label>
                    @if ($errors->has('email'))
                        <span class="error">{{ $errors->first('email') }}</span>
                    @endif
                    <label>Password:
                    <input type="password" id="inputPassword" name="password" placeholder="Password">
                </label>
                    @if ($errors->has('password'))
                        <span class="error">{{ $errors->first('password') }}</span>
                    @endif
                    <button type="submit">Login</button>
            </form>
        </div>
    </div>
    <div class="login">
        <h2>Register.</h2>
        <div class="login-form">
            <form action="{{url('post-registration')}}" method="POST" id="regForm">
                {{ csrf_field() }}
                <label>Name:
                    <input type="text" id="inputName" name="name" placeholder="Name">
                </label>

                @if ($errors->has('name'))
                    <span class="error">{{ $errors->first('name') }}</span>
                @endif

                <label>Email:
                    <input type="email" id="inputEmail" name="email" placeholder="Email">
                </label>

                @if ($errors->has('email'))
                    <span class="error">{{ $errors->first('email') }}</span>
                @endif

                <label>Password:
                    <input type="password" id="inputPassword" name="password" placeholder="Password">
                </label>

                @if ($errors->has('password'))
                    <span class="error">{{ $errors->first('password') }}</span>
                @endif

                <button type="submit">Register</button>
            </form>
        </div>
    </div>
</header>

@endsection

