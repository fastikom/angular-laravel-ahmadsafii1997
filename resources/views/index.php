<!DOCTYPE html>
<html lang="en-US" ng-app="employeeRecords">
    <head>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Product">
		<meta name="author" content="Ahmad Safi">

        <title>Laravel 5 AngularJS CRUD Data Pegawai</title>

		<!-- Load Bootstrap CSS -->
        <link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet">
    </head>
    <body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CRUD Data Pegawai</a>
        </div>
      </div>
    </nav>
	<div class="jumbotron">
      <div class="container">
        
        
      </div>
    </div>
        <div class="container">
        <div class="row">
        <div class="col-md-12">
		
		<div  ng-controller="employeesController">
		<button id="btn-add" class="btn btn-success btn-lg" ng-click="toggle('add', 0)">Tambah Data Pegawai</button>
            <!-- Table-to-load-the-data Part -->
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact No</th>
                        <th>Position</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="employee in employees">
                        <td>{{  employee.id }}.</td>
                        <td>{{ employee.name }}</td>
                        <td>{{ employee.email }}</td>
                        <td>{{ employee.contact_number }}</td>
                        <td>{{ employee.position }}</td>
                        <td>
                            <button class="btn btn-default btn-xs btn-detail" ng-click="toggle('edit', employee.id)">Edit</button>
                            <button class="btn btn-danger btn-xs btn-delete" ng-click="confirmDelete(employee.id)">Delete</button>
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
                            <form name="frmEmployees" class="form-horizontal" novalidate="">

                                <div class="form-group error">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control has-error" id="name" name="name" placeholder="Fullname" value="{{name}}"
                                        ng-model="employee.name" ng-required="true">
                                        <span class="help-inline"
                                        ng-show="frmEmployees.name.$invalid && frmEmployees.name.$touched">Name field is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="{{email}}"
                                        ng-model="employee.email" ng-required="true">
                                        <span class="help-inline"
                                        ng-show="frmEmployees.email.$invalid && frmEmployees.email.$touched">Valid Email field is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Contact Number</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Contact Number" value="{{contact_number}}"
                                        ng-model="employee.contact_number" ng-required="true">
                                    <span class="help-inline"
                                        ng-show="frmEmployees.contact_number.$invalid && frmEmployees.contact_number.$touched">Contact number field is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Position</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="position" name="position" placeholder="Position" value="{{position}}"
                                        ng-model="employee.position" ng-required="true">
                                    <span class="help-inline"
                                        ng-show="frmEmployees.position.$invalid && frmEmployees.position.$touched">Position field is required</span>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btn-save" ng-click="save(modalstate, id)" ng-disabled="frmEmployees.$invalid">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
		
      <footer>
        <p>&copy; 2017 by Ahmad, Pemrograman Framework.NET Kelas 02</p>
		<br />
		<p>FASTIKOM - Universitas Sains Al-Qur'an Jawa Tengah di Wonosobo</p>
      </footer>
        </div>

        <!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
        <script src="<?= asset('app/lib/angular/angular.min.js') ?>"></script>
        <script src="<?= asset('js/jquery.min.js') ?>"></script>
        <script src="<?= asset('js/bootstrap.min.js') ?>"></script>

        <!-- AngularJS Application Scripts -->
        <script src="<?= asset('app/app.js') ?>"></script>
        <script src="<?= asset('app/controllers/employees.js') ?>"></script>
    </body>
</html>
