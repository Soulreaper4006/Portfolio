import cocktail from '../assets/projects/cocktail.png'
import lensymphony from '../assets/projects/lensymphony.png'
import marathon from '../assets/projects/marathon.png'
import pacman from '../assets/projects/pacman.png'
import roadrage from '../assets/projects/roadrage.png'
import rollaball from '../assets/projects/rollaball.png'

export const projectImages = {
  cocktail,
  lensymphony,
  marathon,
  pacman,
  roadrage,
  rollaball,
}

export const translations = {
  fr: {
    nav: {
      home: 'Accueil',
      projects: 'Projets',
      cv: 'CV',
      contact: 'Contact',
    },
    hero: {
      hello: 'Salut, moi c’est',
      role: 'Étudiant en développement informatique',
      tagline: 'J’apprends, je code, je construis.',
      description:
        'Passionné par le développement web et la création d’applications utiles, je combine projets personnels, stage et autodidaxie pour progresser sur tous les fronts.',
      availability: 'Disponible pour un stage',
      downloadCv: 'Télécharger mon CV',
      viewProjects: 'Voir mes projets',
      skills: ['React', 'HTML / CSS', 'PHP', 'Spring Boot'],
      terminal: {
        whoami: 'whoami',
        skills: 'skills --list',
        mission: 'cat mission',
        build: 'npm run build',
        skillsList: 'react · php · spring · html/css',
        ok: '✓ 6 projets en ligne — déploiement automatique',
      },
    },
    projects: {
      kicker: '// projets',
      title: "Ce que j'ai construit",
      sub: 'Sélection de projets réalisés en autodidacte, en équipe et à l’école. Les sources sont sur GitHub.',
      code: 'Code',
      demo: 'Démo',
      codeSoon: 'Code à venir',
      items: {
        cocktail: {
          title: 'CocktailQuiz',
          description:
            'Un quiz interactif sur les cocktails utilisant Flask et une API externe.',
          tags: ['Python', 'Flask', 'API', 'Web'],
        },
        lensymphony: {
          title: 'LenSymphony',
          description:
            'Un synthétiseur capable de lire des fichiers XML pour jouer de la musique.',
          tags: ['Audio', 'XML', 'Synthétiseur', 'Java'],
        },
        marathon: {
          title: 'Marathon',
          description: 'Un projet développé en 24h en équipe.',
          tags: ['Développement', 'Open Source'],
        },
        pacman: {
          title: 'PacMan',
          description:
            'Un clone du célèbre jeu d’arcade PacMan, avec gestion des fantômes et du score.',
          tags: ['Game Dev', 'Java', 'Algorithmie'],
        },
        roadrage: {
          title: 'RoadRage',
          description: 'Un jeu multijoueur où chaos et vitesse se rencontrent.',
          tags: ['Unity', 'Game Dev', 'C#', 'Multijoueur'],
        },
        rollaball: {
          title: 'Rollaball',
          description: 'Un mini jeu d’arcade en 3D développé sur Unity.',
          tags: ['Unity', 'Game Dev', 'C#'],
        },
      },
    },
    resume: {
      kicker: '// cv',
      title: 'Parcours & compétences',
      downloadCv: 'Télécharger le CV (PDF)',
      experienceTitle: 'Expérience',
      educationTitle: 'Formation',
      skillsTitle: 'Compétences',
      languagesTitle: 'Langues',
      experience: [
        {
          title: 'Stage / projet de développement web',
          place: 'Entreprise ou organisation · Lieu',
          period: '20XX — 20XX',
          description:
            'Participation à la conception et au développement d’une application web. À compléter avec ton expérience réelle.',
          bullets: [
            'Développement d’interfaces et intégration d’API',
            'Utilisation de Git et de la revue de code',
            'Échanges avec l’équipe produit',
          ],
        },
      ],
      education: [
        {
          title: 'Formation en informatique',
          place: 'Établissement · Mention / Niveau',
          period: '20XX — 20XX',
          description:
            'Programmation, bases de données, développement web et architectures logicielles à travers projets et travaux pratiques.',
        },
      ],
      skills: [
        {
          group: 'Frontend',
          items: ['HTML / CSS', 'JavaScript', 'React', 'Tailwind CSS'],
        },
        {
          group: 'Backend',
          items: ['PHP', 'Laravel', 'Python', 'SQL', 'Spring Boot (en cours)'],
        },
        {
          group: 'Outils',
          items: ['Git / GitHub', 'JetBrains', 'VS Code'],
        },
      ],
      languages: [
        { name: 'Français', level: 'Natif' },
        { name: 'Anglais', level: 'Technique' },
      ],
    },
    contact: {
      kicker: '// contact',
      title: 'Envie de collaborer ou de discuter ?',
      text: 'Ouvert aux stages, projets et échanges. Mon inbox est toujours ouvert.',
      github: 'GitHub',
      linkedin: 'LinkedIn',
      discord: 'Discord',
      location: 'France',
      footer:
        'fait avec React. Le code est sur GitHub. Toutes les valeurs sont des placeholders à personnaliser.',
    },
  },

  en: {
    nav: {
      home: 'Home',
      projects: 'Projects',
      cv: 'Résumé',
      contact: 'Contact',
    },
    hero: {
      hello: 'Hi, I’m',
      role: 'Computer science student',
      tagline: 'I learn, I code, I build.',
      description:
        'Passionate about web development and building useful applications, I combine personal projects, an internship and self-learning to grow on every front.',
      availability: 'Available for an internship',
      downloadCv: 'Download my résumé',
      viewProjects: 'View my projects',
      skills: ['React', 'HTML / CSS', 'PHP', 'Spring Boot'],
      terminal: {
        whoami: 'whoami',
        skills: 'skills --list',
        mission: 'cat mission',
        build: 'npm run build',
        skillsList: 'react · php · spring · html/css',
        ok: '✓ 6 projects live — auto deploy',
      },
    },
    projects: {
      kicker: '// projects',
      title: 'What I’ve built',
      sub: 'A selection of projects built on my own, as a team and at school. Sources live on GitHub.',
      code: 'Code',
      demo: 'Demo',
      codeSoon: 'Code coming soon',
      items: {
        cocktail: {
          title: 'CocktailQuiz',
          description:
            'An interactive quiz on cocktails built with Flask and an external API.',
          tags: ['Python', 'Flask', 'API', 'Web'],
        },
        lensymphony: {
          title: 'LenSymphony',
          description:
            'A synthesizer capable of reading XML files to play music.',
          tags: ['Audio', 'XML', 'Synthesizer', 'Java'],
        },
        marathon: {
          title: 'Marathon',
          description: 'A project developed in 24h as a team.',
          tags: ['Development', 'Open Source'],
        },
        pacman: {
          title: 'PacMan',
          description:
            'A clone of the famous PacMan arcade game, with ghost management and scoring.',
          tags: ['Game Dev', 'Java', 'Algorithms'],
        },
        roadrage: {
          title: 'RoadRage',
          description: 'A multiplayer arcade racing game where chaos and speed meet.',
          tags: ['Unity', 'Game Dev', 'C#', 'Multiplayer'],
        },
        rollaball: {
          title: 'Rollaball',
          description: 'A 3D arcade mini-game developed on Unity.',
          tags: ['Unity', 'Game Dev', 'C#'],
        },
      },
    },
    resume: {
      kicker: '// resume',
      title: 'Background & skills',
      downloadCv: 'Download résumé (PDF)',
      experienceTitle: 'Experience',
      educationTitle: 'Education',
      skillsTitle: 'Skills',
      languagesTitle: 'Languages',
      experience: [
        {
          title: 'Web development internship / project',
          place: 'Company or organization · Location',
          period: '20XX — 20XX',
          description:
            'Contributed to the design and development of a web app. Fill in your real experience here.',
          bullets: [
            'Built interfaces and integrated APIs',
            'Used Git and code review workflows',
            'Collaborated with the product team',
          ],
        },
      ],
      education: [
        {
          title: 'Computer science studies',
          place: 'Institution · Major / Level',
          period: '20XX — 20XX',
          description:
            'Programming, databases, web development and software architecture through projects and labs.',
        },
      ],
      skills: [
        {
          group: 'Frontend',
          items: ['HTML / CSS', 'JavaScript', 'React', 'Tailwind CSS'],
        },
        {
          group: 'Backend',
          items: ['PHP', 'Laravel', 'Python', 'SQL', 'Spring Boot (learning)'],
        },
        {
          group: 'Tools',
          items: ['Git / GitHub', 'JetBrains', 'VS Code'],
        },
      ],
      languages: [
        { name: 'French', level: 'Native' },
        { name: 'English', level: 'Technical' },
      ],
    },
    contact: {
      kicker: '// contact',
      title: 'Want to collaborate or chat?',
      text: 'Open to internships, projects and conversations. My inbox is always open.',
      github: 'GitHub',
      linkedin: 'LinkedIn',
      discord: 'Discord',
      location: 'France',
      footer:
        'built with React. The code lives on GitHub. All values are placeholders to customize.',
    },
  },
}