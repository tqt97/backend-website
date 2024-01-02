import { defineConfig } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";

import fs from "fs";

import { homedir } from "os";
import { resolve } from "path";

// let host = "tuanit.io.vn";
let host = 'localhost'

export default defineConfig({
    server: {
        host,
        hmr: { host },
        // https: {
        //     key: fs.readFileSync(`./ssl/${host}.key`),
        //     cert: fs.readFileSync(`./ssl/${host}.crt`),
        // },
    },
    // server: detectServerConfig(host),
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/custom.css",
                "resources/js/app.js",
            ],
            refresh: [...refreshPaths, "app/Livewire/**"],
        }),
    ],
});

function detectServerConfig(host) {
    // let keyPath = resolve(homedir(), `.config/valet/Certificates/${host}.key`)
    // let certificatePath = resolve(homedir(), `.config/valet/Certificates/${host}.crt`)

    let keyPath = `./ssl/${host}.key`;
    let certificatePath = `./ssl/${host}.crt`;

    if (!fs.existsSync(keyPath)) {
        return {};
    }

    if (!fs.existsSync(certificatePath)) {
        return {};
    }

    return {
        hmr: { host },
        host,
        https: {
            key: fs.readFileSync(keyPath),
            cert: fs.readFileSync(certificatePath),
        },
    };
}
