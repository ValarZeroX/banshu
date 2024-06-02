import _ from 'lodash';
window._ = _;

import $ from 'jquery';
window.$ = window.jQuery = $;

// import * as jQuery from 'jquery';
// declare global {
//     interface Window {
//         jQuery: typeof jQuery;
//         $: typeof jQuery;
//     }
// }

// window.$ = window.jQuery
// window.jQuery = window.jQuery

import * as Popper from '@popperjs/core'
window.Popper = Popper

import 'bootstrap';

// 引入日期選擇器
// import ('jquery-ui/ui/widgets/datepicker').then(() => {
//     $(function() {
//         $("#datepicker_start").datepicker({
//             dateFormat: 'yy-mm-dd'
//         });
//         $("#datepicker_end").datepicker({
//             dateFormat: 'yy-mm-dd'
//         });
//         // var today = new Date();
//         // var yesterday = new Date();
//         // yesterday.setDate(today.getDate() - 1);
//         // $("#datepicker_start").datepicker({
//         //     defaultDate: yesterday,
//         //     setDate: yesterday,
//         //     dateFormat: 'yy-mm-dd'
//         // }).datepicker("setDate", yesterday);
//         // $("#datepicker_end").datepicker({
//         //     defaultDate: today,
//         //     setDate: today,
//         //     dateFormat: 'yy-mm-dd'
//         // }).datepicker("setDate", today);
//     });
// });
import 'jquery-ui/themes/base/all.css';   // 引入 jQuery UI 的 CSS
// import ('jquery-ui-timepicker-addon/dist/jquery-ui-timepicker-addon.js').then(() => {
//     $(function() {
//         $("#timepicker_start").timepicker({
//             timeFormat: 'HH:mm:ss'
//         });
//     });
// });
// import 'jquery-ui-timepicker-addon/dist/jquery-ui-timepicker-addon.min.js';
import 'jquery-ui-timepicker-addon/dist/jquery-ui-timepicker-addon.min.css';
// import 'jquery-datetimepicker/build/jquery.datetimepicker.full.min.js';
// import 'jquery-datetimepicker/build/jquery.datetimepicker.min.css';
/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// import Pusher from 'pusher-js';
// window.Pusher = Pusher;

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: import.meta.env.VITE_PUSHER_APP_KEY,
//     cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'mt1',
//     wsHost: import.meta.env.VITE_PUSHER_HOST ? import.meta.env.VITE_PUSHER_HOST : `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
//     wsPort: import.meta.env.VITE_PUSHER_PORT ?? 80,
//     wssPort: import.meta.env.VITE_PUSHER_PORT ?? 443,
//     forceTLS: (import.meta.env.VITE_PUSHER_SCHEME ?? 'https') === 'https',
//     enabledTransports: ['ws', 'wss'],
// });
