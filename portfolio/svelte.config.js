import adapter from '@sveltejs/adapter-static';

/** @type {import('@sveltejs/kit').Config} */
const config = {
	kit: {
		adapter: adapter({
            pages: '../docs',
            assets: '../docs',
            fallback: null,
            precompress: false
        })
	}
};

config.paths = { base: process.argv.includes('dev') ? '' : process.env.BASE_PATH }

export default config;