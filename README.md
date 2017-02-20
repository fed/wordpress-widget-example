# Wordpress Widget Example

## Deploying to Wordpress

Copy all of the following files to `wp-content\plugins\wordpress-widget-example`:

```
│─── wordpress-widget-example.php
│
├─── css
│       main.9a0fe4f1.css
│       main.9a0fe4f1.css.map
│
├─── js
│       main.fdc4e6ad.js.map
│       main.fdc4e6ad.js
│
└─── media
        logo.5d5d9eef.svg
```

## Activating the Widget

We now need to call `wp_widget_example` somewhere in our theme so that React has a root div to mount on.

The easiest way out is to [add a new text widget](http://i.imgur.com/bUWJ4mc.png). As a site administrator go to **Appearance > Widgets** and drag a new "Text" widget to the top of the sidebar. The text content should be the mountpoint to the React app:

```html
<div id="root"></div>
```

## Credits

This project was bootstrapped with [Create React App](https://github.com/facebookincubator/create-react-app).

Instructions for creating the plugin [seen here](http://myappincome.co.uk/how-to-make-a-react-js-wordpress-plugin/).
