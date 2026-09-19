import { useEffect, useMemo, useState } from 'react'
import { LanguageContext } from './context'
import { translations } from './translations'

export default function LanguageProvider({ children }) {
  const [lang, setLang] = useState(() => {
    const stored = typeof window !== 'undefined' ? window.localStorage.getItem('lang') : null
    return stored === 'en' ? 'en' : 'fr'
  })

  useEffect(() => {
    window.localStorage.setItem('lang', lang)
    document.documentElement.lang = lang
  }, [lang])

  const value = useMemo(() => ({ lang, setLang, t: translations[lang] }), [lang])

  return <LanguageContext.Provider value={value}>{children}</LanguageContext.Provider>
}