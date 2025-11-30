# Federico Huerta - Personal Portfolio

A modern, responsive personal portfolio website built with SvelteKit and Tailwind CSS, showcasing my projects, skills, and experience as an IT Engineer. The site features bilingual support (English/Spanish), animated backgrounds, and optimized mobile performance.

I built this project following this tutorial:
[SvelteKit & TailwindCSS Tutorial – Build & Deploy a Web Portfolio](https://www.youtube.com/watch?v=-2UjwQzxvBQ)
by @Smoljames. Thank you!

## Live Demo

**English Version**: [https://huerta-federico.github.io/English](https://huerta-federico.github.io/English)  
**Spanish Version**: [https://huerta-federico.github.io/](https://huerta-federico.github.io/)

## Features

- **Bilingual Support**: Complete English and Spanish versions with seamless navigation between languages
- **Responsive Design**: Optimized for all screen sizes from mobile to desktop
- **Animated Background**: Interactive particle system on desktop but disabled on mobile for optimal performance
- **Modern UI/UX**: Clean, professional design with smooth animations and hover effects
- **Performance Optimized**: Mobile-first approach with performance detection and adaptive content loading
- **Accessibility**: Semantic HTML structure with proper ARIA labels and keyboard navigation

## Tech Stack

### Frontend Framework\

- **SvelteKit** - Full-stack web application framework
- **Tailwind CSS** - Utility-first CSS framework for styling
- **JavaScript (ES6+)** - Modern JavaScript features

### External Libraries

- **Particles.js** - Interactive particle system for desktop background animation
- **Font Awesome 6.0** - Icon library for UI elements
- **Google Fonts** - Roboto and Poppins font families

### Development & Deployment

- **Node.js** - Runtime environment for build tools
- **GitHub Pages** - Static site hosting
- **GitHub Actions** - Automated CI/CD pipeline
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
│   │   ├── Spanish/
│   │   │   ├── Footer_spa.svelte
│   │   │   ├── Header_spa.svelte
│   │   │   └── Main_spa.svelte    # Spanish main content
│   │   └── Step.svelte            # Project showcase component
│   ├── lib/                       # Assets, icons
│   ├── routes/
│   │   ├── +layout.js
│   │   ├── +layout.svelte         # Main layout wrapper
│   │   ├── +page.svelte           # Spanish home page
│   │   └── English/
│   │       └── +page.svelte       # English home page
│   ├── app.html                   # HTML template with particles.js
│   ├── app.css                    # Imported CSS and custom styles
├── static/
│   ├── assets/
│   │   └── particles.json             # Particle animation configuration
│   └── ...
├── package.json
└── ...
```

## Design Features

### Responsive Navigation

- **Desktop**: Horizontal navigation with smooth hover effects
- **Mobile**: Hamburger menu with full-screen overlay and animated icon transitions

### Project Showcase

- **Grid Layout**: 2-column responsive grid
- **Interactive Cards**: Hover effects and external links to GitHub repositories and demos
- **Detailed Descriptions**: Technical stack highlights and project accomplishments

### Performance Optimizations

- **Device Detection**: Automatic detection of mobile devices and low-performance hardware
- **Adaptive Animations**: Full particle system on desktop, disabled on mobile
- **Optimized Assets**: Compressed images and efficient resource loading

## Getting Started

### Prerequisites

- Node.js
- npm

### Installation

1. **Clone the repository**

   ```bash
   git clone https://github.com/huerta-federico/huerta-federico.github.io.git
   cd huerta-federico.github.io
   ```

2. **Install dependencies**

   ```bash
   npm install
   ```

3. **Start development server**

   ```bash
   npm run dev -- --open
   ```

### Available Scripts

- `npm run dev` - Start development server with hot reload
- `npm run build` - Build production version
- `npm run preview` - Preview production build locally
- `npm run check` - Run SvelteKit type checking
- `npm run lint` - Run ESLint code linting

## Deployment

The site is automatically deployed using GitHub Actions:

1. **Push to main branch** triggers the deployment workflow
2. **Build process** compiles SvelteKit app for static hosting
3. **GitHub Pages** serves the built files from the `gh-pages` branch
4. **Custom domain** (optional) can be configured in repository settings

### Deployment Configuration

- **Static Adapter**: Uses `@sveltejs/adapter-static` for GitHub Pages compatibility
- **Base Path**: Configured for GitHub Pages subdirectory hosting
- **Asset Optimization**: Automatic minification and optimization during build

## Key Sections

### Hero Section

- Professional introduction with animated text
- Call-to-action button with hover effects
- Clean, minimal design focusing on content

### Projects Gallery

- 5 featured projects with detailed descriptions
- External links to GitHub repositories and live demos
- Technical stack highlighting with color-coded emphasis

### About Section

- Personal skills and strengths showcase
- Interactive comparison table
- Professional benefits and value proposition

### Contact Footer

- Direct contact information (email, GitHub, Telegram)
- Consistent styling with hover effects
- External link indicators

## License

This project is open source and available under the [MIT License](LICENSE).

## Contributing

While this is a personal portfolio, suggestions and feedback are welcome! Feel free to:

1. Open an issue for bugs or suggestions
2. Fork the repository for your own portfolio inspiration
3. Submit pull requests for improvements

**Built with ❤️ using SvelteKit and Tailwind CSS**
