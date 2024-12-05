<div class="contact_area">
            <h2>Contact Us</h2>
           	
            <form action="#" class="contact_form" method="post">
              <input class="form-control" type="text" placeholder="Name*" maxlength="50" name="Name" required="required">
              <input class="form-control" type="email" placeholder="Email*" maxlength="50" name="Email" required="required">
              <input class="form-control" type="text" placeholder="Phone*" maxlength="50" name="Phone">
              <input class="form-control" type="text" placeholder="Title*" maxlength="50" name="Title" required="required">
              <textarea class="form-control" cols="30" rows="10" placeholder="Message*" name="Content" required="required"></textarea>
              <input type="submit"  name="BtnSend" value="Send Message">
            </form>
</div>
<?php
	if(isset($_POST['BtnSend']))
	{
		$Name=$_POST['Name'];  //boostrap : phần mềm em đang dùng anh không thấy hỗ trợ 'class' của boostrap Ví dụ
		$Email=$_POST['Email']; 
		$Phone=$_POST['Phone'];
		$Title=$_POST['Title'];
		$Content=$_POST['Content'];
		$Today=date("d-m-Y");//ham lay ngay hien tai
		$Time=date('H:i:s'); // hàm lấy thời gian hiện tại
		Lien_He($Name,$Email,$Phone,$Title,$Content,$Today,$Time);
		echo"<script>alert('Gửi Thành Công! Chúng tôi sẽ liên hệ với bạn sau'); window.location='index.php'</script>";
	}
?>
