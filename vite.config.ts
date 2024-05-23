import { ConfigEnv, defineConfig, UserConfigExport } from 'vite'
import * as path from "path";
import laravel from "laravel-vite-plugin";

const assets = {
    base: './resources',
    icons: './resources/icons',
    images: './resources/images',
    scripts: './resources/scripts',
    styles: './resources/styles'
}

export default defineConfig(({ mode }: ConfigEnv) => {
    const hostname = 'localhost'//process.env.DDEV_HOSTNAME?.split(',')[0]
    const config: UserConfigExport = {
        plugins: [
            laravel({
                input: [`${assets.scripts}/app.ts`, `${assets.scripts}/editor.ts`],
                buildDirectory: 'dist',
                refresh: true
            })
        ],
        resolve: {
            alias: {
                '@': path.resolve(__dirname, assets.base),
                '@images': path.resolve(__dirname, assets.images),
                '@scripts': path.resolve(__dirname, assets.scripts),
                '@styles': path.resolve(__dirname, assets.styles)
            }
        },
        build: {
            assetsDir: '',
            sourcemap: true
        },
        css: {
            devSourcemap: true
        }
    }

    mode === 'development' && (config.server = {
        host: true,
        strictPort: true,
        port: 5173,
        hmr: {
            host: `${hostname}`,
            protocol: 'ws'
        }
    })

    return config
})