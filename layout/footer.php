<div class="footer"></div>
</body>
<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
    $(document).ready(function($) {
        $('.counter').counterUp({
            delay: 13,
            time: 1100
        });
        $('#Login').click(function(){
            $('#modal').show();
            $('#login,#nav-Login-tab').addClass('active');
        });
        $('#hide').click(function(){
            $('#modal').hide();
            $('#login,#nav-Login-tab').removeClass('active');
        });
        $('#Signup,#Get').click(function(){
            $('#modal').show();
            $('#signup').addClass('show active');
            $('#nav-Signup-tab').addClass('active');
        });
        $('#hide1').click(function(){
            $('#modal').hide();
            $('#signup,#nav-Signup-tab').removeClass('active');
        });
        $('#register').click(function(e){

            var valid = this.form.checkValidity();

                if(valid){
                    var username	= $('#username').val();
                    var password 	= $('#password').val();
                    var phonenumber = $('#phonenumber').val();
                    var dob 	    = $('#dateofbirth').val();
                    var post 	    = $('#postal').val();
                    var email 	    = $('#email').val();
                    e.preventDefault();	
                    $.ajax({
                        type: 'POST',
                        url: 'db/insert.php',
                        data: {username: username, password: password,phonenumber: phonenumber, dob: dob, post: post, email: email},
                        success: function(data){
                        Swal.fire({
                                    'title': 'Welcome',
                                    'text': 'Sign Up Successful!',
                                    'type': 'success'
                                    })                        
                        },
                        error: function(data){
                            Swal.fire({
                                    'title': 'Errors',
                                    'text': 'There were errors while saving the data.',
                                    'type': 'error'
                                    })
                        }
                    });     
                }
                else{  

                }
        });
        // $('#loginw').click(function(e){
        //     var valid = this.form.checkValidity();

        //         if(valid){
        //             var username = $('#logusername').val();
        //             var password = $('#logpassword').val();
        //         }
        //         e.preventDefault();
        //         $.ajax({
        //             type: 'POST',
        //             url: 'db/login.php',
        //             data: {username: username,password: password},
        //             success: function(data){
        //                 if($.trim(data)=== "1"){
        //                     setTimeout('window.location.href = "index.php"', 2000);
        //                 }
        //             },
        //             error: function(data){
        //                 alert('error');
        //             }
        //         })
        // });
    });
</script>
</html>