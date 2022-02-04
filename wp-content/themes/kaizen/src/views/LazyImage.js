const LOADED_CLASS = 'lazy-image--loaded';

/**
 *
 */
export default class LazyImage {

    /**
     *
     * @param options
     */
    constructor(options) {
        this.el = options.el;

        this.onLoaded = this.onLoaded.bind(this);
        if(this.isLoaded()) {
            this.onLoaded();
        } else {
            this.el.addEventListener('load', this.onLoaded);
            this.el.addEventListener('lazyloaded', this.onLoaded);
            this.el.addEventListener('appear', this.onLoaded);
        }
    }

    /**
     *
     */
    onLoaded() {
        this.el.classList.toggle(LOADED_CLASS, true);
    }

    /**
     *
     * @return {boolean}
     */
    isLoaded() {
        // During the onload event, IE correctly identifies any images that
        // weren’t downloaded as not complete. Others should too. Gecko-based
        // browsers act like NS4 in that they report this incorrectly.
        if (!this.el.complete) {
            return false;
        }

        // However, they do have two very useful properties: naturalWidth and
        // naturalHeight. These give the true size of the image. If it failed
        // to load, either of these should be zero.
        if (typeof this.el.naturalWidth !== "undefined" && this.el.naturalWidth === 0) {
            return false;
        }

        // No other way of checking: assume it’s ok.
        return true;
    }

}