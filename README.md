# Simple Starter Wordpress Theme

This was built following [this](https://vegibit.com/wordpress-theme-development-tutorial-step-by-step/) tutorial by [vegibit](https://vegibit.com/)

Serves as a convenient starter to start building up a custom theme from the ground up

## Steps to Run

Install dependencies. Prettier is used to make php/html/css/anything-else-supported cleaner.

```bash
npm install
```

Do note: Make sure that the php code you write is complete before utilizing prettier. Else, the parser will fail to parse.

This means

```php
<?php if (yesItIsTrue) { ?>
 <article class="article-of-truth">The truest propagation ever made</article> 
<?php } else {} ?>
```

In code such as this, it's best to complete the php code first and then write out the html code (the article element in this case)

Why? Because then, you can make intermediate saves while working on the html code and have prettier run on each save (if you've configured an editor to do this).
If the PHP code is incomplete, @prettier/plugin-php would fail to parse the code

You can easily run a local development server with simply php

```bash
php -S localhost:8080
```

You can skip using something like LAMP and head straight to localhost:8080 on your machine. And proceed with wordpress usage (and development) as needed henceforth.
