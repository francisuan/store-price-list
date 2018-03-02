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
     <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-home"></span> Store Price List</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/items">Items</a></li>
              <li><a href="/categories">Categories</a></li>
            </ul>
          </div><!--/.nav-collapse -->
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