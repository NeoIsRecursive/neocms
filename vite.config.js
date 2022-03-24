import { defineConfig } from "vite";
export default defineConfig({
    build: {
        outDir: "public/build/",
        emptyOutDir: true,
        manifest: true,
        target: "es2018",
        rollupOptions: {
            input: "resources/scripts/main.js",
        },
    },
    plugins: [],
});
