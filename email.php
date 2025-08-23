<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];


		  $headers  = "From:".$email."\r\n";

	    $headers .= "Content-type: text/html\r\n";

		  $to = 'sales@huegoengineering.com';
		  $subject = 'Huego Engineering New Enquiry';
			
			$message = ' 
            <div style="  color:#000; widows:530px; text-align:justify; padding:2px; line-height:25px;

             box-shadow:0px 0px 10px 0px #ccc inset; ">        

             <h4> To Huego,</h4><hr/>

            Please find the Contact form details below:<br/>
            <hr/>
            Contact Information
            <hr/>
            Name : '.$name.'<br/>
            Email : '.$email.'<br/>
            Mobile : '.$phone.'<br/>
            subject: '.$subject.'<br/>
            Message : '.$message.'<br/>
           
            <hr/>

            Regards,<br/>

            Huego Team	

            </div>

               

            ';
				
				
			if(@mail($to, $subject, $message, $headers))
			{



			
?>
	<script type="text/javascript">
		alert('Thank you for contact us. We will contact u soon!');
		window.location='index.html';
	</script>
<?php } ?>