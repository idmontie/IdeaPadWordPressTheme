# Idea Pad Wordpress Theme

A [Medium](http://medium.com) inspired, open-source Wordpress Theme.  This project is licensed under GPLv3.

![Idea Pad Preview](/screenshot.png)

# Features

* Mobile friendly navigation
* Large full-width hero images from your hero images
* Dynamic front page and archive page hero images based on the latest featured image
* Support for the [MailChimp Plugin](https://wordpress.org/plugins/mailchimp-for-wp/)

# Non-features

Here are reasons to NOT use this theme:

* If you have large navigation bars or multi-level navigation, don't use this theme.
* If you plan on not making a blog, but instead plan on using WordPress as a full CMS, this theme won't help you much.
* Theme color customization is not avialable yet.

# Installation

1. Activate the theme.
2. (*Optional*) Download, install, and activate the [MailChimp Plugin](https://wordpress.org/plugins/mailchimp-for-wp/).
3. (*Optional*) Change your sidebar widgets! Keep in mind that this theme only supports minimal header menus. One level only!

# Developing

We use SCSS.  If you want to compile it, install NodeJS, Grunt, and Ruby. Then run:

```cmd
gem install sass
gem install scss-lint
cd .standards
npm install
grunt
```

This will automatically compile the SCSS files into one `style.css` file.

Feel free to fork the repo and make changes to the theme to suit your needs.  If you want to use your forked repo without uploading it to Wordpress, we recommend using the [Github Updater](https://github.com/afragen/github-updater) plugin for Wordpress.

If you find bugs, have any feature requests, or find something missing, use the GitHub issue tracker and read [the contributing guide](CONTRIBUTING.md).

Happy Blogging!