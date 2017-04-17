import '../bootstrap';
import CookiesPopup from './components/cookies-popup';

/**
 * Init on load
 */
(function() {
    new Vue({
        el: '#page-app',

        components: {
            CookiesPopup
        }
    });
})();