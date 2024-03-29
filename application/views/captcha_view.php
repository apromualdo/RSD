<html>
    <head>		
        <title>Add captcha using CodeIgniter</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
             <script type="text/javascript">
            
            // Ajax post for refresh captcha image.
            $(document).ready(function() {
                $("a.refresh").click(function() {
                    jQuery.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>" + "index.php/captcha_controller/captcha_refresh",
                        success: function(res) {
                            if (res)
                            {
                                  jQuery("div.image").html(res);
                            }
                        }
                    });
                });
            });
        </script> 
    </head>
    <body> 
        <div class="main">
            <div id="content">
                <h2 id="form_head">Captcha Using Codelgniter</h2><br/>
                <hr>
                <div id="form_input">
                    <?php
                    
                    // Form Open
                    echo form_open();
                    
                    // Name Field
                    echo form_label('Name');
                    $data_name = array(
                        'name' => 'name',
                        'class' => 'input_box',
                        'placeholder' => 'Please Enter Name',
                        'id' => 'name',
                        'required' => ''
                    );
                    echo form_input($data_name);
                    echo "<br>";
                    echo "<br>";
                    
                       // Email Field
                    echo form_label('Email');
                    $data_email = array(
                        'name' => 'email',
                        'class' => 'input_box',
                        'placeholder' => 'Please Enter Email',
                        'id' => 'email',
                        'required' => ''
                    );
                    echo form_input($data_email);
                    echo "<br>";
                    echo "<br>";
                    
                    echo "<div class='image'>";
                    
                    // $image is the index of $data array. which will send by controller.
                    echo $image;  
                    echo "</div>";
                    
                    // Calling for refresh captcha image.
                    echo "<a href='#' class ='refresh'><img id = 'ref_symbol' src =".base_url()."img/refresh.png></a>";
                     echo "<br>";
                    echo "<br>";
                    
                    // Captcha word field.
                     echo form_label('Captcha');
                    $data_captcha = array(
                        'name' => 'captcha',
                        'class' => 'input_box',
                        'color' => 'white',
                        'placeholder' => '',
                        'id' => 'captcha'
                    );
                    echo form_input($data_captcha);
                    ?>
                </div>
                <div id="form_button">
                    <?php echo form_submit('submit', 'Submit', "class='submit'"); ?>
                </div>                   
                <?php 
                // Form Close
                echo form_close(); ?>
            </div> 
        </div>
    </body>
</html>