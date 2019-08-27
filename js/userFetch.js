//This function will call once DOM fully loaded
$(document).ready(function(){
    $.ajax({
        url : 'fetchItem.php',         //calling php file to fetch data 
        type : 'post',                
        dataType : 'json',
        async : false,
		success : function(response){			
			table = $("#UserTable").DataTable({                //This is jquery data table
				data: response,
                    scrollX: true,
                    scrollY: '50vh',
					select: true,
					scrollCollapse: true,
					paging: true,
  // table columns here 3 columns
				columns: [  					
					// 1st column username
					{'data': 'username'}, 
					// 2nd column address              
					{'data' :'address'},
					// 3rd column action with 2 a-tags for update and delete  
                    {'data': null,
					   "render" : function(data){
						   //onclick will call the function when the a-tag was clicked
						   //when update clicked update function will call
						   //when delete clicked delete function will call
							   return '<a class="atag" href="javascript:void(0);" onclick="Update('+ data["userid"] +',\''+data["username"]+'\');"><span class="label label-sm label-success"> Update </span></a><a href="javascript:void(0);" onclick="Delete('+ data["userid"] +',\''+data["username"]+'\');"><span class="label label-sm label-danger"> Delete </span></a>';	
						}
					
					},
				]
			});
		}
    })
});

//update function for update the database value
function Update(userid,username){
	$("#usrid").val(userid);
	//Here when user click update this function will call and modal will be opening 
	$('#editUser').modal('show'); 
}
//In Model when update button clickes thos function will calls
$('#update').click(function(){
	var id = $("#usrid").val();
	var select  = $('#select').val();
	var updater = $("#updateInput").val();
	if(id == "" || updater ==""){
		alert("Enter proper input");
	}
	else{
		$.ajax({
			url : 'update.php', //calling php file to update the database value
			type : 'post',
			dataType : 'json',
			data : {id :id,
					select:select,
					updater:updater
				},
			success:function(result){
				if(result){
					alert('Updated successfully');
					location.reload();
				}
				else{
					alert('Failed to update');
				}
			}
		});
	}
	//before closing the model all textbox values should be clear 
	$('#editUser').on('hidden.bs.modal', function () {
        $(this).find("input,textarea,select").val('').end();
	});
	// to hide the modal
    $('#editUser').modal('hide'); 	
});
// when user click on delete then this function will call
function Delete(id,username){
	$.ajax({
		url :'delete.php', // caling php file to delete the database data
		type :'post',
		dataType : 'json',
		data :{
			id:id,
			username:username
		},
		success:function(result){
			if(result){
				alert("Deleted data successfully");
				location.reload();
			}
			else{
				alert("Failed to delete data");
			}
		}
	});
}
//close button in modal
$('#close').click(function(){
	location.reload(true);
})