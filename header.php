<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>T2D</title>
	<meta charset="utf-8">
	<style>

		#b {
  			padding-top: 50px;
  			text-align: center;
		}
		.btn {
			border-radius: 5px ;
			padding: 15px 25px;
			font-size: 22px;
			text-decoration: none;
			color: #023738;
			position: relative;
			display: inline-block;
			background-color:  #bdcca9;
			box-shadow: 0px 5px 0px 0px rgb(164, 185, 136);
			border:3px rgb(164, 185, 136);
		}
		.btn:active {
		  transform: translate(0px, 5px);
		  -webkit-transform: translate(0px, 5px);
		  box-shadow: 0px 1px 0px 0px;
		}
		.btn:hover {
		  background-color: rgb(164, 185, 136);
		}

		#plink_id {
			position: relative;
			text-decoration:none;
		}

		a:link {color:#0072E3;} 
		a:visited {color:#0072E3;}
		a:hover {color:#003060;}
		a:active {color:#003060;} 


		#img_id {
			position: relative;
			text-decoration:none;
		}
		#img_id img{
			display: none;
			position:absolute;
			left: 50%;
			margin-left: -60px;
			margin-top: -2px;
		}
		#img_id:hover img{
			display: block;
		}
	</style>
</head>
<body style="	margin: 0;
    				font-family: Noto Sans TC,Noto Sans JP,sans-serif;
    				font-size: 1rem;
    				font-weight: 400;
    				line-height: 1.9;
    				color: #212529;
    				text-align: left;
    				background-color: rgba(204, 202, 169, 0.8);
    
				    /**background-color: rgba(255, 255, 255, 0.8);
				     background-image: url('pexels-nataliya-vaitkevich-6941883.jpg');
				    background-size: cover;**/
				">

   <script type="text/javascript">

    	function fam_output(){
			if(document.getElementById("family_yes").checked){
				document.getElementById("family_selected").style.visibility="visible";
         		document.getElementById("family_selected_txt").style.visibility="visible";
			}
			if(document.getElementById("family_no").checked){
				document.getElementById("family_selected").style.visibility="hidden";
        		document.getElementById("family_selected_txt").style.visibility="hidden";
			}
		}

		function valid() {
			var checkbox = document.getElementsByName('family[]');
			var ln = 0;
			for(var i=0; i< checkbox.length; i++) {
				if(checkbox[i].checked)
				    ln++;
			}
				
			if(document.getElementById("family_yes").checked){
				if(ln==0){
					alert ('Select family member who ever had T2D or change the input of "Type 2 Diabetes family history"! to "No"')
					return false;
				}
			}	
		}			

   </script>

   <div style="background-color: hsla(0,0%,100%,.8);padding: 0.5rem 2rem; font-size:30px;">Type 2 Diabetes risk calculator
   </div>

<h1></h1>
   
 	<div style="width: 650px;border-radius: 30px;margin: 50px auto;padding: 50px 80px;float:left;">
   
	   <details open>
	    		<summary style="font-size:35px; color: #003060;">Welcome to T2D risk calculator</summary>  
	    		<p style="font-size:20px;">With this web you can enter information about yourself to calculate your T2D-risk. </p>
		</details>
		<br>
		<details open>
	    		<summary style="font-size:35px;color: #003060">How to use</summary>

	    		<p style="font-size:20px;">Enter your age, sex, and T2D family history to get a basic estimate of T2D-risk.
				<br> If you have genetic or imaging information, we will give you an additional risk estimate based on this information. 
	    		</p>
		</details>
		<br>
		<details open>
			    <summary style="font-size:35px;color: #003060">You should know before use</summary>
			    <p style="font-size:20px;">Please note that the risk calculator provides you with estimates of study results only. These estimates are provided for reference purposes only and do not guarantee the actual results！</p>
		</details>
		<br>
		<details open>
			    <summary style="font-size:35px;color: #003060">About us</summary>
			    <p style="font-size:20px;">reference</p>
		</details>

    </div>

   <div style="min-height: 550px;width: 910px;background-color: hsla(0,0%,100%,.9);border-radius: 30px;margin: 50px auto;padding: 50px 80px;float:left;">


	<form class="form-horizontal" enctype="multipart/form-data"  action="result5.php" method="POST" onSubmit="return valid();" id="web_form" >
		<table >
			<!--<caption id="title" style="padding-bottom: 10px;">
    			T2D risk calculator
  			</caption>-->
				<tr>
					<th style="width:350px;height: 100px; font-size: 20px;">*Age (years):</th>	
					<td >

							<input id="age" name="age" type="number" placeholder="32 ~ 79" 
						class="form-control input-md" required=""
							min="1" step="1" style="width:10rem;height:2rem; font-size: 20px;
							border: 1px solid #d7d7d7;box-shadow: inset 0 1px 3px rgb(0 0 0 / 10%);">

					</td>
				</tr>

				<tr>
					<th style="width:350px;height: 100px; font-size: 20px;">*Sex:</th>
					<td  colspan="2">
						<label style="font-size: 20px;"><input type="radio" name="sex" required="required"  value="Male" checked style="zoom:2;">Male</label>
						<label style="font-size: 20px;"><input type="radio" name="sex" value="Female" style="zoom:2;">Female</label>
					</td>
				</tr>
	
				<tr>
					<th style="width:350px;height: 100px; font-size: 20px;">*Type 2 Diabetes family history:</th>
					<td>
						<label style="font-size: 20px;"><input id="family_no" onchange="fam_output()" type="radio" name="fyn"  value="No" checked style="zoom:2;">NO</label>
						<label style="font-size: 20px;"><input id="family_yes" onchange="fam_output()" type="radio" name="fyn" value="Yes" style="zoom:2;">Yes</label>

						
					</td>
					
				</tr>
				<tr></tr>

				<tr>
					<th id="family_selected_txt" style="color: #708090;visibility: hidden;">Select your family member who ever had Type 2 Diabetes </th>
					<td colspan="2">
					<div id="family_selected" style="visibility: hidden;">
				
						<label style="font-size: 20px;"><input class="fam" type="checkbox" name="family[]" value="father" style="zoom:2;">Father</label>
						<label style="font-size: 20px;"><input class="fam" type="checkbox" name="family[]" value="mother" style="zoom:2;">Mother</label>
						<label style="font-size: 20px;"><input class="fam" type="checkbox" name="family[]" value="sister" style="zoom:2;">Sister</label>
						<label style="font-size: 20px;"><input class="fam" type="checkbox" name="family[]" value="brother" style="zoom:2;">Brother</label>
						
					</div>
					</td>
				</tr>
			
				<tr>
					<th style="width:350px;height: 100px; font-size: 20px; " >PRS:<br><p style="color: #708090;font-size: 15px;">Input your PRS or upload file <br><br>File format: <br>(1)
						<a id="plink_id" href="https://www.cog-genomics.org/plink/1.9/formats" class="text-muted" target="_blank">
							<span> PLINK (bed, bim, fam)</span>
						</a>
						<br>(download example in 
						<a id="IR_id" href="./model/ExampleData/testdata_PRS.zip" download  class="text-muted">
							<span>here)</span><br />
	    				</a>
						
	    			</p>
						

						<br><p style="font-size:10px;"></p></th>

					<td >
						<input id="prs" name="prs" type="text" placeholder="-3.548 ~ 3.535" 
							placeholder="" class="form-control input-md" style="width:10rem;height:2rem;font-size: 20px;">
							<br>or<br>
							<input type="file"  name="PRS_file[]" accept=".txt, .bed, .bim, .fam" multiple>
					</td>

					<td id="image"><img src="PRS_quantile.jpg" width="300" height="350"></td>
				</tr>



				<tr>
					<th style="width:350px;height: 100px; font-size: 20px; " >MRS:<br><p style="color: #708090;font-size: 15px;">Input your MRS or upload file <br><br>File format: <br>
						(1) CSV (download example in 
						<a id="IR_id" href="./model/ExampleData/testdata_MRS.csv" download  class="text-muted">
							<span>here)</span><br />
	    				</a>
	    			</p>
						

						<br><p style="font-size:10px;"></p></th>

					<td >
						<input id="mrs" name="mrs" type="text" placeholder="-0.427 ~ 3.796" 
							placeholder="" class="form-control input-md" style="width:10rem;height:2rem;font-size: 20px;">
							<br>or<br>
							<input type="file"  name="MRS_file" accept=".csv" id="mrs_input" >
					</td>

					<td id="image"><img src="MRS_quantile.jpg" width="300" height="350"></td>
				</tr>
			
		</table>

		<!--<h3 style="color: #930000;">* Please note that the risk calculator provides you with estimates of study results only. These estimates are provided for reference purposes only and do not guarantee the actual results！</h3>-->
		<h2 style="color: #930000;"> *For research, not for clinical or medical used！</h2>


		<div class="form-group" >
  			<label class="col-md-4 control-label" for="submit"></label>
  		

	  		<div  align="center" id="b" style="padding-top: 50px;text-align: center;">
	  			<button class="btn"  type="submit" value="Submit" >Run</button>
	  		</div>
	  	</div>

	</div>
	</form>

	
</body>
</html>