<?php

namespace App\Services;

class DeveloperService
{
    public function getProfile()
    {
        return [
            'name' => 'Amin Mohamed',
            'badge' => 'full stack · Developer',
            'subtitle' => 'I create modern, high-performance websites that help your',
            'title' => 'business stand out online',
            'bio' => "My name is Amin Mohamed, and I'm a Full Stack Developer passionate about turning ideas into powerful web applications.",
            'description' => "I specialize in building responsive, user-friendly, and high-performance websites using modern technologies. My goal is to help businesses and individuals bring their vision online and grow faster through clean code and creative solutions.",
            'image' => 'assets/profile-removebg-preview.png',
            'linkedin' => 'https://linkedin.com/in/amin-mohamed-4667a1245',
            'github' => 'https://github.com/amine-mohamed77'
        ];
    }
}
