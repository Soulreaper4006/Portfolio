import { site } from '../data/site'
import { useLang } from '../i18n/useLang'
import Reveal from './Reveal'

function Timeline({ items }) {
  return (
    <div className="timeline">
      {items.map((item, index) => (
        <article key={`${item.title}-${index}`} className="timeline__item">
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
  const { t } = useLang()
  const r = t.resume

  return (
    <section id="cv" className="section section--alt">
      <div className="container">
        <Reveal className="section__head">
          <p className="kicker">{r.kicker}</p>
          <div className="section__head-row">
            <h2>{r.title}</h2>
            <a className="btn btn--primary btn--sm" href={site.cv} download>
              {r.downloadCv}
            </a>
          </div>
        </Reveal>

        <div className="resume__grid">
          <Reveal className="resume__col">
            <h3 className="resume__col-title">
              <span aria-hidden="true">▹</span> {r.experienceTitle}
            </h3>
            <Timeline items={r.experience} />

            <h3 className="resume__col-title">
              <span aria-hidden="true">▹</span> {r.educationTitle}
            </h3>
            <Timeline items={r.education} />
          </Reveal>

          <Reveal delay={100} className="resume__col">
            <h3 className="resume__col-title">
              <span aria-hidden="true">▹</span> {r.skillsTitle}
            </h3>
            <div className="skills">
              {r.skills.map((group) => (
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
              <span aria-hidden="true">▹</span> {r.languagesTitle}
            </h3>
            <ul className="langs">
              {r.languages.map((lang) => (
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