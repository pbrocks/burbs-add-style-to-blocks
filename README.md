# burbs-blocks-style

Adding Style to Block Editor.

![Turning on Style](https://github.com/pbrocks/burbs-add-style-to-blocks/blob/initial/inc/images/inline-image.gif?raw=true)

## Before adding style images not inline

![Before Style](https://github.com/pbrocks/burbs-add-style-to-blocks/blob/initial/inc/images/inline-not-inline.png?raw=true)


## Enqueue Block Assets

```
add_action( 'enqueue_block_assets', 'enqueue_burbs_blocks_style_scripts_styles' );
function enqueue_burbs_blocks_style_scripts_styles() {
	wp_register_style( 'burbs-blocks-style', plugins_url( 'css/burbs-blocks-style.css', __FILE__ ), [], time() );
	wp_register_script( 'burbs-blocks-style', plugins_url( 'js/burbs-blocks-style.js', __FILE__ ), [], time(), true );
	wp_enqueue_style( 'burbs-blocks-style' );
	wp_enqueue_script( 'burbs-blocks-style' );
}
```


## Javascript to access global variables

```
wp.blocks.registerBlockStyle( 'core/paragraph', {
    name: 'bullet-image',
    label: 'Inline Bullet Image'
} );
```


## CSS 

```
.is-style-bullet-image img {
    width: 20px;
    float: left;
    margin: .5rem 1rem 0 0;
}
```

## After adding style

![After Style](https://github.com/pbrocks/burbs-add-style-to-blocks/blob/initial/inc/images/inline-inline-after.png?raw=true)