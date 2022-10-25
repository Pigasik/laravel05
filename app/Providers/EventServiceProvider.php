<?php

namespace App\Providers;

use App\Events\ProductAddedEvent;
use App\Listeners\ProductListener;
use App\Listeners\ProductSubcriber;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        // ProductAddedEvent::class => [
        //     ProductListener::class,
        // ]
    ];

    protected $subscribe = [
        ProductSubcriber::class
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //Event::listen(ProductAddedEvent::class, [ProductListener::class, 'handle']);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
