angular.module('app.controllers')
    .controller('ProjectTasksEditController', [
        '$scope', '$routeParams', '$location','appConfig','ProjectTask',
        function($scope,$routeParams,$location,appConfig,ProjectTask){

            $scope.task = new ProjectTask.get({
                id: $routeParams.id,
                idTask: $routeParams.idTask
            });

            $scope.status = appConfig.projectTask.status;

            $scope.start_date = {
                status: {
                    opened: false
                }
            };

            $scope.due_date = {
                status: {
                    opened: false
                }
            };

            $scope.openStartDatePicker = function($event){
                $scope.start_date.status.opened = true;
            };

            $scope.openDueDatePicker = function($event){
                $scope.due_date.status.opened = true;
            };

            $scope.save = function(){
                if($scope.form.$valid) {
                    ProjectTask.update({
                        id: $routeParams.id,
                        idTask: $scope.task.id
                    },$scope.task, function () {
                        $location.path('/projects/'+$routeParams.id+'/tasks');
                    })
                }
            }
    }]);