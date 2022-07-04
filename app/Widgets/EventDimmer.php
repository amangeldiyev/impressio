<?php

namespace App\Widgets;

use App\Models\Event;
use Str;
use TCG\Voyager\Widgets\BaseDimmer;

class EventDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Event::count();
        $string = trans_choice('Event', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-news',
            'title'  => "{$count} {$string}",
            'text'   => "You have $count $string in your database. Click on button below to view all events.",
            'button' => [
                'text' => 'View all events',
                'link' => route('voyager.events.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }
}
