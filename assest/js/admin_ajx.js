
//Ajax call for Admin Login verification
function checkAdminLogin(){
    console.log("Log ad click");
    var adminLogemail=$("#adminLogemail").val();
    var adminLogpassword=$("#adminLogpassword").val();
    $.ajax({
 
       url:'admin/admin.php',
       method:"POST",
       data:{
          checkLogEmail:"checkLogEmail",
          adminLogemail:adminLogemail,
          adminLogpassword:adminLogpassword,
 
       },
       success:function(data){
          console.log(data);
          if(data==0){
             $("#StatusAdminLogMsg").html('<small class="alert alert-danger">Invalid email id or password</small>');
 
          }else if(data==1){
            $("#StatusAdminLogMsg").html('<small class="alert alert-success">success Loding....</small>');
 
             setTimeout(()=>{
                window.location.href="admin/adminDashboard.php";
             },1000);
          }
       }
    })
 
 
 }