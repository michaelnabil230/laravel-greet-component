<?php

namespace MichaelNabil230\Greet\View\Components;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Greet extends Component
{
    public string $message;

    public string $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public function render()
    {
        $this->message = $this->message();

        return view('greet::greet');
    }

    protected function message(): string
    {
        $messageSpecialOccasions = $this->handleSpecialOccasions();
        $messageTime = $this->handleTimeProcessing();
        $messageDay = $this->handleDayProcessing();

        $message = $messageSpecialOccasions ?? $messageTime ?? $messageDay;

        $messages = __('greet::greet.' . $message);

        return Arr::random($messages);
    }

    protected function handleTimeProcessing(): string|null
    {
        $hour = date('H');

        if ($hour >= 5 && $hour <= 12) { // If between 5:00AM - 12:00AM
            return 'morning';
        } elseif ($hour >= 12 && $hour <= 18) { // If between 12:00PM - 6:00PM
            return 'afternoon';
        } elseif ($hour >= 18 && $hour <= 23) { // If between : 6:00PM - 11:00PM
            return 'evening';
        } elseif ($hour == 00 || $hour >= 23 && $hour <= 5) { // If between : 11:00PM - 5:00PM
            return 'night';
        }

        return null;
    }

    protected function handleSpecialOccasions(): string|null
    {
        if (date('d') == 1) {
            return 'new_month';
        } elseif (config('greet-component.is_christmas', false)) {
            return 'christmas';
        } elseif (config('greet-component.is_valentine', false)) {
            return 'valentine';
        }

        return null;
    }

    protected function handleDayProcessing(): string
    {
        return Str::camel(date('l'));
    }
}
