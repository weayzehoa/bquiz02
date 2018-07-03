<p style="color:#F00">*請設定您要註冊的帳號及密碼(最長12個字元)</p>
<form action="" method="post" id="regform">
	<table>
		<tr>
			<td>Step1:登入帳號</td>
			<td><input type="text" name="regacc" id="regacc"></td>
		</tr>
		<tr>
			<td>Step2:登入密碼</td>
			<td><input type="password" name="regpw"  id="regpw"></td>
		</tr>
		<tr>
			<td>Step3:再次確認密碼</td>
			<td><input type="password" name="regpw2"  id="regpw2"></td>
		</tr>
		<tr>
			<td>Step4:信箱(忘記密碼時使用)</td>
			<td><input type="text" name="regmail"  id="regmail"></td>
		</tr>
	</table>
	<input type="submit" value="註冊">
	<input type="reset" name="清除">
</form>
<script>
	$("#regform").on("submit", function(e){
		e.preventDefault();
		var acc = $("#regacc").val();
		var pw = $("#regpw").val();
		var pw2 = $("#regpw2").val();
		var mail = $("#regmail").val();
		
		if(acc == "" || pw == "" || pw2 == "" || mail == "")
		{
			alert("不可空白");
		}
		else if(pw != pw2)
		{
			alert("密碼不符,請重新輸入");
		}
		else
		{
			$.post("api.php?do=reg", {acc, pw, mail}, function(r){
				if(r == "repeat")	alert("帳號重複");
				else	alert("註冊完成，歡迎加入");
			})
		}
	})
</script>