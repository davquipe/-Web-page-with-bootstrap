<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>

<div ng-app="">
<div class="container">
<h2>Horizontal form with static control</h2>
  <form class="form-horizontal">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-12">
    <input type="text" class="form-control" placeholder="Ususario" ng-model="firstname">
    </div>
  </div>  
  
  <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-12">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" ng-model="contraseña">
      </div>
    </div>
  
  <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Entrar</button>
      </div>
  
  </form>
  <h1>You entered: {{firstname}} {{contraseña}}</h1>
  </div>
</div>




<div ng-app="">
<div class="container">
  <h2>Horizontal form with static control</h2>
  <form class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="Ususario" ng-model="usuario">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Entrar</button>
      </div>
    </div>
 
  </form>
  <h1>Bienveniso: {{ usuario }}</h1>
</div>
   </div>

<p>Change the name inside the input field, and you will see the name in the header changes accordingly.</p>

</body>
</html>