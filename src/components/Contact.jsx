import { site } from '../data/site'
import { useLang } from '../i18n/useLang'
import Reveal from './Reveal'

function ArrowIcon() {
  return (
    <svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
      <path d="M5 12h14M12 5l7 7-7 7" />
    </svg>
  )
}

export default function Contact() {
  const { t } = useLang()
  const c = t.contact
  const year = new Date().getFullYear()

  return (
    <section id="contact" className="contact">
      <div className="container contact__inner">
        <Reveal className="contact__card">
          <p className="kicker">{c.kicker}</p>
          <h2>{c.title}</h2>
          <p className="contact__text">{c.text}</p>
          <a className="btn btn--primary btn--lg" href={`mailto:${site.email}`}>
            {site.email}
            <ArrowIcon />
          </a>

          <div className="contact__meta">
            <span>{c.location}</span>
            <span aria-hidden="true">·</span>
            <a href={site.socials.github} target="_blank" rel="noreferrer">
              {c.github}
            </a>
            <span aria-hidden="true">·</span>
            <a href={site.socials.linkedin} target="_blank" rel="noreferrer">
              {c.linkedin}
            </a>
            <span aria-hidden="true">·</span>
            <span title={site.socials.discord}>
              {c.discord} · {site.socials.discord}
            </span>
          </div>
        </Reveal>
      </div>
      <footer className="footer">
        <div className="container footer__inner">
          <p>
            © {year} {site.firstName} — {c.footer}
          </p>
        </div>
      </footer>
    </section>
  )
}