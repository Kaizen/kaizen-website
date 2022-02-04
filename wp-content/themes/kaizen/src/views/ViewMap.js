import ViewMapping from './ViewMapping.js';

/**
 *
 */
export default class ViewMap {

    /**
     * @param {*} context
     */
    constructor(context) {
        this.context = context;
        this.mappings = [];
    }

    /**
     * @param {String|Window} selector
     * @param {View} ViewClass
     * @param {Object} [options]
     *
     * @return {ViewMapping}
     */
    map(selector, ViewClass, options) {
        if (!ViewClass) {
            throw new Error('The supplied view for selector "' + selector + '" is undefined.');
        }

        var mapping = new ViewMapping(this.context, selector, ViewClass, options);
        this.mappings.push(mapping);

        return mapping;
    }

    /**
     * Build all registered mappings
     *
     * @param {Element|HTMLDocument} [contextNode]
     */
    build(contextNode = null) {
        this.mappings.forEach(mapping => mapping.build(contextNode));
    }
}