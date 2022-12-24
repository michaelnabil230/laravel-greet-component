<?php

return [

    'is_christmas' => now()->month == 11 && now()->day == 25,

    'is_valentine' => now()->month == 1 && now()->day == 14,
];
