# Mon Portfolio

Bienvenue sur le dépôt de mon portfolio personnel. Ce projet a été réalisé avec **Laravel** et présente mon parcours, mes compétences ainsi que mes différents projets de développement.

## Fonctionnalités

-   **Présentation** : Page d'accueil introduisant mon profil et mes compétences.
-   **Projets** : Section détaillée listant mes réalisations (Jeux vidéo, Applications Web, Logiciels) avec des pages dédiées pour chaque projet.
-   **CV Interactif** : Visualisation et téléchargement de mon CV au format PDF.
-   **Multilingue** : Le site est entièrement traduit en Français et en Anglais (changement de langue via le menu).
-   **Design** : Interface moderne, responsive et thème sombre ("Space Theme") réalisé avec Tailwind CSS.

## Projets Présentés

Le portfolio met en avant plusieurs projets techniques, notamment :

-   **PacMan** : Reproduction du célèbre jeu d'arcade (Java/Algorithmie).
-   **Marathon** : Projet de développement collaboratif (Open Source).
-   **LenSymphony** : Synthétiseur audio capable de lire des partitions XML (Java).
-   **CocktailQuiz** : Application web de quiz utilisant une API externe (Python/Flask).
-   **Rollaball** : Mini-jeu d'arcade 3D (Unity/C#).
-   **RoadRage** : Jeu de course multijoueur (Unity/C#).


## Installation

Pour lancer ce projet localement :

1.  **Cloner le dépôt** :
    ```bash
    git clone <votre-url-repo>
    cd Portfolio
    ```

2.  **Installer les dépendances** :
    ```bash
    composer install
    npm install
    ```

3.  **Configuration** :
    Copiez le fichier `.env.example` vers `.env` et configurez votre base de données si nécessaire (bien que ce portfolio utilise peu de BDD pour l'instant).
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4.  **Lancer le serveur** :
    ```bash
    php artisan serve
    ```
    Et dans un autre terminal pour les assets (si besoin de compiler) :
    ```bash
    npm run dev
    ```

## CV et Images

Les fichiers PDF du CV doivent être placés dans `public/pdf/` :
-   `CV_francais.pdf`
-   `CV_anglais.pdf`

Les images des projets se trouvent dans `public/images/`.

---
*Réalisé par [Dassonville Ugo]*
