import { resolve } from "path";
import { defineConfig } from "vite";

export default defineConfig({
  base: "/LOFItest/",
  build: {
    rollupOptions: {
      input: {
        main: resolve(__dirname, "index.html"),
      },
    },
    assetsInclude: ["**/*.mp4"],
  },
});
