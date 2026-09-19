import { profile } from '../data/profile'
import Reveal from './Reveal'

function ArrowIcon() {
  return (
    <svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
      <path d="M5 12h14M12 5l7 7-7 7" />
    </svg>
  )
}

export default function Contact() {
  return (
    <section id="contact" className="contact">
      <div className="container contact__inner">
        <Reveal className="contact__card">
          <p className="kicker">// contact</p>
          <h2>Envie de collaborer ou de discuter ?</h2>
          <p className="contact__text">
            Ouvert aux stages, projets et échanges. Mon inbox est toujours ouvert.
          </p>
          <a className="btn btn--primary btn--lg" href={`mailto:${profile.email}`}>
            {profile.email}
            <ArrowIcon />
          </a>

          <div className="contact__meta">
            <span>{profile.location}</span>
            <span aria-hidden="true">·</span>
            <a href={profile.socials.github} target="_blank" rel="noreferrer">
              GitHub
            </a>
            <span aria-hidden="true">·</span>
            <a href={profile.socials.linkedin} target="_blank" rel="noreferrer">
              LinkedIn
            </a>
          </div>
        </Reveal>
      </div>
      <footer className="footer">
        <div className="container footer__inner">
          <p>
            © {new Date().getFullYear()} {profile.name.split(' ')[0]} — fait avec React. Le
            code est sur GitHub.
          </p>
        </div>
      </footer>
    </section>
  )
}