function SubjectController($scope) {
	$scope.test = "S";
	$scope.POCount = 5;
	var range = [];
	for(var i=1;i<=$scope.POCount;i++) {
	  range.push(i);
	}
	$scope.range = range;
	$scope.mapValues = [
		{ name:"-" , value:'Z'},
		{ name:"S" , value:'S'},
		{ name:"M" , value:'M'},
		{ name:"W" , value:'W'},
	];
	$scope.COPOInfo = [
		{ id:"CO1" , map:['Z','S','M','M','Z'], description:"outcome1" , cEdit:false},
		{ id:"CO2" , map:['Z','S','M','Z','W'], description:"outcome2" , cEdit:false},
		{ id:"CO3" , map:['Z','S','M','S','S'], description:"outcome3" , cEdit:false},
	];
	
	$scope.editCOPOInfo = function (id){
		id.cEdit = true;
	};
	$scope.saveCOPOInfo = function (id){
		id.cEdit = false;
	};
	$scope.addCOPOInfo = function (id){
		$scope.COPOInfo.push({id:"CO"+($scope.COPOInfo.length+1) , map:['Z','Z','Z','Z','Z'] , description:"" , cEdit:true});
	};
	$scope.delCOPOInfo = function (id){
		$scope.COPOInfo.splice(-1,1);
	};
}
function CourseController($scope) {

	$scope.POInfo = [
		{id:"PO1" , description: "prog outcome1" , pEdit:false},
		{id:"PO2" , description: "prog outcome2" , pEdit:false},
		{id:"PO3" , description: "prog outcome3" , pEdit:false},
	];
	
	$scope.Courses = [
		{id:1, cID:'C21'  , cName:"Algorithms" , cEdit:false , incomplete:false},
		{id:2, cID:'C22'   , cName:"Data Structures" , cEdit:false , incomplete:false},
	];
	$scope.edit = false;
	$scope.error = false;
	$scope.incomplete = false;
	
	$scope.addCourse = function(id) {
		if (id == 'new') {
			$scope.edit = true;
			$scope.incomplete = true;
			$scope.cID = '';
			$scope.cName = '';
		}
	};
	$scope.saveNewCourse = function() {
		$scope.Courses.push({id:3, cID:$scope.cID  , cName:$scope.cName , cEdit:false , incomplete:false});
		$scope.edit = false;
	};
	$scope.editCourse = function(id) {
		id.dEdit = true;
		$scope.$watch(id.cName,$scope.testEdit(id));
		$scope.$watch(id.cID,$scope.testEdit(id));
	};
	$scope.saveCourse = function(id) {
		id.dEdit = false;
	};
	$scope.$watch('cName',function() {$scope.test();});
	$scope.$watch('cID',function() {$scope.test();});
	$scope.test = function() {
		$scope.incomplete = false;
		if ($scope.edit && (!$scope.cName.length || !$scope.cID.length)) {
			$scope.incomplete = true;
		}
	};
	$scope.getName = function(id){
		return id.cName;
	};
	$scope.testEdit = function(id) {
		//alert(id.dName);
		id.incomplete = false;
		if (id.edit && (!id.cName.length || !id.cID.length)) {
			id.incomplete = true;
		}
	};
	
	$scope.addPOInfo = function (id){
		$scope.POInfo.push({id:"PO"+($scope.POInfo.length+1) , description:"" , pEdit:true});
	};
	$scope.delPOInfo = function (id){
		$scope.POInfo.splice(-1,1);
	};
	$scope.editPOInfo = function (id){
		id.pEdit = true;
	};
	$scope.savePOInfo = function (id){
		id.pEdit = false;
	};
}
function programController($scope,$location) {
	$scope.arr = $location.search();
	$scope.Programs = [
		{id:1, pID:'BE'  , pName:"BE" , pEdit:false , incomplete:false},
		{id:2, pID:'ME'   , pName:"ME" , pEdit:false , incomplete:false},
	];
	$scope.edit = false;
	$scope.error = false;
	$scope.incomplete = false;
	
	$scope.addProgram = function(id) {	
		if (id == 'new') {
			$scope.edit = true;
			$scope.incomplete = true;
			$scope.pID = '';
			$scope.pName = '';
		}
	};
	$scope.saveNewProgram = function() {
		$scope.Programs.push({id:3, pID:$scope.pID  , pName:$scope.pName , pEdit:false , incomplete:false});
		$scope.edit = false;
	};
	$scope.editProgram = function(id) {
		id.dEdit = true;
		$scope.$watch(id.pName,$scope.testEdit(id));
		$scope.$watch(id.pID,$scope.testEdit(id));
	};
	$scope.saveProgram = function(id) {
		id.dEdit = false;
	};
	$scope.$watch('pName',function() {$scope.test();});
	$scope.$watch('pID',function() {$scope.test();});
	$scope.test = function() {
		$scope.incomplete = false;
		if ($scope.edit && (!$scope.pName.length || !$scope.pID.length)) {
			$scope.incomplete = true;
		}
	};
	$scope.getName = function(id){
		return id.dName;
	}
	$scope.testEdit = function(id) {
		id.incomplete = false;
		if (id.edit && (!id.pName.length || !id.pID.length)) {
			id.incomplete = true;
		}
	};
}
function departmentController($scope,$http) {
	/*
		Using $http Methods for web service call.
		CORS - Managed at server side.	
		[Note : Missing a space after get call caused an error which wasn't even visible in console - No idea Why :p
		Burnt away a hell lot of my time >.<]
	*/
	$http.get("http://localhost:8010/edu.tce.cse.obe/rest/2015/department")
   .success(function(response) {$scope.department = response; 
   $scope.departments = $scope.department.department; 
   for(dept in $scope.departments){
	 	dept.dEdit = false;
	 	dept.incomplete = false;
	 }
   });
	
	
	
	
	$scope.edit = false;
	$scope.error = false;
	$scope.incomplete = false;
	
	$scope.addDepartment = function(id) {
		if (id == 'new') {
			$scope.edit = true;
			$scope.incomplete = true;
			$scope.departmentName = '';
			$scope.departmentID = '';
		}
	};
	$scope.saveNewDepartment = function() {
		$scope.departments.push({departmentID:$scope.departmentID  , departmentName:$scope.departmentName , dEdit:false , incomplete:false});
		$scope.edit = false;
	};
	$scope.editDepartment = function(id) {
		id.dEdit = true;
		$scope.$watch(id.departmentName,$scope.testEdit(id));
		$scope.$watch(id.departmentID,$scope.testEdit(id));
	};
	$scope.saveDepartment = function(id) {
		id.dEdit = false;
	};

	$scope.$watch('departmentName',function() {$scope.test();});
	$scope.$watch('departmentID',function() {$scope.test();});
	$scope.test = function() {
		$scope.incomplete = false;
		if ($scope.edit && (!$scope.departmentName.length || !$scope.departmentID.length)) {
			$scope.incomplete = true;
		}
	};
	$scope.getName = function(id){
		return id.departmentName;
	}
	$scope.testEdit = function(id) {
		id.incomplete = false;
		if (id.edit && (!id.departmentName.length || !id.departmentID.length)) {
			id.incomplete = true;
		}
	};
}
