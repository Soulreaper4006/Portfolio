import { projects } from '../data/projects'
import Reveal from './Reveal'

function CodeIcon() {
  return (
    <svg viewBox="0 0 24 24" width="16" height="16" aria-hidden="true" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
      <path d="m8 9-4 3 4 3M16 9l4 3-4 3M13 5l-2 14" />
    </svg>
  )
}

function ExternalIcon() {
  return (
    <svg viewBox="0 0 24 24" width="16" height="16" aria-hidden="true" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
      <path d="M15 3h6v6M10 14 21 3M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
    </svg>
  )
}

const emojiByIndex = ['💻', '🛠️', '🌐', '✨']

export default function Projects() {
  return (
    <section id="projets" className="section">
      <div className="container">
        <Reveal className="section__head">
          <p className="kicker">// projets</p>
          <h2>Ce que j’ai construit</h2>
          <p className="section__sub">
            Quelques projets réalisés en stage, en cours et en autodidacte. Les liens
            s’activeront au fil de tes commits GitHub.
          </p>
        </Reveal>

        <div className="projects__grid">
          {projects.map((project, index) => (
            <Reveal key={project.title} delay={index * 80} className="project-card">
              <div className="project-card__top">
                <span className="project-card__emoji" aria-hidden="true">
                  {emojiByIndex[index % emojiByIndex.length]}
                </span>
                <span className={`badge badge--${project.statusTone}`}>{project.status}</span>
              </div>
              <p className="project-card__backlog">{project.backlog}</p>
              <h3 className="project-card__title">{project.title}</h3>
              <p className="project-card__desc">{project.description}</p>
              <ul className="project-card__tags" aria-label="Technologies">
                {project.tags.map((tag) => (
                  <li key={tag}>{tag}</li>
                ))}
              </ul>
              <div className="project-card__links">
                {project.links.code ? (
                  <a href={project.links.code} target="_blank" rel="noreferrer">
                    <CodeIcon />
                    Code
                  </a>
                ) : (
                  <span className="project-card__muted">Code à venir</span>
                )}
                {project.links.demo ? (
                  <a href={project.links.demo} target="_blank" rel="noreferrer">
                    <ExternalIcon />
                    Démo
                  </a>
                ) : null}
              </div>
            </Reveal>
          ))}
        </div>
      </div>
    </section>
  )
}