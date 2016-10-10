@extends('main')

@section('content')

<h1>Welcome Habeeb</h1>
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, possimus, ullam? Deleniti dicta eaque facere, facilis in inventore mollitia officiis porro totam voluptatibus! Adipisci autem cumque enim explicabo, iusto sequi.</p>
<hr>

<div class="container" ng-controller="ProjectCtrl">  
  <div class="main">
    <ul class="unstyled">
      <li id="loading"></li>
      <li ng-repeat="project in projects">
        <input type="checkbox" id="project-{{project.id}}" ng-model="project.checked">
        <label for="project-{{project.id}}" class="{{isBought(project.checked)}}">{{project.text}}<span></span></label>
      </li>
    </ul>

    </ul>
    <form class="form-horizontal" ng-submit="addProject()">
      <input type="text" ng-model="projectEntry" placeholder="Type and hit Enter to add project">
    </form>
  </div>
 
  <div class="footer">
    <button class="btn btn-large btn-danger" ng-click="RemoveProject()">Remove Bought</button>
  </div>
  </div>
</div>

 
<a href="{{ route('projects.index') }}" class="btn btn-info">View Project</a>
<a href="{{ route('projects.create') }}" class="btn btn-primary">Add New Project</a>

@stop