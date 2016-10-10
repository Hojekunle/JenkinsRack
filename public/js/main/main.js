var app = angular.module('myRack', ['SharedServices'] );

angular.module('SharedServices', [])
    
    .config(function ($httpProvider) {
        $httpProvider.responseInterceptors.push('myHttpInterceptor');
        var spinnerFunction = function (data, headersGetter) {
            // todo start the spinner here
            $('#loading').show();
            return data;
        };
        $httpProvider.defaults.transformRequest.push(spinnerFunction);
    })

// register the interceptor as a service, intercepts ALL angular ajax http calls

    .factory('myHttpInterceptor', function ($q, $window) {
        return function (promise) {
            return promise.then(function (response) {
                // do something on success
                // todo hide the spinner
                $('#loading').hide();
                return response;
 
            }, function (response) {
                // do something on error
                // todo hide the spinner
                $('#loading').hide();
                return $q.reject(response);
            });
        };
    });

    JavaScript

function ShopCtrl($scope, $http) {

	$http({ method: 'GET', url: '/rack/project/', cache: true }).
		success(function(data, status) {
			$scope.projects = data
		}).
		error(function(data, status) {
			console.log('Status: ' + status);
		});

	$scope.clearBought = function() {
		$scope.projects = _.filter($scope.projects, function(project) {
			if(project.bought) {
				$http.delete('/rack/project/' + project.id).error(function(data, status) {
					console.log(status);
				});
			}
			return !project.bought;
		});

	}

	$scope.addProject = function() {
		$http.post('/rack/project', { text: $scope.projectEntry } ).success(function(data, status) {
			if(data) {
				var last = _.last($scope.projects);
				$scope.projects.push({text: $scope.projectEntry, bought: false, id: (last.id + 1) });
				$scope.projectEntry = '';
				console.log($scope.projects);
			} else {
				console.log('There was a problem. Status: ' + status + '; Data: ' + data);
			}
		}).error(function(data, status) {
			console.log('status: ' + status);
		});
		
	}

    function ProjectCtrl($scope, $http) {
 
	$http({ method: 'GET', url: '/rack/project/', cache: true }).
		success(function(data, status) {
			$scope.items = data
		}).
		error(function(data, status) {
			console.log('Status: ' + status);
		});
 
	$scope.RemoveProject = function() {
		$scope.projects = _.filter($scope.projects, function(project) {
			if(project.checked) {
				$http.delete('/rack/project/' + project.id).error(function(data, status) {
					console.log(status);
				});
			}
			return !project.checked;
		});
 
	}
 
	$scope.addProject = function() {
		$http.post('/rack/project', { text: $scope.projectEntry } ).success(function(data, status) {
			if(data) {
				var last = _.last($scope.projects);
				$scope.projects.push({text: $scope.projectEntry, checked: false, id: (last.id + 1) });
				$scope.projectEntry = '';
				console.log($scope.projects);
			} else {
				console.log('There was a problem. Status: ' + status + '; Data: ' + data);
			}
		}).error(function(data, status) {
			console.log('status: ' + status);
		});
		
	}
 
	$scope.isChecked = function(checked) {
		return (checked) ? 'checked' : 'not-checked';
	}
 
}
}
