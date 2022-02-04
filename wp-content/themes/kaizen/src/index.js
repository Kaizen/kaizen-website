
import Application from './Application';

document.addEventListener('DOMContentLoaded', initialize);

Object.defineProperty( Element.prototype, 'documentOffsetTop', {
    get: function () {
        return this.offsetTop + ( this.offsetParent ? this.offsetParent.documentOffsetTop : 0 );
    }
} );

Object.defineProperty( Element.prototype, 'documentOffsetLeft', {
    get: function () {
        return this.offsetLeft + ( this.offsetParent ? this.offsetParent.documentOffsetLeft : 0 );
    }
} );

/**
 *
 */
function initialize() {
    this.application = new Application();
}
