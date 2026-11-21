# Federico Huerta - Personal Portfolio

A modern, responsive personal portfolio website built with SvelteKit and Tailwind CSS, showcasing my projects, cloud/QA experience, and technical stack as a **Cloud & QA Engineer**. The site features trilingual support (**German, English, and Spanish**), interactive desktop particle animations, and optimized mobile performance.

Inspired by and adapted from:
[SvelteKit & TailwindCSS Tutorial – Build & Deploy a Web Portfolio](https://www.youtube.com/watch?v=-2UjwQzxvBQ)
by @Smoljames.

## Live Demo

- **German Version**: [https://huerta-federico.github.io/German](https://huerta-federico.github.io/German)
- **English Version**: [https://huerta-federico.github.io/English](https://huerta-federico.github.io/English)
- **Spanish Version**: [https://huerta-federico.github.io/](https://huerta-federico.github.io/)

## Features

- **Trilingual Support (DE / EN / ES)**: Complete German, English, and Spanish versions with a compact pill switcher for seamless navigation between languages
- **Responsive Design**: Tailored layouts from mobile screens to wide desktop monitors
- **Adaptive Animated Background**: Interactive particle system on desktop, disabled on mobile for smooth performance
- **Modern UI/UX**: Clean dark-slate aesthetic with violet accents, smooth transitions, and hover micro-interactions
- **Accessibility & SEO**: Semantic heading hierarchy, ARIA labels, keyboard navigation, and Open Graph metadata

## Tech Stack

### Frontend Framework

- **SvelteKit** - Full-stack web application framework
- **Tailwind CSS** - Utility-first CSS framework for styling
- **JavaScript (ES6+)** - Modern JavaScript features

### External Libraries

- **Particles.js** - Interactive particle system for desktop background animation
- **Font Awesome 6.0** - Icon library for UI elements
- **Google Fonts** - Roboto and Poppins font families

### Development & Deployment

- **Node.js** - Runtime environment for build and post-processing scripts
- **GitHub Pages** - Static site hosting
- **GitHub Actions** - Automated CI/CD deployment pipeline
- **Vite** - Build tool and development server

## Project Structure

```text
├── docs/                              # Build directory
├── src/
│   ├── components/
│   │   ├── English/
│   │   │   ├── Footer_eng.svelte
│   │   │   ├── Header_eng.svelte
│   │   │   └── Main_eng.svelte    # English main content
│   │   ├── German/
│   │   │   ├── Footer_de.svelte
│   │   │   ├── Header_de.svelte
│   │   │   └── Main_de.svelte     # German main content
│   │   ├── Spanish/
│   │   │   ├── Footer_spa.svelte
│   │   │   ├── Header_spa.svelte
│   │   │   └── Main_spa.svelte    # Spanish main content
│   │   └── Step.svelte            # Project showcase card component
│   ├── lib/                       # Assets, icons
│   ├── routes/
│   │   ├── +layout.js
│   │   ├── +layout.svelte         # Main layout wrapper
│   │   ├── +page.svelte           # Spanish home page
│   │   ├── English/
│   │   │   └── +page.svelte       # English home page
│   │   └── German/
│   │       └── +page.svelte       # German home page
│   ├── app.html                   # HTML template with particles.js
│   └── app.css                    # Imported CSS and custom styles
├── static/
│   ├── assets/
│   │   └── particles.json         # Particle animation configuration
│   └── ...
├── package.json
└── ...