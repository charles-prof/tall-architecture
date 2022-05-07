// import { createHandlerForURL } from 'workbox-precaching/createHandlerForURL';
// import { NavigationRoute } from 'workbox-routing/NavigationRoute';
import { precacheAndRoute } from "workbox-precaching/precacheAndRoute";
import { registerRoute } from "workbox-routing/registerRoute";
import { NetworkFirst } from "workbox-strategies";
import { StaleWhileRevalidate } from "workbox-strategies";
import { CacheableResponsePlugin } from "workbox-cacheable-response";
import { imageCache, googleFontsCache } from "workbox-recipes";

precacheAndRoute(self.__WB_MANIFEST);

const pageCache = "pages";
const pageMatchCallback = ({ request }) => request.mode === "navigate";
const networkTimeoutSeconds = 3;

registerRoute(
    pageMatchCallback,
    new NetworkFirst({
        networkTimeoutSeconds,
        pageCache,
        plugins: [
            new CacheableResponsePlugin({
                statuses: [0, 200],
            }),
        ],
    })
);

const staticResourceCache = "static-resources";
const SRMatchCallback = ({ request }) =>
    // CSS
    request.destination === "style" ||
    // JavaScript
    request.destination === "script" ||
    // Web Workers
    request.destination === "worker";

registerRoute(
    SRMatchCallback,
    new StaleWhileRevalidate({
        staticResourceCache,
        plugins: [
            new CacheableResponsePlugin({
                statuses: [0, 200],
            }),
        ],
    })
);

imageCache();

googleFontsCache();
