# Wordpress React Widget Example

## Prerequisites

* Node.js (https://nodejs.org/)
* Yarn (https://yarnpkg.com/)

## Development Tasks

| Command | Description |
|---------|-------------|
| `yarn install` | Fetch dependencies and build binaries for any of the modules |
| `yarn start` | Run the app in development mode with live reload on `http://localhost:3000` |
| `yarn build` | Generate an optimised, production-ready `build` folder |
| `yarn test` | Run test suite in the interactive watch mode |

## Deploying to Wordpress

Copy the content of the `build` directory along with the `wordpress-widget-example.php` file to `wp-content\plugins\wordpress-widget-example`:

```
│─── wordpress-widget-example.php
│
├─── main.*xxxxxx*.css
├─── main.*xxxxxx*.css.map
│
├─── main.*xxxxxx*.js.map
├─── main.*xxxxxx*.js
│
└─── logo.svg
```

## Activating the Widget

We now need to call `wp_widget_example` somewhere in our theme so that React has a root div to mount on.

The easiest way out is to [add a new text widget](http://i.imgur.com/bUWJ4mc.png). As a site administrator go to **Appearance > Widgets** and drag a new "Text" widget to the top of the sidebar. The text content should be the mountpoint to the React app:

```html
<div id="root"></div>
```

## Credits

Original instructions for putting this plugin together can be found [here](http://myappincome.co.uk/how-to-make-a-react-js-wordpress-plugin/).

## License

MIT
