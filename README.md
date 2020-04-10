# Bytelion Wordpress Theme

This theme is *design agnostic* and meant to serve as a starting from scratch point for developers to build any design into wordpress. Under the hood it uses [Carbon Fields](https://carbonfields.net/) to consolidate the save and edit function of Gutenberg blocks into one function and allow for faster builds of custom blocks.

## Getting Started

As this repo is a theme, make sure to [install wordpress](https://wordpress.org/support/article/how-to-install-wordpress/) first. Once you've installed wordpress, clone this repo into `wp-content/themes/` in a new folder. Make sure to then activate this theme under `Appearance >> Themes` in the wordpress admin panel.

Since this theme uses a gulp based workflow, you'll need a little extra work to manage custom blocks and styles. That includes setting up [node with npm](https://nodejs.org/en/) and following the prompts below. Open a terminal in the current Bytelion theme directory:

```
composer install
npm install gulp-cli -g
npm install
gulp
```

## Basic Overview

Once you've run through those steps, the `gulp` command runs through the `sass`, `javascript`, and `blocks` folder to compile sass, compile javascript, and then runs a watcher for all new changes to your theme.

Now that you're ready to start, the rest is up to you. Generally there are a few hot spots you'll want to customize during theme development:

* **gutenberg blocks**: `/blocks/`
* **theme styles**: `/sass/` and `/sass/style.scss`
* **theme javascript**: `/javascript/` and `/javascript/zero.js`
* **page markup**: `header.php`, `main.php`, and `footer.php`

## Detailed Folder Structure & Files

* `/blocks/` Contains all custom gutenberg blocks for your theme.
* `/functions/` Represents functions.php albeit broken up into managable files.
	* `actions.php` Queues actions for wordpress to load based other files within this folder.
	* `blocks.php` Registers custom gutenberg blocks for your theme; edit the array here to register blocks.
	* `editor.php` Customizes the editor to make development easier.
	* `settings.php` Creates a custom "Theme Options" menu to help manage custom fields for your theme.
	* `setup.php` Queues menus, scripts, and adds custom logo support + google fonts support.
* `/icons/` Contains SVG icons to directly embed within your theme via `<?=icon('icon-name')?>`.
* `/javascript/` Collection of all javascript files for your theme.
	* `components/` Contains any custom component related to your gutenberg blocks.
	* `vendor/` Contains any third party plugins.
	* `zero.js` Initializes by hand javascript modules within this folder.
* `/menus/` Contains PHP menus to use within your theme via `<?php import('/menus/social.php'); ?>`.
* `/sass/` Collection of all styles for your theme.
	* `base/` Contains foundational elements for styling.
	* `components/` Contains styles for each sub group of the gutenberg editor blocks including custom blocks.
	* `core/` Contains styles for core wordpress components.
	* `layouts/` Contains styles for header, footer, menu, and page elements.
	* `navigation/` Contains styles for navigation elements.
	* `partials/` Contains miscellaneous styles including additional styles for vendor plugins.
	* `vendor/` Contains untouched vendor styles for third party plugins
	* `style.scss` The manifest file to import all style partials within your theme.
* `404.php` Page not found.
* `config.php` Contains PHP variable for use within other PHP templates.
* `footer.php` Footer template that's present on all pages.
* `functions.php` Collection of imports from the `/functions/` folder.
* `gulpfile.js` Compiles sass, js, babel, and watches files for changes.
* `header.php` Header template that's present on all pages.
* `index.php` Base layout template for all templates on the site.
* `main.php` Inner page template that's present on all pages.
* `package.json` Contains details & dependencies of the project from the perspective of node.
* `README.md` You're looking at it yo!
* `script.js` Compiled file that represents the `/scripts/` folder.
* `search.php` Search template.
* `style.css` Compiled file that represents the `/sass/` folder.
* `utility.php` Functions to help build out php template files.

## Browsersync Troubleshooting

The `gulpfile` runs a browsersync instance based on the `"name"` field within `package.json`. Make sure this name points to the path used for your wordpress install. If the name is incorrect, everything will continue to work correctly except live reload.

## Additional Support

### Breadcrumbs

The easiest way to add breadcrumbs to your site is to add the Yoast SEO plugin. On the left hand side of the admin view select `SEO` >> `Search Appearance` >> `Breadcrumbs` >> `Enable Breadcrumbs` >> `Enabled`. There's a conditional within `main.php` that will then include breadcrumbs for you.

### Contact Form 7

Contact Form 7 by default does not contain a gutenberg block. For support add https://github.com/andreilupu/cf7-gutenberg into the plugins folder. When editing a page, Contact Form 7 will then appear as a dropdown within the `Common Blocks` category.

## Sites Built with the Bytelion Theme

Have a site you wanna share? Fork and get some love here. Another Bytelion theme user is more love for us too ;)