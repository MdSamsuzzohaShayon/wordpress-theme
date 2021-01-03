const {registerBlockType} = wp.blocks;
// https://developer.wordpress.org/block-editor/developers/richtext/
// https://developer.wordpress.org/block-editor/tutorials/block-tutorial/block-controls-toolbar-and-sidebar/#inspector

const {RichText, InspectorControls, ColorPalette} = wp.editor;
const {PanelBody} = wp.components;


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
        /*
        author: {
            type: ''

        },
         */

        title: {
            type: 'string',
            source: 'html',
            selector: 'h2'
        },
        // https://developer.wordpress.org/block-editor/components/color-palette/
        titleColor: {
            type: 'string',
            default: 'black',

        },
        body: {
            type: 'string',
            source: "html",
            selector: 'p'
        }
    },


    // CUSTOM FUNCTIONS

    // BUILT-IN FUNCTION
    // https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/
    // The edit function describes the structure of your block in the context of the editor. This represents what the editor will render when the block is used.
    edit({attributes, setAttributes}) {
        const {title, body, titleColor} = attributes;

        function onChangeTitle(newTitle) {
            setAttributes({title: newTitle});
        }
        function onChangeBody(newBody) {
            setAttributes({body: newBody});
        }
        function onTitleColorChange(newColor){
            setAttributes({titleColor: newColor});
        }
        /*
        function updateAuthor(e) {
            console.log(e.target.value);
            setAttributes({author: e.target.value});
        }
         */



        // JSX
        // return <input value={attributes.author} onChange={updateAuthor} type="text"/>;
        return ([
            <InspectorControls style={{marginBottom: '40px'}}>
                <PanelBody title={'Font Color Settings'}>
                    <p><strong>Select a title color</strong></p>
                    <ColorPalette
                        value={titleColor}
                        onChange={onTitleColorChange}
                    />

                </PanelBody>
            </InspectorControls>,

            <div className="cta-container">
                    <RichText
                        key="editable"
                        tagName='h2'
                        placeholder="You cta title"
                        value={title}
                        onChange={onChangeTitle}
                        style={{color: titleColor}}
                    />
                    <RichText
                        key="editable"
                        tagName='p'
                        placeholder="You cta descriptions"
                        value={body}
                        onChange={onChangeBody}
                    />
                </div>

        ]);
    },

    save({attributes}) {
        const {title, body, titleColor} = attributes;
        // return <p>Author Name <i>{attributes.author}</i></p>;
        return (
            <div className="cta-container">
                <h2 style={{color: titleColor}}>{title}</h2>
                <RichText.Content
                    tagName='p'
                    value={body}
                />
            </div>
        );

    }
});