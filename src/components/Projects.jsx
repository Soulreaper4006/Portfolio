import { useLang } from '../i18n/useLang'
import { projectImages } from '../i18n/translations'
import { projectLinks } from '../data/projectLinks'
import Reveal from './Reveal'

function CodeIcon() {
  return (
    <svg viewBox="0 0 24 24" width="16" height="16" aria-hidden="true" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
      <path d="m8 9-4 3 4 3M16 9l4 3-4 3M13 5l-2 14" />
    </svg>
  )
}

const slugs = Object.keys(projectImages)

export default function Projects() {
  const { t } = useLang()
  const p = t.projects

  return (
    <section id="projets" className="section">
      <div className="container">
        <Reveal className="section__head">
          <p className="kicker">{p.kicker}</p>
          <h2>{p.title}</h2>
          <p className="section__sub">{p.sub}</p>
        </Reveal>

        <div className="projects__grid">
          {slugs.map((slug, index) => {
            const item = p.items[slug]
            const link = projectLinks[slug]?.code
            return (
              <Reveal key={slug} delay={index * 60} className="project-card">
                <div className="project-card__media">
                  <img src={projectImages[slug]} alt={item.title} loading="lazy" />
                </div>
                <div className="project-card__body">
                  <h3 className="project-card__title">{item.title}</h3>
                  <p className="project-card__desc">{item.description}</p>
                  <ul className="project-card__tags" aria-label="Technologies">
                    {item.tags.map((tag) => (
                      <li key={tag}>{tag}</li>
                    ))}
                  </ul>
                  <div className="project-card__links">
                    {link ? (
                      <a href={link} target="_blank" rel="noreferrer">
                        <CodeIcon />
                        {p.code}
                      </a>
                    ) : (
                      <span className="project-card__muted">{p.codeSoon}</span>
                    )}
                  </div>
                </div>
              </Reveal>
            )
          })}
        </div>
      </div>
    </section>
  )
}