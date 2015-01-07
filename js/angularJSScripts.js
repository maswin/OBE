function departmentController($scope) {
	$scope.departments = [
		{id:1, dID:'CSE'  , dName:"Computer Science" , dEdit:false , incomplete:false},
		{id:2, dID:'EEE'   , dName:"Electrical & Electronics" , dEdit:false , incomplete:false},
	];
	$scope.edit = false;
	$scope.edit1 = false;
	$scope.error = false;
	$scope.incomplete = false;
	$scope.addDepartment = function(id) {
		if (id == 'new') {
			$scope.edit = true;
			$scope.incomplete = true;
			$scope.dID = '';
			$scope.dName = '';
		}
	};
	$scope.saveNewDepartment = function() {
		$scope.edit = false;
	};
	$scope.editDepartment = function(id) {
		id.dEdit = true;
		$scope.$watch(id,function() {$scope.testEdit();});
	};
	$scope.saveDepartment = function(id) {
		id.dEdit = false;
	};
	$scope.$watch('dName',function() {$scope.test();});
	$scope.$watch('dID',function() {$scope.test();});
	$scope.test = function() {
		$scope.incomplete = false;
		if ($scope.edit && (!$scope.dName.length || !$scope.dID.length)) {
			$scope.incomplete = true;
		}
	};
	$scope.testEdit = function(id) {
		id.incomplete = false;
		if (id.edit && (!id.dName.length || !id.dID.length)) {
			id.incomplete = true;
		}
	};
	

}