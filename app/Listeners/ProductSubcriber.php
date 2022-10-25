<?php

namespace App\Listeners;

use App\Events\ProductAddedEvent;
use Illuminate\Auth\Events\Registered;

class ProductSubcriber{

    /**
     * Зарегистрировать слушателей для подписчика.
     *
     * @param  \Illuminate\Events\Dispatcher  $events
     * @return void
     */
    public function addHandler($events)
    {
       dd($events);
    }

    public function registeredHandler($events)
    {
        # code...
    }

    public function subscribe($events){
        // $events->listen(ProductAddedEvent::class, [
        //     [ProductSubcriber::class, 'addHandler']
        // ]);
        // $events->listen(Registered::class, [
        //     [ProductSubcriber::class, 'registeredHandler']
        // ]);
        return [
            ProductAddedEvent::class => 'addHandler',
            Registered::class => 'registeredHandler'
        ];
    }

}