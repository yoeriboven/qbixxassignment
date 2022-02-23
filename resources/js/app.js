require('./bootstrap')

import {createApp, h} from 'vue'
import {createInertiaApp, Head, Link} from '@inertiajs/inertia-vue3'
import {InertiaProgress} from '@inertiajs/progress'

createInertiaApp({
    title: title => `${title} - Qbixx Assignment`,
    resolve: name => require(`./Pages/${name}`),
    setup({el, App, props, plugin}) {
        createApp({render: () => h(App, props)})
            .use(plugin)
            .component('Head', Head)
            .component('Link', Link)
            .mount(el)
    },
})

InertiaProgress.init()
