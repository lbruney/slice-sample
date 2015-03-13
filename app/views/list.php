<!DOCTYPE html>
<html>
  <head>
    <title><?php echo SliceHelper::message($this->getConfig('name')); ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="shortcut icon" href="favicon.icon" type="image/ico">
  </head>
  <body>
    <div class="container">
      <h1><?php echo SliceHelper::message('Hello world'); ?>
      </h1>
      <p><?php echo SliceHelper::message('This simple framework was created by {author} to illustrate a stack of OO PHP, GulpJS, Jade and Stylus on the go. Of course, in a real life complex web application, things would not be so simple. Thus, architectural considerations must be made. Yet, for a brochure, one page site, this just might suffice. Might!', ['author'=>$this->getConfig('author')]); ?>
      </p>
      <p><?php echo SliceHelper::message('The PHP framework includes simple routing, site configuration and multilanguage support with dynamic variables.'); ?>
      </p>
      <p><?php echo SliceHelper::message('The framework utilizes the popular MVC design pattern. Source HTML was written with Jade templating engine. Utilizing the simple Unix <em>move</em> command, the generated html was saved as a PHP file. The page is in some style with CSS, which was generated using the lovely Stylus tool.'); ?>
      </p>
      <ul><?php foreach($list as $item): ?>
        <li><a href="/item?id=<?php echo $item['id']; ?>"><?php echo $item['name']; ?></a></li><?php endforeach; ?>
      </ul>
    </div>
  </body>
</html>