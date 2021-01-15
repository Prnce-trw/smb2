<div class="modal fade show" id="modaladdadmin" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="text-center">
            <img src="{{asset('smb-frontend/images/smb-logo.png')}}" alt="">
        </div>
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create Account</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('backoffice/user')}}" method="POST" enctype="multipart/form-data" id="createadmin">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">First Name</label>
                                <div class="col-sm-10">
                                    <input type="hidden" name="status" value="1" placeholder="status admin">
                                    <input type="text" class="form-control" name="name" placeholder="First Name..." required>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Last Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="lname" placeholder="Last Name..." required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control phone-number" name="phone" maxlength="14" placeholder="(XXX) XXX-XXXX">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" placeholder="Email..." id="email" required>
                            <div id="resultemail"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            <span class="mytooltip tooltip-effect-5">
                                <span class="tooltip-item">Password</span>
                                <span class="tooltip-content clearfix">
                                    <span class="tooltip-text">Password should be atleast 6 characters.</span>
                                </span>
                            </span>
                        </label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="password" class="form-control demoInputBox" id="password" name="password" placeholder="Password..." onkeyup="checkPasswordStrength()" required>
                                <span>
                                    <button type="button" id="seepassword" name="seepassword" class="btn btn-default"><i class="fa fa-eye"></i></button>
                                </span>
                            </div>
                            <div id="password-strength-status"></div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary waves-effect waves-light" form="createadmin">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>
<script>
    // phone
    $('.phone-number').keydown(function (e) {
        var key = e.which || e.charCode || e.keyCode || 0;
        $phone = $(this);

        // Don't let them remove the starting '('
        if ($phone.val().length === 1 && (key === 8 || key === 46)) {
            $phone.val('('); 
            return false;
        } 
        // Reset if they highlight and type over first char.
        else if ($phone.val().charAt(0) !== '(') {
            $phone.val('('+String.fromCharCode(e.keyCode)+''); 
        }

        // Auto-format- do not expose the mask as the user begins to type
        if (key !== 8 && key !== 9) {
            if ($phone.val().length === 4) {
                $phone.val($phone.val() + ')');
            }
            if ($phone.val().length === 5) {
                $phone.val($phone.val() + ' ');
            }			
            if ($phone.val().length === 9) {
                $phone.val($phone.val() + '-');
            }
        }

        // Allow numeric (and tab, backspace, delete) keys only
        return (key == 8 || 
                key == 9 ||
                key == 46 ||
                (key >= 48 && key <= 57) ||
                (key >= 96 && key <= 105));	
        }).bind('focus click', function () {
            $phone = $(this);

            if ($phone.val().length === 0) {
                $phone.val('(');
            }
            else {
                var val = $phone.val();
                $phone.val('').val(val); // Ensure cursor remains at the end
            }
        })

        .blur(function () {
            $phone = $(this);

            if ($phone.val() === '(') {
                $phone.val('');
            }
    });

    // check email
    $('#email').keyup(function() {
        var email = $(this).val();
        $.ajax({
            url: '{{url('backoffice/checkemail')}}',
            type: 'GET',
            data: {email: email},
        }).done(function (data) {
            $('#resultemail').html(data.html);
        });
    })

    $(document).ready(function() {
        $('#seepassword').on('click', function() {
            var passwordField = $('#password'); 
            var passwordFieldType = passwordField.attr('type');
            if(passwordField.val() != '')
            {
                if(passwordFieldType == 'password')  
                {  
                    passwordField.attr('type', 'text');  
                    $(this).html('<i class="fa fa-eye-slash"></i>');  
                }  
            else  
            {  
                passwordField.attr('type', 'password');  
                $(this).html('<i class="fa fa-eye"></i>');  
            }
        } else {
            alert("Please Enter Password");
        }
        })
    })
</script>