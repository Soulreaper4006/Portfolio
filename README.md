# Portfolio — Étudiant en informatique

Portfolio personnel construit avec React + Vite.

## Commandes

```bash
npm install      # installer les dépendances
npm run dev      # serveur de dev local
npm run build    # build de production (dossier dist/)
npm run preview  # prévisualiser le build
npm run lint     # oxlint
```

## Personnaliser

Tout le contenu éditable est centralisé dans `src/data/` :

- `profile.js` — nom, rôle, description, email, réseaux, skills, lien CV
- `projects.js` — cartes de la section Projets
- `resume.js` — expérience, formation, compétences, langues

Le design et les composants sont dans `src/` (`components/`, `App.css`).

## Déploiement

Push sur GitHub puis import du repo dans Vercel / Netlify / GitHub Pages : build automatique, hébergement gratuit.