import "./bootstrap";
// import "bootstrap/dist/js/bootstrap.min.js";
// import "bootstrap/dist/css/bootstrap.min.css";
// import "bootstrap-icons/font/bootstrap-icons.css";
import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import MainLayout from "./Layouts/MainLayout.vue";
// import Empty from "./Layouts/Empty.vue";
import { ZiggyVue } from "ziggy";

createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        // return pages[`./Pages/${name}.vue`];
        const page = pages[`./Pages/${name}.vue`];

        // page.default.layout = page.layout || MainLayout;
        page.default.layout = page.default.layout || MainLayout;
        // page.layout = page.layout || MainLayout;
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        delay: 0,
        color: "#D0D",
        includeCSS: true,
        showSpinner: true,
    },
});

// createApp(App).mount("#app");
