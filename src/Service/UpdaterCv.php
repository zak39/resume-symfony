<?php

namespace App\Service;

class UpdaterCv {

    public function addSocialNetworks(array $cv): array {
        $cv['social_network'] =
            [
                [
                    'name' => 'github',
                    'url' => 'https://github.com/zak39',
                    'alt' => 'lien vers mon github',
                    'img' => 'images/social-network/github.svg'
                ],
                [
                    'name' => 'gitlab',
                    'url' => 'https://gitlab.com/zak39/',
                    'alt' => 'lien vers mon gitlab',
                    'img' => 'images/social-network/gitlab.svg'
                ],
                [
                    'name' => 'linkedin',
                    'url' => 'https://www.linkedin.com/in/baptiste-fotia',
                    'alt' => 'lien vers mon linkedin',
                    'img' => 'images/social-network/linkedin.svg'
                ],
                [
                    'name' => 'twitter',
                    'url' => 'https://twitter.com/Z4kira',
                    'alt' => 'lien vers mon twitter',
                    'img' => 'images/social-network/x.svg',
                ],
                [
                    'name' => 'mail',
                    'url' => 'mailto:fotia.baptiste@hotmail.com',
                    'alt' => 'contactez moi',
                    'img' => 'images/social-network/mail.svg',
                ]
            ]
        ;

        return $cv;
    }

    public function updateSkills(array $cv): array {
        $cv['skills'] =
            [
                [
                    'name' => 'symfony',
                    'img' => 'images/skills/symfony.svg',
                ],
                [
                    'name' => 'php',
                    'img' => 'images/skills/php.svg',
                ],
                [
                    'name' => 'laravel',
                    'img' => 'images/skills/laravel.svg',
                ],
                [
                    'name' => 'vue.js',
                    'img' => 'images/skills/vue.svg',
                ],
                [
                    'name' => 'javascript',
                    'img' => 'images/skills/javascript.svg',
                ],
                [
                    'name' => 'tailwindcss',
                    'img' => 'images/skills/tailwindcss.svg',
                ],
                [
                    'name' => 'git',
                    'img' => 'images/skills/git.svg',
                ],
                [
                    'name' => 'docker',
                    'img' => 'images/skills/docker.svg',
                ],
                [
                    'name' => 'python',
                    'img' => 'images/skills/python.svg',
                ],
                [
                    'name' => 'ansible',
                    'img' => 'images/skills/ansible.svg',
                ],
                [
                    'name' => 'html',
                    'img' => 'images/skills/html-5.svg',
                ],
                [
                    'name' => 'css',
                    'img' => 'images/skills/css-3.svg',
                ],
            ]
        ;

        return $cv;
    }

    public function addProProject(array $cv): array {
        $cv['pro_project'] =
            [
                [
                    'name' => 'dépose applicative',
                    'img' => 'images/pro-projects/depose-applicative.webp',
                    'summary' => 'dépose des applications Air-France avec différentes stack technique : application web, Rabit MQ, Batch, DNS, base de données, etc. avec interraction via Jira.',
                    'skill' => [
                        'ansible',
                        'python',
                        'jira'
                    ],
                    'url_repo' => null,
                ],
                [
                    'name' => 'Workpace',
                    'img' => 'images/pro-projects/workspace.webp',
                    'summary' => 'application pour Nextcloud qui est une extension à l\'application Group Folders dont les partages sont étendues pour les utilisateurs non admin.',
                    'skill' => [
                        'php',
                        'vue.js',
                        'css'
                    ],
                    'url_repo' => 'https://github.com/arawa/workspace',
                ],
                [
                    'name' => 'Migration S3',
                    'img' => 'images/pro-projects/migrate-s3-nc.webp',
                    'summary' => 'programme de migration des fichiers Nextcloud d\'une base de données vers du stockage S3.',
                    'skill' => [
                        'php',
                    ],
                    'url_repo' => 'https://github.com/arawa/migrate-s3-nc',
                ],
            ]
        ;

        return $cv;
    }

    public function addSideProject(array $cv): array {
        $cv['side_project'] =
            [
                [
                    'name' => 'biblios',
                    'img' => 'images/side-projects/biblios.webp',
                    'summary' => 'gestion des livres avec une interface d\'administration.',
                    'skill' => [
                        'symfony',
                        'bootstrap',
                    ],
                    'url_repo' => 'https://github.com/zak39/biblios',
                    'url_demo' => 'https://biblios.zakode.dev',
                ],
                [
                    'name' => 'Address book sf',
                    'img' => 'images/side-projects/address-book-symfony.webp',
                    'summary' => 'plateforme web d\'un carnet d\'adresse.',
                    'skill' => [
                        'symfony',
                        'bootstrap',
                    ],
                    'url_repo' => 'https://github.com/zak39/address-book-sf',
                    'url_demo' => 'https://address-book.zakode.dev',
                ],
                [
                    'name' => 'Dark force sf',
                    'img' => 'images/side-projects/dark-force-sf.webp',
                    'summary' => 'encyclopédie des personnages, vaisseaux et planètes de l\'univers de star wars.',
                    'skill' => [
                        'symfony',
                        'PicoCSS',
                    ],
                    'url_repo' => 'https://github.com/zak39/dark-force-sf',
                    'url_demo' => 'https://dark-force.zakode.dev',
                ],
                [
                    'name' => 'Job board sf',
                    'img' => 'images/side-projects/job-board-sf.webp',
                    'summary' => 'des opportunités professionnelles à portée de main avec cette application symfony.',
                    'skill' => [
                        'symfony',
                        'tailwind',
                    ],
                    'url_repo' => 'https://github.com/zak39/job-board-sf/',
                    'url_demo' => 'https://job-board.zakode.dev',
                ],
                [
                    'name' => 'Photo galery',
                    'img' => 'images/side-projects/photo-galery.webp',
                    'summary' => 'album photo généré avec unsplash.',
                    'skill' => [
                        'symfony',
                        'bootstrap',
                    ],
                    'url_repo' => 'https://github.com/zak39/photo-galery',
                    'url_demo' => 'https://photo-gallery.zakode.dev',
                ],
                [
                    'name' => 'Resume Symfony',
                    'img' => 'images/side-projects/resume-symfony.webp',
                    'summary' => 'portfolio sous symfony avec TailwindCss.',
                    'skill' => [
                        'symfony',
                        'tailwind',
                    ],
                    'url_repo' => 'https://github.com/zak39/resume-symfony',
                    'url_demo' => '#',
                ],
            ]
        ;

        return $cv;
    }

    /**
     * Don't use this function for now to leave certificates ordered in descending order.
     */
    public function reverseOrderCertificates(array $cv): array {
        $cv['certificates'] = array_reverse($cv['certificates']);
        return $cv;
    }

    public function addSummary(array $cv): array {
        $cv['basics']['summary'] = 'Je suis développeur Full-Stack avec une expérience en développement Back-End notamment avec PHP, mais également dans le Front-End avec Vue.js. Je monte actuellement en compétence sur Symfony.';
        return $cv;
    }

    public function addPseudo(array $cv): array {
        $cv['basics']['profiles']['pseudo'] = 'zakode';
        return $cv;
    }
}
