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
      availability: 'Recherche un stage ou une alternance',
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
          title: 'Stage — Développement d’une application web & mobile',
          place: 'Horney Dog Shop · Tourcoing',
          period: 'Avr. 2026 — Juin 2026',
          bullets: [
            'Développement d’une application web et mobile de gestion de stock de produits et matières premières.',
            'Interface réalisée avec React + Next.js, persistance des données sur une base PostgreSQL.',
            'Suivi de la demande du client et ajustements au fil du développement.',
          ],
        },
      ],
      education: [
        {
          title: 'BUT Informatique — 3e année',
          place: 'IUT de Lens',
          period: 'Sept. 2024 — Aujourd’hui',
        },
        {
          title: 'Baccalauréat général',
          place: 'Lycée Henri Darras · Liévin',
          period: '2024',
          bullets: ['Spécialités Mathématiques et Numérique et Sciences Informatiques (NSI).'],
        },
      ],
      skills: [
        {
          group: 'Langages',
          items: ['Python', 'Java', 'C++', 'JavaScript'],
        },
        {
          group: 'Développement web',
          items: ['HTML', 'CSS', 'PHP', 'React', 'Next.js'],
        },
        {
          group: 'Bases de données',
          items: ['SQL', 'PostgreSQL', 'MySQL', 'MongoDB'],
        },
        {
          group: 'Jeux & interfaces',
          items: ['Unity', 'Blender', 'JavaFX', 'SceneBuilder'],
        },
        {
          group: 'Outils',
          items: ['Git / GitHub', 'GitLab', 'Docker', 'JetBrains', 'VS Code'],
        },
      ],
      languages: [
        { name: 'Français', level: 'Natif' },
        { name: 'Anglais', level: 'Courant (technique)' },
      ],
    },
    contact: {
      kicker: '// contact',
      title: 'Envie de collaborer ou de discuter ?',
      text: 'Ouvert à un stage (mars 2027) ou une alternance (dès maintenant), projets et échanges. Mon inbox est toujours ouvert.',
      github: 'GitHub',
      linkedin: 'LinkedIn',
      discord: 'Discord',
      location: 'France',
      footer:
        'fait avec React · le code est sur GitHub',
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
      availability: 'Seeking an internship or work-study',
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
          title: 'Internship — Web & Mobile Application Development',
          place: 'Horney Dog Shop · Tourcoing',
          period: 'Apr 2026 — Jun 2026',
          bullets: [
            'Built a web and mobile application to manage inventory of products and raw materials.',
            'UI developed with React + Next.js, data persisted in a PostgreSQL database.',
            'Gathered client requirements and iterated throughout the development process.',
          ],
        },
      ],
      education: [
        {
          title: 'BUT Informatique — 3rd year',
          place: 'IUT de Lens',
          period: 'Sep 2024 — Present',
        },
        {
          title: 'French General Baccalaureate',
          place: 'Lycée Henri Darras · Liévin',
          period: '2024',
          bullets: ['Majors in Mathematics and Computer Science (NSI).'],
        },
      ],
      skills: [
        {
          group: 'Languages',
          items: ['Python', 'Java', 'C++', 'JavaScript'],
        },
        {
          group: 'Web development',
          items: ['HTML', 'CSS', 'PHP', 'React', 'Next.js'],
        },
        {
          group: 'Databases',
          items: ['SQL', 'PostgreSQL', 'MySQL', 'MongoDB'],
        },
        {
          group: 'Games & UI',
          items: ['Unity', 'Blender', 'JavaFX', 'SceneBuilder'],
        },
        {
          group: 'Tools',
          items: ['Git / GitHub', 'GitLab', 'Docker', 'JetBrains', 'VS Code'],
        },
      ],
      languages: [
        { name: 'French', level: 'Native' },
        { name: 'English', level: 'Fluent (technical)' },
      ],
    },
    contact: {
      kicker: '// contact',
      title: 'Want to collaborate or chat?',
      text: 'Open to an internship (March 2027) or a work-study position (starting now), projects and conversations. My inbox is always open.',
      github: 'GitHub',
      linkedin: 'LinkedIn',
      discord: 'Discord',
      location: 'France',
      footer:
        'built with React · the code lives on GitHub',
    },
  },
}