# Portfolio — Ugo Dassonville

Portfolio personnel (maquette FR/EN) construit avec React + Vite, hébergement prévu sur Vercel / Netlify / GitHub Pages (gratuit).

## Commandes

```bash
npm install      # installer les dépendances
npm run dev      # serveur de dev local
npm run build    # build de production (dossier dist/)
npm run preview  # prévisualiser le build
npm run lint     # oxlint
```

## Personnaliser

- `src/i18n/translations.js` — **tout le contenu textuel** du site (hero, projets, CV, contact) en FR **et** EN. Les titres/descriptions de projets viennent de l'ancien portfolio (PHP/Laravel).
- `src/data/site.js` — coordonnées réelles (nom, email, GitHub, LinkedIn, lien du CV).
- `src/data/projectLinks.js` — liens GitHub de chaque projet (retrouvés dans l'ancien controller).
- `src/assets/projects/` — captures d'écran des projets ; `src/assets/pfp.jpg` — photo de profil.
- `public/` — dépose ton CV ici (ex: `cv.pdf`) et renseigne `site.cv`.

## Déploiement

Push sur GitHub puis import du repo dans Vercel / Netlify / GitHub Pages : build automatique, hébergement gratuit.