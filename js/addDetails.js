//add button click event using button id This is jquery format
// We can do this using javascript also
// By using
/* 
document.getElementById("add").addEventListener('click',function(){
    write code here
});  
 */
$("#add").click(function(){
// Fetch textbox value using id=>name
    var name = $('#username').val();
// Fetch textarea value using id=>address
    var address = $('#address').val(); 
    var numpattern = /^[0-9]*$/;
    var alphanum = /^[0-9]+[a-zA-z]*$/;
    if(name == "" || name.match(numpattern) || name.match(alphanum)){
        alert("Enter proper username");
    }
    else if(address == ""){
        alert("Enter proper address");
    }

//Ajax function call
    $.ajax({
        //calling php file to insert into database
        url :'additem.php',
        //type as post or you can use get but for security purpose better to you post
        type : 'post',
        //datatype json always use json format
        dataType : 'json',
        //pass data in the format json 
        data:{
            //key:value
            name:name,
            address:address,
        },
        //success function
        success:function(result){
            if(result){
                //If result is true
                alert("Data inserted successfully");
                location.reload();
            }
            else{
                //If result is false
                alert("Failed to insert Data");
            }
        }
    })
});