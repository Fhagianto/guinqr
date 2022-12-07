var staticCacheName = "pwa-v" + new Date().getTime();
var filesToCache = [
    '/offline',
    '/AdminLTE/dist/css/adminlte.min.css',
    '/politeknik/header-min-css.css',
    '/politeknik/fotter-min-css.css',
    '/AdminLTE/plugins/fontawesome-free/css/all.min.css',
    '/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
    '/politeknik/global-min-css.css',
    '/politeknik/kadence-global-inline-css.css',
    '/politeknik/normalize.css',
    '/plugins/parallax/parallax.css',
    '/AdminLTE/plugins/sweetalert2/sweetalert22.js',
];

// Cache on install
self.addEventListener("install", event => {
    this.skipWaiting();
    event.waitUntil(
        caches.open(staticCacheName)
            .then(cache => {
                return cache.addAll(filesToCache);
            })
    )
});

// Clear cache on activate
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames
                    .filter(cacheName => (cacheName.startsWith("pwa-")))
                    .filter(cacheName => (cacheName !== staticCacheName))
                    .map(cacheName => caches.delete(cacheName))
            );
        })
    );
});

// Serve from Cache
self.addEventListener("fetch", event => {
    event.respondWith(
        caches.match(event.request)
            .then(response => {
                return response || fetch(event.request);
            })
            .catch(() => {
                return caches.match('offline');
            })
    )
});
