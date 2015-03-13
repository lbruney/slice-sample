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
      <h1><?php if(isset($model['name'])): ?><?php echo $model['name']; ?><?php else: ?><?php echo SliceHelper::message('That slice of cake does not exist'); ?><?php endif; ?>
      </h1>
      <p><?php echo SliceHelper::message('routing technique'); ?>
      </p>
    </div>
  </body>
</html>