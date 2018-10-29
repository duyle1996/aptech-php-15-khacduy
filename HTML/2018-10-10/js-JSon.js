$(document).ready(function(){
    // $('#Js-button').click(function(){
       $.get('http://101.0.86.110:6699/api/v1/posts?page=2',function(responsive){
           var data = responsive.data.posts.data;
           data.forEach(function(data,index){
               
        
        console.log(data[0]);
        var Group = '<div class="card-group" id="js-cardGroup"></div>';
        $('#js-div-data').append(Group);
        var card = '<div class="card" id = "js-card"></div>';
        $(card).appendTo("#js-cardGroup");
        var CardBody = '<div class="card-body" id="js-CardBody"></div> ';
        $(CardBody).appendTo("#js-card");
        var h1 = '<h1 class="card-title" id = "Ctitle">' + data[i].title +'</h1>';
        $(h1).appendTo("#js-CardBody");


    
    
           
    
    })


 });
    
});