<?php

namespace App\Services;

class DeveloperService
{
    public function getDeveloperProfile()
    {
        return [
            'name' => 'Amin Mohamed',
            'role' => 'Full Stack Developer',
            'bio' => 'Passionate about building modern web apps using Laravel and React. I love clean code and problem solving.',
            'email' => 'amin.dev@example.com',
        ];
    }
}
