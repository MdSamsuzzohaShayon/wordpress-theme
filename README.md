# WordPress

 - [Tutorials](https://www.youtube.com/watch?v=-YUSCjWXSMk)

### PHP For WordPress

 - [Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php) - *Some parts of the WordPress code structure for PHP markup are inconsistent in their style. WordPress is working to gradually improve this by helping users maintain a consistent style so the code can become clean and easy to read at a glance.*


### Themes

 1. [Looping](https://codex.wordpress.org/The_Loop) - *The Loop is the default mechanism WordPress uses for outputting posts through a theme’s template files. How many posts are retrieved is determined by the number of posts to show per page defined in the Reading settings*
 2. [Template tags](https://codex.wordpress.org/Template_Tags) - *Template tags are used within your blog's Templates to display information dynamically or otherwise customize your blog, providing the tools to make it as individual and interesting as you are.*
 3. [Conditional Tags](https://codex.wordpress.org/Conditional_Tags) - *The Conditional Tags can be used in your Template files to change what content is displayed and how that content is displayed on a particular page depending on what conditions that page matches. For example, you might want to display a snippet of text above the series of posts, but only on the main page of your blog.*
 4. [WordPress Hooks](https://developer.wordpress.org/plugins/hooks/) - *Hooks are a way for one piece of code to interact/modify another piece of code at specific, pre-defined spots. They make up the foundation for how plugins and themes interact with WordPress Core, but they’re also used extensively by Core itself.*
  - **There are two types of hooks: Actions and Filters.** To use either, you need to write a custom function known as a Callback, and then register it with a WordPress hook for a specific action or filter.
  - Actions allow you to add data or change how WordPress operates. Callback functions for Actions will run at a specific point in the execution of WordPress, and can perform some kind of a task, like echoing output to the user or inserting something into the database. Actions do not return anything back to the calling hook.
  - Filters give you the ability to change data during the execution of WordPress. Callback functions for Filters will accept a variable, modify it, and return it. They are meant to work in an isolated manner, and should never have side effects such as affecting global variables and output. Filters expect to have something returned back to them.
 5. [Child Theme](https://developer.wordpress.org/themes/advanced-topics/child-themes/) - *A child theme allows you to change small aspects of your site’s appearance yet still preserve your theme’s look and functionality. To understand how child themes work it is first important to understand the relationship between parent and child themes. A parent theme is a complete theme which includes all of the required WordPress template files and assets for the theme to work. All themes – excluding child themes – are considered parent themes.*
  - Child themes:
   - make your modifications portable and replicable;
   - keep customization separate from parent theme functions;
   - allow parent themes to be updated without destroying your modifications;
   - allow you to take advantage of the effort and testing put into parent theme;
   - save on development time since you are not recreating the wheel; and
   - are a great way to start learning about theme development.
  - [Creating a child theme](https://developer.wordpress.org/themes/advanced-topics/child-themes/)
 6. [Starter Theme](https://www.wpbeginner.com/wp-themes/21-best-wordpress-starter-themes-for-developers/#:~:text=A%20WordPress%20starter%20theme%20is,or%20no%20styling%20at%20all.) - *A starter theme includes helpful files and function for building theme from stretch. Usually edit starter theme directly, not using child theme.*
 - Some popular starter themes - [Underscore](https://underscores.me/), [Jointswp](https://jointswp.com/), [Understrap](https://understrap.com/), [Sage](https://roots.io/sage/) - Download theme from there and use for own purpose (don't need to override).

 7. [Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/) - *As discussed, template files are modular, reusable files, used to generate the web pages on your WordPress site. Some template files (such as the header and footer template) are used on all of your site’s pages, while others are used only under specific conditions.*
 8. [Tests For WordPress](http://wptest.io/)
  - Get some dummy data from wptest. Download zip file from wptest.io -> extract it -> From wordpress -> tools -> import -> install wardpress -> run importer -> upload xml file from wp test
  - Install plugin **Custom Post Type UI** by Author: WebDevStudios. Wordpress Dashboard -> -> CPT UI -> Add new post type with name of **Portfolio**
  - Install plugin **Advanced Custom Fields** -> Wordpress Dashboard -> Custom fields -> Add new custom fields for URL
  - Wordpress Dashboard -> Portfolio -> Add few post






# Watched = 04:18:00
