import { useEffect, useState } from 'react'
import { useLang } from '../i18n/useLang'
import { site } from '../data/site'

export default function Navbar() {
  const { lang, setLang, t } = useLang()
  const [scrolled, setScrolled] = useState(false)
  const [open, setOpen] = useState(false)

  useEffect(() => {
    const onScroll = () => setScrolled(window.scrollY > 12)
    onScroll()
    window.addEventListener('scroll', onScroll, { passive: true })
    return () => window.removeEventListener('scroll', onScroll)
  }, [])

  const links = [
    { label: t.nav.home, href: '#accueil' },
    { label: t.nav.projects, href: '#projets' },
    { label: t.nav.cv, href: '#cv' },
    { label: t.nav.contact, href: '#contact' },
  ]

  return (
    <header className={`nav ${scrolled ? 'nav--scrolled' : ''}`}>
      <div className="nav__inner">
        <a href="#accueil" className="nav__brand" onClick={() => setOpen(false)}>
          <span className="nav__logo" aria-hidden="true">
            {'</>'}
          </span>
          <span>{site.firstName}</span>
        </a>

        <nav className={`nav__links ${open ? 'nav__links--open' : ''}`} aria-label="Navigation principale">
          {links.map((link) => (
            <a key={link.href} href={link.href} onClick={() => setOpen(false)}>
              {link.label}
            </a>
          ))}
        </nav>

        <div className={`nav__lang ${open ? 'nav__lang--open' : ''}`} role="group" aria-label="Langue">
          <button
            type="button"
            className={lang === 'fr' ? 'is-active' : ''}
            onClick={() => setLang('fr')}
            aria-pressed={lang === 'fr'}
          >
            FR
          </button>
          <button
            type="button"
            className={lang === 'en' ? 'is-active' : ''}
            onClick={() => setLang('en')}
            aria-pressed={lang === 'en'}
          >
            EN
          </button>
        </div>

        <button
          type="button"
          className={`nav__toggle ${open ? 'nav__toggle--open' : ''}`}
          aria-label={open ? 'Fermer le menu' : 'Ouvrir le menu'}
          aria-expanded={open}
          onClick={() => setOpen((v) => !v)}
        >
          <span />
          <span />
          <span />
        </button>
      </div>
    </header>
  )
}