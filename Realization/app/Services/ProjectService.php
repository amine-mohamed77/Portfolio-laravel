<?php

namespace App\Services;

class ProjectService
{
    private $projects = [
        [
            'id' => 1,
            'slug' => 'dashboard',
            'title' => 'Dashboard',
            'description' => 'Responsive Design: The project is designed to be responsive and suitable for all devices, ensuring a seamless user experience on mobile phones, tablets, and desktops. Element Animation: Utilizing advanced CSS techniques, I have created smooth and attractive animations for various web elements, making the interaction with the site engaging and enjoyable. Font Awesome Icons: The Font Awesome library is integrated to provide high-quality icons that add a professional and aesthetic touch to the project.',
            'image' => 'assets/Dashboard.png',
            'github' => 'https://github.com/amine-mohamed77/Dashboard.git',
            'demo' => 'https://amine-mohamed77.github.io/Dashboard/'
        ],
        [
            'id' => 2,
            'slug' => 'guess-the-word',
            'title' => 'Guess The Word',
            'description' => '"Guess The Word" is an interactive word-guessing game designed to test players\' intelligence and language skills by challenging them to guess a hidden word based on given hints. The game is built using HTML, CSS, and JavaScript, featuring an engaging design and smooth user experience to make gameplay fun and challenging. The game includes multiple difficulty levels, allowing players to interact with words in creative ways, such as entering letters, receiving hints, and managing limited attempts. It can be used as an educational tool or simply as an entertaining game.',
            'features' => [
                'Interactive word-guessing gameplay',
                'Multiple difficulty levels',
                'Hint system for assistance',
                'Limited attempts to increase challenge',
                'Built with HTML, CSS, and JavaScript'
            ],
            'image' => 'assets/the-word.png',
            'github' => 'https://github.com/amine-mohamed77/play-Guess-The-Word.git',
            'demo' => 'https://amine-mohamed77.github.io/play-Guess-The-Word/'
        ]
    ];

    public function getAllProjects()
    {
        return $this->projects;
    }

    public function getProjectBySlug($slug)
    {
        foreach ($this->projects as $project) {
            if ($project['slug'] === $slug) {
                return $project;
            }
        }
        return null;
    }
}
