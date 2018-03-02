<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title><?php echo $this->fetch('title') ? $this->fetch('title') . ' - ' : ''; ?>Store Price List</title>
  <?= $this->Html->meta('icon') ?>
  <?= $this->Html->css('cake.css') ?>
  <!-- Bootstrap -->
  <link href="/vendor/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
  <?= $this->fetch('extra-styles') ?>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
     <nav class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-home"></span> Store Price List</a>
          <button class="navbar-toggler btn btn-default pull-right visible-phone" type="button" data-toggle="collapse" data-target="#navbar-1" aria-controls="navbar-1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="glyphicon glyphicon-menu-hamburger"></span>
          </button>
        </div>
        <div id="navbar-1" class="collapse navbar-collapse" role="navigation">
         <ul class="nav navbar-nav navbar-right">
          <li><a href="/categories">Categories</a></li>
          <li><a href="/items">Items</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
  </div>
  <footer class="footer">
    <div class="container">
      <p class="text-muted">Developed by Francis</p>
    </div>
  </footer>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="/vendor/js/bootstrap.min.js"></script>
  <script src="/vendor/js/dropdown.js"></script>
  <?= $this->fetch('extra-javascript') ?>
</body>
</html>