<!DOCTYPE html>
<html lang="en-US" ng-app="clientRecords">
    <head>
        <title>Rack | Welcome</title>

        <!-- Load Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
    </head>
    <body>
        <h2>Clients List</h2>
        <div  ng-controller="ClientsController">

            <!-- Table-to-load-the-data Part -->
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created Date</th>
                        <th>Updated Date</th>
                        <th><button id="btn-add" class="btn btn-primary btn-xs" ng-click="toggle('add', 0)">Add New Client</button></th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="client in clients">
                        <td>{{ client.id }}</td>
                        <td>{{ client.name }}</td>
                        <td>{{ client.email }}</td>
                        <td>{{ client.contact_number }}</td>
                        <td>{{ client.position }}</td>
                        <td>
                            <button class="btn btn-default btn-xs btn-detail" ng-click="toggle('edit', client.id)">Edit</button>
                            <button class="btn btn-danger btn-xs btn-delete" ng-click="confirmDelete(client.id)">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- End of Table-to-load-the-data Part -->
            <!-- Modal (Pop up when detail button clicked) -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">{{form_title}}</h4>
                        </div>
                        <div class="modal-body">
                            <form name="frmClients" class="form-horizontal" novalidate="">

                                <div class="form-group error">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control has-error" id="name" name="name" placeholder="Fullname" value="{{name}}" 
                                        ng-model="client.name" ng-required="true">
                                        <span class="help-inline" 
                                        ng-show="frmClients.name.$invalid && frmClients.name.$touched">Name field is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="{{email}}" 
                                        ng-model="client.email" ng-required="true">
                                        <span class="help-inline" 
                                        ng-show="frmClients.email.$invalid && frmClients.email.$touched">Valid Email field is required</span>
                                    </div>
                                </div>

                                

                                

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btn-save" ng-click="save(modalstate, id)" ng-disabled="frmClients.$invalid">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
        <script src="js/main/angular/angular.min.js"></script>
        <script src="js/main/jquery-3.1.0.min.js"></script>
        <script src="js/main/bootstrap.min.js"></script>
        
        <!-- AngularJS Application Scripts -->
        <script src="js/app.js"></script>
        <script src="js/apps.js"></script>
        <script src="js/controllers/clients.js"></script>
    </body>
</html>
