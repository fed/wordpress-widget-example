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

First run `yarn build` to generate the `build` folder along with the PHP configuration file required by Wordpress.

Copy the contents of the `build` directory to `wp-content\plugins\your-widget`.

## Activating the Widget

We now need to call `wp_widget_setup()` somewhere in our theme so that React has a root div to mount on.

Alternatively, you can [add a new text widget](http://i.imgur.com/bUWJ4mc.png) (instead of calling the previous function). As a site administrator go to **Appearance > Widgets** and drag a new "Text" widget to the top of the sidebar. The text content should be the mountpoint to the React app:

```html
<div id="root"></div>
```

You can make this *id* as specific as you want to avoid name clashes.

## Project Structure

This project was bootstrapped with [Create React App](https://github.com/facebookincubator/create-react-app).

For the project to build, these files must exist with exact filenames:

* `public/index.html` is the page template;
* `src/index.js` is the JavaScript entry point.

You can safely delete or rename any of the other files.

Only files inside `public` can be used from `public/index.html`.

## Credits

Original instructions for putting this plugin together can be found [here](http://myappincome.co.uk/how-to-make-a-react-js-wordpress-plugin/).

## License

MIT
