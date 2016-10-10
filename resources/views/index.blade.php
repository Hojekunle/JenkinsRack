<!doctype html>
<html lang="en" ng-app=myRack>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tasks</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/main.css">

<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.6/angular.min.js"></script>
<script src="js/app.js"></script>
<script src="js/main.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.4/underscore-min.js"></script>
<script src=quot;//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="//heartcode-canvasloader.googlecode.com/files/heartcode-canvasloader-min-0.9.1.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Projects</a>
    </div>
    <div class="nav navbar-nav navbar-right">
        <li><a href="#">Home</a></li>
        <li><a href="#">Projects</a></li>
    </div>
  </div>
</nav>

<main>
    <div class="container">
        <h1>Welcome Habeeb</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, possimus, ullam? Deleniti dicta eaque facere, facilis in inventore mollitia officiis porro totam voluptatibus! Adipisci autem cumque enim explicabo, iusto sequi.</p>
        <hr> 

        <div class="container" ng-controller="ProjectCtrl">  
            
            </div>       
        <a href="{{ route('projects.index') }}" class="btn btn-info">View Project</a>
        <a href="{{ route('projects.create') }}" class="btn btn-primary">Add New Project</a>
    </div>
</main>


   <script type="text/javascript">
      var cl = new CanvasLoader('loading');
      cl.setDiameter(100); // default is 40
      cl.setDensity(12); // default is 40
      cl.setRange(0.7); // default is 1.3
      cl.setSpeed(1); // default is 2
      cl.show(); // Hidden by default
    </script>
</body>
</html>
