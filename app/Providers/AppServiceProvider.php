<?php

namespace App\Providers;

use App\Models\Answer;
use App\Observers\SubscriptionObserver;
use App\Models\Question;
use App\Models\User;
use App\Models\Subscription;
use App\Observers\QuestionObserver;
use App\Observers\UserObserver;
use App\Observers\AnswerObserver;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\QueryException;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(UserObserver::class);
        Question::observe(QuestionObserver::class);
        Answer::observe(AnswerObserver::class);
        Subscription::observe(SubscriptionObserver::class);

        //Block for sharing information with views
        try {
            View::share('mostInterestingWeeklyQuestions',
                Question::sinceDaysAgo(7)
                    ->sortByDesc('rating')
                    ->take(10)
            );
        }

        catch (QueryException $e) {
            //
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
