@extends('layouts.app-withSidebar')

@section('content')

    <div class="col-md-8">

        @include('flashNotifications')

        <h1 class="mb-35">Settings</h1>

        <ul class="bordered-menu">
            <li class="bordered-menu__item bordered-menu__item--active">About myself</li>

            <li class="bordered-menu__item">
                <a href="{{ url('settings/mailing') }}">Mailing</a>
            </li>

            <li class="bordered-menu__item">
                <a href="{{ url('settings/subscriptions') }}">Subscriptions</a>
            </li>

            <li class="bordered-menu__item">
                <a href="{{ url('settings/account') }}">Account</a>
            </li>
        </ul>

        <form method="POST" action="{{ url('settings/info') }}">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}


            @include('errors')

            <div class="form-group">
                <label for="exampleInputEmail1">Your First Name</label>
                <input type="text"
                       class="form-control"
                       placeholder="First Name"
                       name="firstName"
                       value="{{ $user->firstName }}"
                >
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Your Last Name</label>
                <input type="text"
                       class="form-control"
                       placeholder="Last Name"
                       name="lastName"
                       value="{{ $user->lastName }}"
                >
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Some information about yourself</label>
                <textarea class="form-control"
                          placeholder="About myself"
                          name="about"
                          rows="5">{{ $user->about }}</textarea>
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>

@endsection