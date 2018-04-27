var cg = document.myform.cg;
var oss = document.myform.oss;
var bom = document.myform.bom;
var elective = document.myform.elective;
var major = document.myform.major;
var total = document.myform.total;

var ree = parseInt(cg.value) + parseInt(oss.value) + parseInt(bom.value) + parseInt(elective.value) + parseInt(major.value);
total.value = parseInt(ree.value);
	


