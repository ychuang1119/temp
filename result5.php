<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

	<meta charset="utf-8">
	<title>result</title>
</head>
<body style=" margin: 0;
					    font-family: Noto Sans TC,Noto Sans JP,sans-serif;
					    font-size: 1rem;
					    font-weight: 400;
					    line-height: 1.9;
					    color: #212529;
					    text-align: left;
					    display: none;
					    background-color: rgba(204, 202, 169, 0.8);
					    /**
					    background-color: rgba(255, 255, 255, 0.8);
					    background-image: url('pexels-nataliya-vaitkevich-6941883.jpg');
					    background-size: cover;**/">


    <div style="background-color: hsla(0,0%,100%,.8);padding: 0.5rem 2rem; font-size:30px;">Type 2 Diabetes risk calculator</div>

		<h1 style="text-align: center;margin-bottom: 0px;">Your results</h1>
		<h3 style="text-align: center;margin-bottom: 0px;color: #930000;">* Please note that the risk calculator provides you with estimates of study results only. These estimates are provided for reference purposes only and do not guarantee the actual results！</h3>
		<h2 style="text-align: center;margin-bottom: 0px;color: #930000;"> *For research, not for clinical or medical used！</h2>

		

    <div style="
						    box-shadow: 0 1px 6px rgb(0 0 0 / 12%), 0 1px 4px rgb(0 0 0 / 24%);
						    overflow: hidden;
						    margin-bottom: 20px;
						    min-height: 300px;
						    width: 1500px;
						    background-color: hsla(0,0%,100%,.9);
						    border-radius: 30px;
						    margin: 30px auto;
						    padding: 50px 80px ;
						    display: flex;
						  	justify-content:space-around;
  							flex-direction: column; ">

   
    	<div style="height: 100%;" id="data">
			<table style="width: 100%; text-align: center;height: 80%;">
				
	  			<h2 style="margin: 0px 0px 20px 0px;">Probability of developing Type 2 Diabetes (T2D) </h2>
	  			<tr style="height:90px;">
	  				<td style="font-size:26px;">Follow-up time</td>
	  				<td style="font-size:26px;">Without PRS<p style="margin-top: 0px;font-size: 18px;">(Age, Sex, T2D family history)</p></td>
	  				<td style="font-size:26px;">With PRS <p style="margin-top: 0px;font-size: 18px;">(Age, Sex, T2D family history, PRS)</p></td>
	  			</tr>
				<tr style="height: 60px;">
					<td style="font-size:24px;">3 years</td>
					<td id="s3y_1" style="font-size:24px;">-</td>
					<td id="s3y_2" style="font-size:24px;">-</td>
				</tr>
				<tr style="height: 60px;">
					<td style="font-size:24px;">5 years</td>
					<td id="s5y_1" style="font-size:24px;">-</td>
					<td id="s5y_2" style="font-size:24px;">-</td>
				</tr>
				<tr style="height: 60px;">
					<td style="font-size:24px;">7 years</td>
					<td id="s7y_1" style="font-size:24px;">-</td>
					<td id="s7y_2" style="font-size:24px;">-</td>
				</tr>
			</table>

			<div>
				<!--
				<h3>
					<span style="font-size:22px;">A</span>
					<span style="font-size:22px;" id="sex_get" ></span>
					<span style="font-size:22px;">participant aged </span>
					<span style="font-size:22px;" id="age_get"></span>
					<span style="font-size:22px;" id="family_get" ></span>
					<span style="font-size:22px;">a family history of T2D had</span>
					<span style="font-size:22px;" id="P_result" ></span>
					<span style="font-size:22px;" >chance of developing type 2 diabetes after 3 years follow-up. </span>	
				</h3>
				-->
				<h3>
					<span style="font-size:22px;">A</span>
					<span style="font-size:22px;" id="sex_get" ></span>
					<span style="font-size:22px;">participant aged </span>
					<span style="font-size:22px;" id="age_get"></span>
					<span style="font-size:22px;" id="family_get" ></span>
					<span style="font-size:22px;">a family history of T2D has a probability of </span>
					<span style="font-size:22px;" id="P_result" ></span>
					<span style="font-size:22px;" > of developing T2D after a 3-year follow-up. </span>	
				</h3>
				<div style="height:20px;"></div>
			</div>
		</div>

		<div style="display: flex;align-items: center; /* 垂直居中 */justify-content:space-around;
  flex-direction: row;">

		<div style="border-radius: 10px;background-color: white;
	    box-shadow: 0 1px 6px rgb(0 0 0 / 12%), 0 1px 4px rgb(0 0 0 / 24%);
	    padding: 20px 20px 0;position: relative; 
	    margin-bottom: 20px;" id="image2">
	    </div>
	    <div style="width:1%"></div>

	    <div style="border-radius: 10px;background-color: white;
	    box-shadow: 0 1px 6px rgb(0 0 0 / 12%), 0 1px 4px rgb(0 0 0 / 24%);
	    padding: 20px 20px 0;position: relative; 
	    margin-bottom: 20px;" id="image2_1">
	    </div>
	    </div>



	
	</div>


	<div style="border-radius: 10px;background-color: white;width: 45%;
    box-shadow: 0 1px 6px rgb(0 0 0 / 12%), 0 1px 4px rgb(0 0 0 / 24%);
    padding: 0px 0px 0;
    overflow: hidden;
    margin-bottom: 20px;
    min-height: 300px;
    width: 1500px;
    background-color: hsla(0,0%,100%,.9);
    border-radius: 30px;
    margin: 30px auto;
    padding: 50px 80px ;
    display: flex;
  justify-content:space-around;
  flex-direction: column; 

  
    ">
    
    	<div style="width:100%;height: 100%;float:left;" id="data1">
			<table style="width: 100%; text-align: center;height: 80%;">
				
	  			<h2 style="margin: 0px 0px 10px 0px;"> Type 2 Diabetes (T2D) risk </h2>
	  			<tr style="height:90px;">
	  				<td></td>
	  				<td style="font-size:26px;">Without PRS</td>
	  				<td style="font-size:26px;">With PRS </td>
	  			</tr>
	  			<!--<tr style="height:90px;">
	  				<td></td>
	  				<td style="font-size:18px;"><p style="margin-top: 0px;font-size: 18px;">(Age, Sex, T2D family history)</p></td>
	  				<td style="font-size:18px;"><p style="margin-top: 0px;font-size: 18px;">(Age, Sex, T2D family history, PRS)</p></td>
	  			</tr>-->
				<tr style="height: 60px;">
					<td style="font-size:24px;width: 200px;">Without MRS</td>
					<td id="r_1" style="font-size:24px;">-</td>

					<td id="r_2" style="font-size:24px;">-</td>
				</tr>
				<!--<tr style="height:90px;">
	  				<td></td>
	  				<td style="font-size:18px;"><p style="margin-top: 0px;font-size: 18px;">(Age, Sex, T2D family history, MRS)</p></td>
	  				<td style="font-size:18px;"><p style="margin-top: 0px;font-size: 18px;">(Age, Sex, T2D family history, PRS, MRS)</p></td>
	  			</tr>-->
				<tr style="height: 60px;">
					<td style="font-size:24px;">With MRS</td>
					<td id="r_3" style="font-size:24px;">-</td>
					<td id="r_4" style="font-size:24px;">-</td>
				</tr>
			</table>

			<div>
				<!--
				<h3>
					<span style="font-size:22px;">A</span>
					<span style="font-size:22px;" id="sex_get1" ></span>
					<span style="font-size:22px;">participant aged </span>
					<span style="font-size:22px;" id="age_get1"></span>
					<span style="font-size:22px;" id="family_get1" ></span>
					<span style="font-size:22px;">a family history of T2D had</span>
					<span style="font-size:22px;" id="P_result1" ></span>
					<span style="font-size:22px;">chance of developing type 2 diabetes. </span>	
				</h3>
				-->
				<h3>
					<span style="font-size:22px;">A</span>
					<span style="font-size:22px;" id="sex_get1" ></span>
					<span style="font-size:22px;">participant aged </span>
					<span style="font-size:22px;" id="age_get1"></span>
					<span style="font-size:22px;" id="family_get1" ></span>
					<span style="font-size:22px;">a family history of T2D has probability of</span>
					<span style="font-size:22px;" id="P_result1" ></span>
					<span style="font-size:22px;">of developing T2D. </span>	
				</h3>
				<div style="height:20px;"></div>
			</div>
			
		</div>



		<div style="display: flex;align-items: center; justify-content:space-around;flex-direction: row;">

		<div style="border-radius: 10px;background-color: white;
	    box-shadow: 0 1px 6px rgb(0 0 0 / 12%), 0 1px 4px rgb(0 0 0 / 24%);
	    padding: 20px 20px 0;position: relative; 
	    margin-bottom: 20px;" id="image1">

	  </div>
	  <div style="width:1%"></div>

	  <div style="border-radius: 10px;background-color: white;
	    box-shadow: 0 1px 6px rgb(0 0 0 / 12%), 0 1px 4px rgb(0 0 0 / 24%);
	    padding: 20px 20px 0;position: relative; 
	    margin-bottom: 20px;" id="image1_1">
	  </div>
	  </div>




	</div>




