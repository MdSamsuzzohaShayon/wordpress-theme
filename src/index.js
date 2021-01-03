const {registerBlockType} = wp.blocks;

// https://developer.wordpress.org/block-editor/developers/block-api/block-registration/
registerBlockType('shayon/custom-cta', {
    // BUILT-IN ATTRIBUTES
    title: "Call to Action",
    description: "Block to generate a custom call to action",
    icon: 'format-image',
    category: 'layout',


    // CUSTOM ATTRIBUTES
    attributes: {},


    // CUSTOM FUNCTIONS

    // BUILT-IN FUNCTION
    // https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/
    // The edit function describes the structure of your block in the context of the editor. This represents what the editor will render when the block is used.
    edit() {
        // JSX
        return <div>Hello world</div>;
    },

    save(){}
});