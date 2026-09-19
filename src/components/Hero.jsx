import { profile } from '../data/profile'
import Reveal from './Reveal'

function GitHubIcon() {
  return (
    <svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true" fill="currentColor">
      <path d="M12 .5C5.7.5.5 5.7.5 12c0 5.1 3.3 9.4 7.9 10.9.6.1.8-.2.8-.6v-2c-3.2.7-3.9-1.4-3.9-1.4-.5-1.3-1.3-1.7-1.3-1.7-1-.7.1-.7.1-.7 1.2.1 1.8 1.2 1.8 1.2 1 1.8 2.7 1.3 3.4 1 .1-.8.4-1.3.7-1.6-2.6-.3-5.3-1.3-5.3-5.7 0-1.3.4-2.3 1.2-3.1-.1-.3-.5-1.5.1-3.1 0 0 1-.3 3.2 1.2a11 11 0 0 1 5.8 0C17.3 4.6 18.3 5 18.3 5c.6 1.6.2 2.8.1 3.1.7.8 1.2 1.8 1.2 3.1 0 4.4-2.7 5.4-5.3 5.7.4.4.8 1.1.8 2.2v3.3c0 .3.2.7.8.6 4.6-1.5 7.9-5.8 7.9-10.9C23.5 5.7 18.3.5 12 .5Z" />
    </svg>
  )
}

function LinkedInIcon() {
  return (
    <svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true" fill="currentColor">
      <path d="M20.45 20.45h-3.55v-5.57c0-1.33-.03-3.04-1.85-3.04-1.86 0-2.14 1.45-2.14 2.94v5.67H9.35V9h3.41v1.56h.05c.48-.9 1.64-1.85 3.37-1.85 3.6 0 4.27 2.37 4.27 5.46v6.28ZM5.34 7.43a2.06 2.06 0 1 1 0-4.12 2.06 2.06 0 0 1 0 4.12Zm1.78 13.02H3.56V9h3.56v11.45ZM22.22 0H1.77C.79 0 0 .77 0 1.72v20.56C0 23.23.79 24 1.77 24h20.45c.98 0 1.78-.77 1.78-1.72V1.72C24 .77 23.2 0 22.22 0Z" />
    </svg>
  )
}

function MailIcon() {
  return (
    <svg viewBox="0 0 24 24" width="20" height="20" aria-hidden="true" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
      <rect x="2" y="4" width="20" height="16" rx="2" />
      <path d="m22 7-10 6L2 7" />
    </svg>
  )
}

const socials = [
  { name: 'GitHub', href: profile.socials.github, icon: GitHubIcon },
  { name: 'LinkedIn', href: profile.socials.linkedin, icon: LinkedInIcon },
  { name: 'Email', href: `mailto:${profile.email}`, icon: MailIcon },
]

export default function Hero() {
  return (
    <section id="accueil" className="hero">
      <div className="hero__inner container">
        <Reveal className="hero__text">
          <p className="hero__badge">
            <span className="hero__dot" aria-hidden="true" />
            {profile.availability.label}
          </p>

          <h1 className="hero__title">
            <span className="hero__hello">Salut, moi c’est</span>
            <span className="hero__gradient">{profile.name}</span>
          </h1>

          <p className="hero__role">{profile.role}</p>
          <p className="hero__desc">{profile.description}</p>

          <ul className="hero__chips" aria-label="Compétences principales">
            {profile.skills.map((skill) => (
              <li key={skill}>
                <span className="hero__chip">{skill}</span>
              </li>
            ))}
          </ul>

          <div className="hero__actions">
            <a className="btn btn--primary" href="#projets">
              Voir mes projets
            </a>
            <a className="btn btn--ghost" href={profile.cv} download>
              Télécharger mon CV
            </a>
          </div>

          <ul className="hero__socials" aria-label="Réseaux et contact">
            {socials.map(({ name, href, icon: Icon }) => (
              <li key={name}>
                <a href={href} target="_blank" rel="noreferrer" aria-label={name}>
                  <Icon />
                  <span>{name}</span>
                </a>
              </li>
            ))}
          </ul>
        </Reveal>

        <Reveal className="hero__visual" delay={120}>
          <div className="terminal" aria-hidden="true">
            <div className="terminal__bar">
              <span className="terminal__dot terminal__dot--red" />
              <span className="terminal__dot terminal__dot--yellow" />
              <span className="terminal__dot terminal__dot--green" />
              <span className="terminal__title">prenom.nom — zsh</span>
            </div>
            <div className="terminal__body">
              <p>
                <span className="terminal__prompt">~/portfolio</span> whoami
              </p>
              <p className="terminal__out">{profile.role.toLowerCase()}</p>
              <p>
                <span className="terminal__prompt">~/portfolio</span> skills --list
              </p>
              <p className="terminal__out">react · php · spring · html/css</p>
              <p>
                <span className="terminal__prompt">~/portfolio</span> cat mission
              </p>
              <p className="terminal__out">“ {profile.tagline} ”</p>
              <p>
                <span className="terminal__prompt">~/portfolio</span> npm run build
                <span className="terminal__cursor" />
              </p>
              <p className="terminal__ok">✓ 3 projets en ligne — déploiement automatique</p>
            </div>
          </div>
        </Reveal>
      </div>
    </section>
  )
}