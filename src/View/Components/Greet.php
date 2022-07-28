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

        return view('greet::components.greet');
    }

    protected function message(): string
    {
        $messageSpecialOccasions = $this->handleSpecialOccasions();
        $messageTime = $this->handleTimeProcessing();
        $messageDay = $this->handleDayProcessing();

        $message = $messageSpecialOccasions ?? $messageTime ?? $messageDay;

        $messages = __('greet::greet.'.$message);

        return Arr::random($messages);
    }

    protected function handleTimeProcessing(): string
    {
        $hour = date('H');

        if ($hour < 12) {
            return 'morning';
        } elseif ($hour < 17) {
            return 'afternoon';
        } elseif ($hour < 20) {
            return 'evening';
        }

        return 'night';
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
