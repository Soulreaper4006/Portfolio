import { resume } from '../data/resume'
import { profile } from '../data/profile'
import Reveal from './Reveal'

function Timeline({ items, kind }) {
  return (
    <div className="timeline">
      {items.map((item, index) => (
        <article key={`${kind}-${item.title}`} className="timeline__item">
          <div className="timeline__marker" aria-hidden="true" />
          <p className="timeline__period">{item.period}</p>
          <h3 className="timeline__title">{item.title}</h3>
          <p className="timeline__place">{item.place}</p>
          {item.description ? <p className="timeline__desc">{item.description}</p> : null}
          {item.bullets ? (
            <ul className="timeline__bullets">
              {item.bullets.map((bullet, i) => (
                <li key={i}>{bullet}</li>
              ))}
            </ul>
          ) : null}
          {index < items.length - 1 ? <span className="timeline__line" aria-hidden="true" /> : null}
        </article>
      ))}
    </div>
  )
}

export default function Resume() {
  return (
    <section id="cv" className="section section--alt">
      <div className="container">
        <Reveal className="section__head">
          <p className="kicker">// cv</p>
          <div className="section__head-row">
            <h2>Parcours &amp; compétences</h2>
            <a className="btn btn--primary btn--sm" href={profile.cv} download>
              Télécharger le CV (PDF)
            </a>
          </div>
        </Reveal>

        <div className="resume__grid">
          <Reveal className="resume__col">
            <h3 className="resume__col-title">
              <span aria-hidden="true">▹</span> Expérience
            </h3>
            <Timeline items={resume.experience} kind="exp" />

            <h3 className="resume__col-title">
              <span aria-hidden="true">▹</span> Formation
            </h3>
            <Timeline items={resume.education} kind="edu" />
          </Reveal>

          <Reveal delay={100} className="resume__col">
            <h3 className="resume__col-title">
              <span aria-hidden="true">▹</span> Compétences
            </h3>
            <div className="skills">
              {resume.skills.map((group) => (
                <div key={group.group} className="skills__group">
                  <p className="skills__group-label">{group.group}</p>
                  <ul className="skills__chips">
                    {group.items.map((item) => (
                      <li key={item}>{item}</li>
                    ))}
                  </ul>
                </div>
              ))}
            </div>

            <h3 className="resume__col-title">
              <span aria-hidden="true">▹</span> Langues
            </h3>
            <ul className="langs">
              {resume.languages.map((lang) => (
                <li key={lang.name}>
                  <span>{lang.name}</span>
                  <span className="langs__level">{lang.level}</span>
                </li>
              ))}
            </ul>
          </Reveal>
        </div>
      </div>
    </section>
  )
}