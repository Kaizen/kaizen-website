export default class ViewMapping {

    /**
     * @param {Context} context
     * @param {String} selector
     * @param {View} ViewClass
     * @param {Object} [options]
     */
    constructor(context, selector, ViewClass, options) {

        // Make ES6 compatible
        if (typeof ViewClass == 'object' && ViewClass.default) {
            ViewClass = ViewClass.default;
        }

        // Store params
        this.context = context;
        this.selector = selector;
        this.ViewClass = ViewClass;
        this.options = options || {};

        // Init book keeping arrays
        this.views = [];
    }

    /**
     * Run the mapping, creating the view if necessary
     *
     * @param {Element|HTMLDocument} [contextNode]
     */
    build(contextNode = null) {
        const elements = this.getDOMElementsFor(this.selector, contextNode);
        elements.forEach(this._createView.bind(this));
    }

    /**
     * @param {Node} el
     * @private
     */
    _createView(el) {
        if (typeof this.ViewClass === 'undefined') {
            console.log('Cannot create View for selector ' + this.selector);
        }

        // Create the view
        var view = new this.ViewClass({
            el: el,
            ...this.options
        });
        this.views.push(view);
    }

    /**
     * @param {String|Node} selector
     * @param @param {Element|HTMLDocument} [contextNode]
     * @returns {Array}
     */
    getDOMElementsFor(selector, contextNode = null) {

        // Default to document context
        if (!contextNode) {
            contextNode = document;
        }

        if (typeof selector === 'string') {
            return [...contextNode.querySelectorAll(selector)];
        }

        return [selector];
    }

    /**
     * @param {String|Node} selector
     * @param @param {Element|HTMLDocument} [contextNode]
     * @returns {Array}
     */
    getNewElementsForSelector(selector, contextNode) {
        const elementsInDOM = this.getDOMElementsFor(selector, contextNode);
        const elementsWithView = this.views.map(view => view.el);

        return elementsInDOM.filter(el => elementsWithView.indexOf(el) < 0);
    }

    /**
     * @returns {String}
     */
    toString() {
        return '[object ViewMapping]';
    }

    /**
     * @see https://stackoverflow.com/questions/2648293/javascript-get-function-name
     * @param {Function} func
     * @returns {string}
     */
    getFunctionName(func) {
        // Match:
        // - ^          the beginning of the string
        // - function   the word 'function'
        // - \s+        at least some white space
        // - ([\w\$]+)  capture one or more valid JavaScript identifier characters
        // - \s*        optionally followed by white space (in theory there won't be any here,
        //              so if performance is an issue this can be omitted[1]
        // - \(         followed by an opening brace
        //
        var result = /^function\s+([\w\$]+)\s*\(/.exec(func.toString())

        return result ? result[1] : '' // for an anonymous function there won't be a match
    }
}
