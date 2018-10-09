 $(document).ready(function(){
// $("#them").click(function(){
// $("p").append(" <b>Khac</b>");



// });




var table = '<table id ="js-table"></table>';
$("#js-div-table").append(table);   
var thead = '<thead id ="js-thead"></thead>';
$(thead).appendTo("js-table");   
var tr = '<tr id ="js-tr-head"></tr>';
$(tr).appendTo("js-thead");   
var th = '<th>#</th><th>Name</th><th>Email</th>';
$(th).appendTo("js-tr-head");  
var tbody ='<tbody></tbody>';
$('#js-thead').after(tbody);
var trbody = '<tr id ="js-trbody"></tr>';
$(trbody).appendTo("tbody");
var thBody = '<th> 1 </th>';
var tdBody = '<td> Duy </td><td>Duylebkdn@gmail.com</td>';
$("#trbody").appendTo(thBody,tdBody);

});