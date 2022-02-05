<?php
SESSION_START();
if(!isset($_SESSION['username'])){
	echo"you are logged out";
	header('location:login.php');
}
?>
<!DOCTYPE html PUBLIC "	-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Address Entry Nepal</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <script src="https://kit.fontawesome.com/26d4a64054.js " crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>


<body id="main_body">
	

	<img id="top" src="top.png" alt="">

	<div id="form_container">
	
		<h1><a>Address Entry Nepal</a></h1>
		<form id="form_107299" class="appnitro"  method="post" action="result.php">
					<div class="form_description">
			<p>Please enter the address correctly!</p>
			<h2>Welcome <?php echo $_SESSION['username'];?></h2>
		</div>		
			<ul >
			
					<li id="li_1" >
					  <div class="left">
            <label for="element_1_1"><i class="fas fa-road"></i>  Street Address</label>
			<input id="element_1_1" name="street" class="element text large" value="" type="text">
			
		</div>
	
		<div class="right">
        	<label for="element_1_1"><i class="fas fa-home"></i>  Home Address</label>
			<input id="element_1_2" name="home" class="element text large" value="" type="text">
			
		</div>
		<div class="left">
        	<label for="element_1_2"><i class="fas fa-location-arrow"></i>  Municipality</label>
			<input id="element_1_2" name="municipality" class="element text large" value="" type="text">
			</div>
			<div class="right">
        	<label for="element_1_2"><i class="far fa-compass"></i>  Ward</label>
			<select  id="element_1_2" name="ward" class="element select medium chosen" value="" >
    <option value="" selected="selected"> Select Ward</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>

           </select>
	
		</div>
		
		<div class="left">
        	<label for="element_1_3"><i class="fas fa-map-pin"></i>   District</label>
                        <select id="element_1_3" name="district" class="element select medium chosen" value="" type="text">
                            <option value="" selected="selected" type="text">Select District</option>
                            <option value="Achham">Achham</option>
                            <option value="Argakhanchi">Argakhanchi</option>
                           <option value="Baglung">Baglung</option>
                            <option value="Banke">Banke</option>
                            <option value="Bardiya">Bardiya</option>
                            <option value="Bhaktapur">Bhaktapur</option>
                            <option value="Bajhang">Bajhang</option>
                            <option value="Bajura">Bajura</option>
                            <option value="Bara">Bara</option>
                            <option value="Biratnagar">Biratnagar</option>
                            <option value="	Birendranagar">	Birendranagar</option>
                            <option value="Butwal">Butwal</option>
                            <option value="Baitadi">Baitadi</option>
                            <option value="Chitwan">Chitwan</option>
                            <option value="Dhanusa">Dhanusa</option>
							<option value="Dhading">Dhading</option>
                            <option value="Dolakha">Dolakha</option>
							<option value="Dang Deukhuri">Dang Deukhuri</option>
                           <option value="Doti">Doti</option>
                            <option value="Dolpa">dolpa</option>
                            <option value="Dailekh">Dailekh</option>
                            <option value="Dadeldhura">Dadeldhura</option>
                            <option value="Darchula">Darchula</option>
                           <option value="Eastern Rukum">Eastern Rukum</option>
                            <option value="	Godawari">Godawari</option>
                            <option value="Gorkha">Gorkha</option>
                            <option value="Gulmi">Gulmi</option>
                            <option value="Hetauda">Hetauda</option>
                           <option value="Humla">Humla</option>
                            <option value="Janakpur">Janakpur</option>
                           <option value="Jajarkot">Jajarkot</option>
                           <option value="Jumla">Jumla</option>
                            <option value="Kavrepalanchowk">Kavrepalanchowk</option>
                            <option value="Kathmandu">Kathmandu</option>
                            <option value="Kailali">Kailali</option>
                           <option value="Kaski">Kaski</option>
                           <option value="Kalikot">Kalikot</option>
                           <option value="Kapilvastu">Kapilvastu</option>
                           <option value="Kanchanpur">Kanchanpur</option>
                           <option value="Lamjung">Lamjung</option>
                            <option value="Lalitpur">Lalitpur</option>
                           <option value="Makwanpur">Makwanpur</option>
                            <option value="Manang">Manang</option>
                           <option value="Mustang">Mustang</option>
                           <option value="Myagdi">Myagdi</option>
                           <option value="Mugu">Mugu</option>
                            <option value="Mahottari">Mahottari</option>
                           <option value="Nawalpur">Nawalpur</option>
                            <option value="Nuwakot">Nuwakot</option>
                           <option value="Parbat">Parbat</option>
                           <option value="Palpla">Palpa</option>
                           <option value="Pyuthan">Pyuthan</option>
                           <option value="Parasi">Parasi</option>
 							<option value="Parsha">Parsha</option>
                            <option value="Pokhara">Pokhara</option>
                            <option value="Rasuwa">Rasuwa</option>
                            <option value="Rautahat">Rautahat</option>
                            <option value="Ramechhap">Ramechhap</option>
                           <option value="Rolpa">Ropla</option>
                            <option value="Sindhuli">Sindhuli</option>
                           <option value="Rasuwa">Rasuwa</option>
                           <option value="Rupandehi">Rupandehi</option>
                           <option value="Sindhupalchowk">Sindhupalchowk</option>
                            <option value="Sarlahi">Sarlahi</option>
                            <option value="Siraha">Siraha</option>
                            <option value="Saptari">Saptari</option>
                           <option value="Salyan">Salyyan</option>
                           <option value="Surkhet">Surkhet</option>
                           <option value="Syangja">Syangja</option>
                           <option value="Tanahun">Tanahun</option>
                           <option value="Western Rukum">Western Rukum</option>
                          
                          
                           
                           
                           

                        </select>
		</div>
	
		<div class="right">
        <label for="element_1_3"><i class="fas fa-map-marker-alt"></i>  State/Province</label>
		<select class="element select medium chosen" id="element_1_3" name="province"> 
<option value="" selected="selected">Select Province</option>
<option value="Province 1" >Province 1</option>
<option value="Province 2" >Province 2</option>
<option value="Province 3" >Bagmati</option>
<option value="Province 4" >Gandaki</option>
<option value="Province 5" >Province 5</option>
<option value="Province 6" >Karnali</option>
<option value="Province 7" >Sudurpashchim</option>
	
			</select>
		
	</div>
	
		<div class="left">
        	<label for="element_1_4"><i class="fas fa-search-location"></i>  Postal / Zip Code</label>
			<input id="element_1_4" name="zip" class="element text medium" maxlength="15" value="" type="text">
			
		</div>
	
		<div class="right">
        <label for="element_1_4"><i class="fas fa-globe-asia"></i>  Country</label>
		<input id="element_1_4" name="country" class="element text medium" maxlength="15" value="Nepal" type="text" readonly>
		
	
<div class="right">
					<li class="buttons">
			    <input type="hidden" name="form_id" value="107299" />
			    
				<input id="saveForm" class="button_text btn-primary" type="submit" name="submit" value="Submit" />
		</li>
		 <li>
            <p class="logouthere">
                         <a href="logout.php" class="logouthere-link">Logout here</a>
                    </p>
        </li>
			</ul>
         </div>    
			
	</div>
    </div>
    </form>
	<img id="bottom" src="bottom.png" alt="">
	</body>
	<script type="text/javascript">
		$(".chosen").chosen();
	</script>
</html>