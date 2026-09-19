import Navbar from './components/Navbar'
import Hero from './components/Hero'
import Projects from './components/Projects'
import Resume from './components/Resume'
import Contact from './components/Contact'
import './App.css'

export default function App() {
  return (
    <>
      <Navbar />
      <main>
        <Hero />
        <Projects />
        <Resume />
      </main>
      <Contact />
    </>
  )
}