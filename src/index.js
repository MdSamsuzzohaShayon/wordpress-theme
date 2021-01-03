const {registerBlockType} = wp.blocks;

function setAttributes(param) {
    
}

// https://developer.wordpress.org/block-editor/developers/block-api/block-registration/
registerBlockType('shayon/custom-cta', {
    // BUILT-IN ATTRIBUTES
    title: "Call to Action",
    description: "Block to generate a custom call to action",
    icon: 'format-image',
    category: 'layout',


    // CUSTOM ATTRIBUTES
    // https://developer.wordpress.org/block-editor/developers/block-api/block-attributes/
    attributes: {
        // https://developer.wordpress.org/block-editor/developers/block-api/block-attributes/#meta
        author: {
            type: ''

        }
    },


    // CUSTOM FUNCTIONS

    // BUILT-IN FUNCTION
    // https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/
    // The edit function describes the structure of your block in the context of the editor. This represents what the editor will render when the block is used.
    edit({attributes, setAttributes}) {
        function updateAuthor(e){
            console.log(e.target.value);
            setAttributes({author: e.target.value});
        }
        // JSX
        return <input value={attributes.author} onChange={updateAuthor} type="text"/>;
    },

    save({attributes}){
        return <p>Author Name <i>{attributes.author}</i></p>;
    }
});