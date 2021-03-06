// Keenthemes' plugins
window.KTUtil = require('../core/js/components/util.js');
window.KTBlockUI = require('../core/js/components/blockui.js');
window.KTCookie = require('../core/js/components/cookie.js');
window.KTDialer = require('../core/js/components/dialer.js');
window.KTDrawer = require('../core/js/components/drawer.js');
window.KTEventHandler = require('../core/js/components/event-handler.js');
window.KTFeedback = require('../core/js/components/feedback.js');
window.KTImageInput = require('../core/js/components/image-input.js');
window.KTMenu = require('../core/js/components/menu.js');
window.KTPasswordMeter = require('../core/js/components/password-meter.js');
window.KTScroll = require('../core/js/components/scroll.js');
window.KTScrolltop = require('../core/js/components/scrolltop.js');
window.KTStepper = require('../core/js/components/stepper.js');
window.KTSticky = require('../core/js/components/sticky.js');
window.KTSwapper = require('../core/js/components/swapper.js');
window.KTToggle = require('../core/js/components/toggle.js');

// Layout base js
window.KTApp = require('../extended/js/layout/app.js');
window.KTLayoutExplore = require('./layout/explore.js');
window.KTLayoutHeader = require('./layout/header.js');

import Echo from "laravel-echo"

window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: 'DMS-PUSHER-KEY',
    wsHost: window.location.hostname,
    wsPort: 6001,
    forceTLS: false,
    disableStats: true,
});
