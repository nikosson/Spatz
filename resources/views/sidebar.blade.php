<div class="col-md-3">
    <div class="profile-sidebar">
        <div class="clearfix">
            <img src="/img/kappa.png_large" alt="" class="profile-sidebar__avatar">
            <p class="profile-sidebar__name">
                <a href="{{ route('user_info', auth()->user()->name) }}">{{ auth()->user()->name }}</a>
            </p>
        </div>

        <div class="list-group">
            <a href="{{ url('/') }}" class="list-group-item">
                <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                My feed
            </a>
            <a href="{{ url('questions') }}" class="list-group-item">
                <i class="fa fa-question-circle" aria-hidden="true"></i>
                All questions
            </a>
            <a href="{{ url('channels') }}" class="list-group-item">
                <i class="fa fa-tags" aria-hidden="true"></i>
                All channels
            </a>
            <a href="{{ url('users') }}" class="list-group-item">
                <i class="fa fa-users" aria-hidden="true"></i>
                All users
            </a>
        </div>
    </div>
</div>