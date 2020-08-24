//ABOUT ME
new Vue({
    el: "#about-section",
    data: {
        indexAboutMe: 0,
        aboutMe : [
            {
                title : 'Mon Parcours',
                text : 
                [
                    'Après avoir terminé mes études en Bac Pro systèmes électroniques et Numériques (Option: télécommunications & réseaux), j\'ai travaillé pendant 7 ans dans l\'industrie.',
                    'En 2019, j\'ai choisis de me reconvertir vers le métier de développeur web en rejoignant la formation "developpeur web et web mobile" dispensé par ACCESS CODE SCHOOL.',
                    'J\'ai obtenu mon diplome de niveau 5 (Bac +2) du même nom en juillet 2020.'
                ]
            },
            {
                title: 'Mes Passions', 
                text: [
                    'Passionné d\'informatique et de nouvelles technologie depuis le plus jeune âge, je me suis vraiment épanoui lors de mon apprentissage du developpement web.',
                    'Je suis également un amoureux de la nature, et des paysages de ma région. Je pratique la pêche sportive "No Kill". Cette passion me permet de me ressourcer et de me retrouver seul avec moi-même.',
                    'Je porte beaucoup d\'intérêt pour le developpement personnel, de finance personnelles et d’entrepreneuriat. Je suis un grand consommateur de livre sur ces sujets.'
                ]
            }, 
            {
                title: 'ma personnalité',
                text: [
                    'Je suis plutôt de nature calme et patient. J’aime profiter des petits bonheurs de la vie avec ma fille de 1 an.',
                    'Je suis très curieux de nature et j\'aime apprendre de nouvelles choses, et les mettres en pratique. Que ce soit la mécanique, ou la rénovation de bien immobiliers : La difficulté ne me fait pas peur et me donne envie de relever de nouveaux challenges.',
                    'J\'aime le sport et surtout en pleine nature. Je ne manque jamais une occasion de me surpasser et de repousser mes limites. Un de mes rêves est de voyager pour découvrir la vision du sport à l\'étranger',
                ]
            }
        ],
    },
    methods: {
        countParts: function(count){
            return count.length
        }
    }
})

//SERVICES
new Vue({
    el: "#service-section",
    data: {
        services: [
            {
                title: 'front-end',
                classLogo: 'fa fa-code'
            },
            {
                title: 'Back-end',
                classLogo: 'fa fa-cogs'
            },
            {
                title: 'Outils de développement',
                classLogo: 'fa fa-wrench'
            },
            {
                title: 'Référencement SEO',
                classLogo: 'fa fa-rocket'
            },
        ]
    }
})

//COMPETENCES
new Vue({
    el: "#competences-section",
    data: {
        stacks: [
            {
                techno: 'HTML',
                percentage: 90
            },
            {
                techno: 'CSS',
                percentage: 80
            },
            {
                techno: 'Bootstrap',
                percentage: 75
            },
            {
                techno: 'JavaScript',
                percentage: 60
            },
            {
                techno: 'jQuery',
                percentage: 60
            },
            {
                techno: 'ReactJS',
                percentage: 30
            },
            {
                techno: 'VueJS',
                percentage: 45
            },
            {
                techno: 'PHP',
                percentage: 70
            },
            {
                techno: 'mySQL',
                percentage: 50
            },
            {
                techno: 'Symfony',
                percentage: 60
            },
            {
                techno: 'GIT',
                percentage: 80
            },
            {
                techno: 'Docker',
                percentage: 30
            },
        ]
    }
})

//PROJECTS
new Vue({
    el: "#work-section",
    data: {
        projects: [
            {
                title: 'Blueasy',
                git: 'https://github.com/benaor/BLUEASY',
                urlLink: 'https://blueasy.benaor.fr',
                stack: 'HTML/CSS',
                img: 'blueasy.png'
            },
            {
                title: 'flappy monkey',
                git: 'https://github.com/benaor/Flappy-bird-ACS',
                urlLink: 'http://flappy.benaor.fr/',
                stack: 'JavaScript',
                img: 'flappy.png'
            },            
            {
                title: 'Snow',
                git: 'https://github.com/benaor/SNOW-ft.-SOLENE-',
                urlLink: 'https://snow.benaor.fr',
                stack: 'HTML/CSS (BOOTSTRAP)',
                img: 'snow.png'
            },
            {
                title: 'API Météo',
                git: 'https://github.com/benaor/meteo-API',
                urlLink: 'https://meteo.benaor.fr',
                stack: 'Javascript / AJAX',
                img: 'meteo.png'
            },
            {
                title: 'Love House',
                git: 'https://github.com/benaor/LOVE-HOUSE',
                urlLink: 'https://love-house.benaor.fr',
                stack: 'adobe XD, HTML/CSS (Bootstrap), Javascript',
                img: 'love-house.png'
            },
            {
                title: 'Albedo',
                git: 'https://github.com/benaor/ALBEDO',
                urlLink: 'https://albedo.benaor.fr',
                stack: 'HTML/CSS (Bootstrap)',
                img: 'albedo.png'
            },
            {
                title: 'Timer',
                git: 'https://github.com/benaor/Timer',
                urlLink: 'https://timer.benaor.fr',
                stack: 'JavaScript',
                img: 'timer.png'
            },
            {
                title: 'Generateur de citations',
                git: 'https://github.com/benaor/Quote-Generator',
                urlLink: 'https://citations.benaor.fr',
                stack: 'JavaScript',
                img: 'citation.png'
            },
            {
                title: 'Le juste prix',
                git: 'https://github.com/benaor/Just-Price',
                urlLink: 'https://juste-prix.benaor.fr',
                stack: 'JavaScript',
                img: 'justePrix.png'
            },
        ]
    }
})