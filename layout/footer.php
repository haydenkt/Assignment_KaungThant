<div class="footer"></div>
</body>
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script> -->

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
        $('#signupw').click(function(e){

            var valid = this.form.checkValidity();

                if(valid){
                    var email 	    = $('#email').val();
                    var username	= $('#username').val();
                    var password 	= $('#password').val();
                    var phoneno     = $('#phno').val();
                    var dob 	    = $('#dob').val();
                    var post 	    = $('#post').val();
                    e.preventDefault();	
                    $.ajax({
                        type: 'POST',
                        url: 'db/register.php',
                        data: {email: email, username: username, password: password, phoneno: phoneno, dob: dob, post: post},
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
    });
</script>
</html>