<?php
	if(isset($_POST['age'],$_POST['sex'])) {


		#生成改sample的亂數
		function random_sampleID($length = 32, $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789') {
			if (!is_int($length) || $length < 0) {
				return false;
			}
			$charlen = strlen($characters) - 1;
			$string = '';

			for ($i = 0; $i < $length; $i++) {
				$string .= $characters[mt_rand(0, $charlen)];
			}
			return $string;
		}
		$user_id = random_sampleID();

		/*用到database

		#檢查隨機生成給sample的unique亂碼代號是否已在database中, 如果已在就重新生成
		include("connect.php");
		#header("Connect-type: text/html; charset = utf-8");
		$slcdb = mysqli_select_db($db_link,"t2d");
		if(!$slcdb){
			die("fail");
		}
		else{
			echo "";
		}

		$dataname="userinfo";
		$sql_query= "SELECT `figname` FROM ".$dataname;
		$result=mysqli_query($db_link,$sql_query);
		$result1 = [];
		while ($array = mysqli_fetch_array($result)) {
		    $result1[] = $array['figname'];
		}
		$x = -1;
		while($x ==-1) {
		  if (in_array($user_id,$result1)) {
		    $user_id = random_sampleID();
		}
		$x=1;
		}

		*/


		#######start######
		$age=$_POST['age'];
		$sex=$_POST['sex'];

		$prs = trim($_POST['prs']);
	    if ($prs != "" ) {
	    	$prs = $_POST['prs']; 
	    }else{
	    	$prs="no";
	    }

	    $mrs = trim($_POST['mrs']);
	    if ($mrs != "" ) {
	    	$mrs= $_POST['mrs']; 
	    }else{
	    	$mrs="no";
	    }

    #判斷家族史
		$family = 0;
		if (isset($_POST['family'])) {
			$family = count($_POST['family']);
		} else{
			$family = 0;
		}
		if($family!=0){
			$fam_member="with";
		}else{
			$fam_member="without";
		}


		//$file_outputs = glob('./output/*'); // glob() function searches for all the path names matching pattern
		//foreach($file_outputs as $file_output){ 
		//  if(is_file($file_output))
		//    unlink($file_output);         // delete
		//}
		//$file_uploads = glob('./upload_PRS/*'); // glob() function searches for all the path names matching pattern
		//foreach($file_uploads as $file_upload){ 
		//  if(is_file($file_upload))
		//    unlink($file_upload);         // delete
		//}
		//$file_uploads = glob('./upload_MRS/*'); 
		//foreach($file_uploads as $file_upload){ 
		//  if(is_file($file_upload))
		//    unlink($file_upload);         // delete
		//}



		#判斷PRS upload, if有將檔案移至指定資料夾並命令R執行計算PRS值回傳給$prs
		$file_name_PRS="noupload";
		if (!empty($_FILES['PRS_file']['name'][0])) {
		    $num_files = count($_FILES['PRS_file']['name']);
		    $fileCount = count($_FILES['PRS_file']["name"]);
		    #echo "數量";
		    #echo $fileCount;
		    for ($i = 0; $i < $fileCount; $i++) {
            		$temp_filename=$_FILES['PRS_file']["name"][$i];
            		if($i==0){
            			$file_name_PRS =$temp_filename;   
            		}
            		else{
            			$file_name_PRS =$file_name_PRS."/".$temp_filename;   
            		}
            		$to_path="upload_PRS/";
								$to_path .=$_FILES['PRS_file']['name'][$i];
            		move_uploaded_file($_FILES["PRS_file"]["tmp_name"][$i], iconv("UTF-8","big5",$to_path));
                //move_uploaded_file($myFile['tmp_name'][$i],'upload_PRS/'.$myFile["name"][$i] );
        }
        $com_Rprs = '"C:\Program Files\R\R-4.1.1\bin\Rscript"' . ' .\PRS_calculate.R' ." $file_name_PRS $user_id";
				//shell_exec($str1);
				//$output = shell_exec($str1);
				//echo $output;
				exec($com_Rprs, $PRS_file_value, $return_var);

				$temp = implode("",$PRS_file_value);
		
				preg_match('/\d+\.\d+/', $temp, $matches);
				$prs = $matches[0];

				

				

		} 
		else {			
		  $file_name_PRS="noupload";
		}

		echo $prs;

		#survival analysis
			$str = '"C:\Program Files\R\R-4.1.1\bin\Rscript"' . ' .\survival4.R' ." $age $sex $family $prs $user_id 2>&1";
		;
		exec($str, $survival_value, $return_var);
		echo($str);

		echo implode($survival_value) ;


		#判斷MRS upload, if有將檔案移至指定資料夾並命令python執行計算MRS值回傳給$mrs
		$file_name_MRS="noupload";
		if($_FILES['MRS_file']['error']>0){   //沒傳檔案
			//echo "Error";
			$file_name_MRS="noupload";
		}else{
			$to_path="upload_MRS/";
			$to_path .=$_FILES['MRS_file']['name'];
			if(move_uploaded_file($_FILES["MRS_file"]["tmp_name"], iconv("UTF-8","big5",$to_path))){
				$file_name_MRS=$_FILES['MRS_file']["name"];
				$current_dir = dirname(__FILE__);
				$command = "python ./model/MRS_Calculate_forweb.py $current_dir $file_name_MRS 2>&1";
				exec($command, $MRS_value, $return_var);
				#exec("python MRS_Calculate_forweb_try.py $file_name_MRS", $MRS_value, $return_var);
				#exec("python MRS_Calculate_forweb_try.py $file_name_MRS", $MRS_value, $return_var);
				$mrs = implode($MRS_value);
			}else{
				echo "";
			}
		}

   	
		$str1 = '"C:\Program Files\R\R-4.1.1\bin\Rscript"' . ' .\logistic4.R' ." $age $sex $family $mrs $prs $user_id";
		;
		#echo($str1);
		exec($str1, $logistic_value, $return_var);
		#echo implode($logistic_value) ;



		$age_post=$_POST['age'];
    $sex_post=$_POST['sex'];
    $family_post=$family;
        
    $prs_value_post=$_POST['prs'];
    $prs_file_post=$file_name_PRS;
    $mrs_value_post=$_POST['mrs'];
    $mrs_file_post=$file_name_MRS;
	}


		
		?>


		<script>
			


    document.getElementById("data").style.display = "inline-block";
    document.getElementById("data1").style.display = "inline-block";
		document.getElementById("image1").style.display = "inline-block";
		document.getElementById("image2").style.display = "inline-block";
		document.getElementById("image1_1").style.display = "inline-block";
		document.getElementById("image2_1").style.display = "inline-block";

		var arr1 = <?php echo json_encode($survival_value)?> // [1,2,3,4,5]
		
		var sr6 = arr1[arr1.length-1].match(/"([^"]+)"/);
		var sr5 = arr1[arr1.length-2].match(/"([^"]+)"/);
		var sr4= arr1[arr1.length-3].match(/"([^"]+)"/);
		var sr3 = arr1[arr1.length-4].match(/"([^"]+)"/);
		var sr2= arr1[arr1.length-5].match(/"([^"]+)"/);
		var sr1 = arr1[arr1.length-6].match(/"([^"]+)"/);
		
		if (sr1) {
    		document.getElementById("s3y_1").innerHTML=sr1[1];
    		document.getElementById("P_result").innerHTML=sr1[1];
		}
		if (sr2) {
    		document.getElementById("s5y_1").innerHTML=sr2[1];
		}
		if (sr3) {
    		document.getElementById("s7y_1").innerHTML=sr3[1];
		}
		if (sr4) {
    		document.getElementById("s3y_2").innerHTML=sr4[1];
		}
		if (sr5) {
    		document.getElementById("s5y_2").innerHTML=sr5[1];
		}
		if (sr6) {
    		document.getElementById("s7y_2").innerHTML=sr6[1];
		}

	
  	var arr4 = <?php echo json_encode($logistic_value)?> // [1,2,3,4,5]
		var r4 = arr4[arr4.length-1].match(/"([^"]+)"/);
		var r3 = arr4[arr4.length-2].match(/"([^"]+)"/);
		var r2= arr4[arr4.length-3].match(/"([^"]+)"/);
		var r1 = arr4[arr4.length-4].match(/"([^"]+)"/);
		
		if (r1) {
    		document.getElementById("r_1").innerHTML=r1[1];
    		document.getElementById("P_result1").innerHTML=r1[1];
		}
		if (r2) {
    		document.getElementById("r_2").innerHTML=r2[1];
		}
		if (r3) {
    		document.getElementById("r_3").innerHTML=r3[1];
		}
		if (r4) {
    		document.getElementById("r_4").innerHTML=r4[1];
		}

		var figname="<?php echo $user_id; ?>"

		

  	document.getElementById("image1").innerHTML="<img src='output/logistic_line/"+figname+"_OutputLogisticLine.png?$nocache'style='width: 600px; height: 60%; object-fit: fill;' />";
  	document.getElementById("image2").innerHTML="<img src='output/survival_line/"+figname+"_OutputSurvivalLine.png?$nocache'style='width: 600px; height: 60%; object-fit: fill; ' />";
  	document.getElementById("image1_1").innerHTML="<img src='output/logistic_bar/"+figname+"_OutputLogisticBar.png?$nocache' style='width:600px; height: 60%; object-fit: fill; '/>";
  	document.getElementById("image2_1").innerHTML="<img src='output/survival_bar/"+figname+"_OutputSurvivalBar.png?$nocache' style='width:600px; height: 60%; object-fit: fill; '/>";
  	

  	var age_get = "<?php echo $age; ?>";
		document.getElementById("age_get").innerHTML=age_get;
		document.getElementById("age_get1").innerHTML=age_get;


		var sex_get = "<?php echo $sex; ?>";

	  if (sex_get === "Male") {
	    sex_get = "male";
	  }else if(sex_get === "Female"){
	  	sex_get = "female";
	  }


		document.getElementById("sex_get").innerHTML=sex_get;
		document.getElementById("sex_get1").innerHTML=sex_get;
		var family_get = "<?php echo $fam_member; ?>";
		document.getElementById("family_get").innerHTML=family_get;
		document.getElementById("family_get1").innerHTML=family_get;

		window.onload = function() {
  	document.body.style.display = "block";
		};


		/*存入資料庫

	  $.ajax({
	  	type:"POST",
	  	url:"saverecord.php",
	  	data:{
	  		"fig_name":"<?php echo $user_id; ?>",
	  		"age":"<?php echo $age_post; ?>",
	  		"sex":"<?php echo $sex_post; ?>",
	  		"family":"<?php echo $family_post; ?>",
	  		"prs_value":"<?php echo $prs_value_post; ?>",
	  		"prs_file":"<?php echo $prs_file_post; ?>",
	  		"mrs_value":"<?php echo $mrs_value_post; ?>",
	  		"mrs_file":"<?php echo $mrs_file_post; ?>",
	  		"cox_1":sr1[1],
	  		"cox_2":sr2[1],
	  		"cox_3":sr3[1],
	  		"cox_4":sr4[1],
	  		"cox_5":sr5[1],
	  		"cox_6":sr6[1],
	  		"logistic_1":r1[1],
	  		"logistic_2":r2[1],
	  		"logistic_3":r3[1],
	  		"logistic_4":r4[1]
	  	},
	  	success:function(data){
	  		//if(data!="1")
	  		//	alert(data);
	  		alert("第"+data+"筆資料");

	  	},
	  	error:function(){
	  		alert("發生錯誤 狀態:"+jqXHR.readyState + "  "+jqXHR.status);
	  	}
	  })

	  */


 
</script>
</body>
</html>