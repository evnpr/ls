		<div name="form_header" id="form_header">
			<div id="type" style="display:block">
				<table border="0">
					<tr>
						<td>Order Type	&nbsp </td>
						<td>: <select id="ordertype" onchange="orderType(this)" class="span2" >
							   <option value="Buy 1">Buy 1</option>
							   <option value="Buy 3">Buy 3</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Quantity &nbsp </td>
						<td>:
							<input type="text" id="quantity" onblur="change_quantity(this);" value="1"/>
						</td>
						<td>
							<div class="alert alert-error cannot_blank" id="wrong_quantity"></div>
						</td>
					</tr>
				</table>
			</div>
		</div>
      <!-- Main hero unit for a primary marketing message or call to action -->
         <h2>Form Order</h2> 
<br>
<div id="data">
<div id="data0" number="0" name="data" style="display:none;">
<div id="form_m" class="row">

	<div id="name" class="span6">
		<!-- <form action="order"  method="post" accept-charset="utf-8">  --> <!-- modified by yudho 27/7 -->
		
		<form  id="form_main" method="post" ilove="you" accept-charset="utf-8">
		<table border="0">
			<tr>
				<td>Name  </td>
				<td>: <input type="text" name="name" value=""></input></td>
				<td><div class="alert alert-error cannot_blank" ></div></td>
			</tr>
			<tr>
				<td>Gender  </td>
				<td>: <input type="radio" name="gender" value="m"  /> Male  <input type="radio" name="gender" value="f"   ></input> Female</td>
				<td><div class="alert alert-error cannot_blank" ></div></td>
			</tr>
			<tr>
				<td>School  </td>
				<td>: <select  class="span2 school2" >							
							<option value=""></option>
							<option value="EEE">EEE</option>
							<option value="NBS">NBS</option>
							<option value="SBS">SBS</option>
							<option value="MAE">MAE</option>
							<option value="MSE">MSE</option>
							<option value="AERO">AERO</option>
				</select>
				</td>
				<td><div class="alert alert-error cannot_blank" ></div></td>
			</tr>
			<tr>
				<td>Email  </td>
				<td>: <input type="text" name="email" value=""></td>
				<td><div class="alert alert-error cannot_blank" ></div></td>
			</tr>
			<tr>
				<td>Verify email  </td>
				<td>: <input type="text"  name="verifyemail" onblur="verify_email(this);" value=""></td>
				<td><div class="alert alert-error wrong_email_ver"></div><div class="alert alert-success correct_email_ver"></div><div class="alert alert-error cannot_blank" ></div></td>
			</tr>
			<tr>
				<td>Grad Year  </td>
				<td>: <select id="gradyear" class="span2" >
							<option value=""></option>
							<option value="2015">2015</option>
							<option value="2014">2014</option>
							<option value="2013">2013</option>
							<option value="2012">2012</option>
							<option value="2011">2011</option>							
							<option value="2010">2010</option>
							<option value="2009">2009</option>
							<option value="2008">2008</option>
							<option value="2007">2007</option>
							<option value="2006">2006</option>
							<option value="2005">2005</option>
							<option value="2004">2004</option>
							<option value="2003">2003</option>
							<option value="2002">2002</option>
							<option value="2001">2001</option>
							<option value="2000">2000</option>
							<option value="1999">1999</option>
							<option value="1998">1998</option>
							<option value="1997">1997</option>
							<option value="1996">1996</option>
							<option value="1995">1995</option>
							<option value="1994">1994</option>
							<option value="1993">1993</option>
							<option value="1992">1992</option>
							<option value="1991">1991</option>	
							<option value="1990">1990</option>	
						</select>
				</td>
				<td><div class="alert alert-error cannot_blank" ></div></td>
			</tr>
		</table>
		<br>
		<!-- <input id ="submit_my_order" type="submit" value="Submit Order" class="btn-primary btn-large" style="position: absolute; margin-top: 280px;"> --> <!-- modified by yudho 27/7 -->
		</form>
	</div>
	<div id="name" class="span5">
		<img src="" height="230" width="200"/>
	</div>
</div>

<div class="row">
<div class="span12">
<ul class="thumbnails">
<div class="span3">
  <li class="span2">
    <a class="thumbnail">
        <img id="blah" src="http://placehold.it/150x180"   width="150px" height="180px" alt="" />
    </a>
    <form action="page2_submit" method="get" accept-charset="utf-8">
     <input type="file" class="prev" name="upload1" value="" onchange="readURL(this);";>
	<div class="alert alert-error prev_error"></div>
   <span onclick="upload_it(this);" class="btn btn-danger upl"><i class="icon-upload icon-white"></i>  Upload</span><div class="alert alert-error upl_error"></div><input type="hidden" value="0"/></input>
    </form>
  </li>
</div>
<div class="span3">
  <li class="span2">
  <li class="span2">
    <a class="thumbnail">
      <img src="http://placehold.it/150x180"  width="150px" height="180px" alt="">
    </a>
    <form action="page2_submit" method="get" accept-charset="utf-8">
     <input type="file" name="upload1" value=""  onchange="readURL(this);";>
    <p><span class="btn btn-danger"><i class="icon-upload icon-white"></i>  Upload</span></p>
    </form>
  </li>
</div>
<div class="span3">
  <li class="span2">
  <li class="span2">
    <a class="thumbnail">
      <img src="http://placehold.it/150x180"  width="150px" height="180px" alt="">
    </a>
    <form action="page2_submit" method="get" accept-charset="utf-8">
     <input type="file" name="upload1" value="" onchange="readURL(this);";>
     <p><span class="btn btn-danger"><i class="icon-upload icon-white"></i>  Upload</span></p>
    </form>
  </li>
</div>
<div class="span3">
  <li class="span2">
  <li class="span2">
    <a class="thumbnail">
      <img src="http://placehold.it/150x180"   width="150px" height="180px" alt="">
    </a>
    <form action="" method="get" accept-charset="utf-8">
     <input type="file" name="upload1" value="" onchange="readURL(this);";>
     <p><span class="btn btn-danger"><i class="icon-upload icon-white"></i>  Upload</span></p>
    </form>
  </li>
</div>
</ul>

</div>
</div>
 </div>
<div id="data1" number="1" name="data">
<div id="form_m" class="row">
  
	<div id="name" class="span6">
		<!-- <form action="order"  method="post" accept-charset="utf-8">  --> <!-- modified by yudho 27/7 -->
		
		<form  id="form_main" method="post" ilove="you" accept-charset="utf-8">
		<table border="0">
			<tr>
				<td>Name  </td>
				<td>: <input type="text" name="name" value=""></input></td>
				<td><div class="alert alert-error cannot_blank" ></div></td>
			</tr>
			<tr>
				<td>Gender  </td>
				<td>: <input type="radio" name="gender" value="m"  /> Male  <input type="radio" name="gender" value="f"   ></input> Female</td>
				<td><div class="alert alert-error cannot_blank" ></div></td>
			</tr>
			<tr>
				<td>School  </td>
				<td>: <select class="span2 school2" >
							<option value=""></option>
							<option value="EEE">EEE</option>
							<option value="NBS">NBS</option>
							<option value="SBS">SBS</option>
							<option value="MAE">MAE</option>
							<option value="MSE">MSE</option>
							<option value="AERO">AERO</option>
					</select>
				</td>
				<td><div class="alert alert-error cannot_blank" ></div></td>
			</tr>
			<tr>
				<td>Email  </td>
				<td>: <input type="text"  name="email" value=""></td>
				<td><div class="alert alert-error cannot_blank"></div></td>
			</tr>
			<tr>
				<td>Verify email  </td>
				<td>: <input type="text" name="verifyemail" onblur="verify_email(this);" value=""></td>
				<td><div class="alert alert-error wrong_email_ver"></div><div class="alert alert-success correct_email_ver"></div><div class="alert alert-error cannot_blank" ></div></td>
			</tr>
			<tr>
				<td>Grad Year  </td>
				<td>: <select id="gradyear" class="span2" >
							<option value=""></option>
							<option value="2015">2015</option>
							<option value="2014">2014</option>
							<option value="2013">2013</option>
							<option value="2012">2012</option>
							<option value="2011">2011</option>							
							<option value="2010">2010</option>
							<option value="2009">2009</option>
							<option value="2008">2008</option>
							<option value="2007">2007</option>
							<option value="2006">2006</option>
							<option value="2005">2005</option>
							<option value="2004">2004</option>
							<option value="2003">2003</option>
							<option value="2002">2002</option>
							<option value="2001">2001</option>
							<option value="2000">2000</option>
							<option value="1999">1999</option>
							<option value="1998">1998</option>
							<option value="1997">1997</option>
							<option value="1996">1996</option>
							<option value="1995">1995</option>
							<option value="1994">1994</option>
							<option value="1993">1993</option>
							<option value="1992">1992</option>
							<option value="1991">1991</option>	
							<option value="1990">1990</option>	
						</select>
				</td>
				<td><div class="alert alert-error cannot_blank" ></div></td>
			</tr>
		</table>
		<br>
		<!-- <input id ="submit_my_order" type="submit" value="Submit Order" class="btn-primary btn-large" style="position: absolute; margin-top: 280px;"> --> <!-- modified by yudho 27/7 -->
		</form>
	</div>
	<div id="name" class="span5">
		<img src="" height="230" width="200"/>
	</div>
</div>

<div class="row">
<div class="span12">
<ul class="thumbnails">
<div class="span3">
  <li class="span2">
    <a class="thumbnail">
        <img id="blah" src="http://placehold.it/150x180"   width="150px" height="180px" alt="" />
    </a>
    <form action="page2_submit" method="get" accept-charset="utf-8">
     <input type="file" class="prev" name="upload1" value="" onchange="readURL(this);";>
	 <div class="alert alert-error prev_error"></div>
    <span onclick="upload_it(this);"  class="btn btn-danger upl"><i class="icon-upload icon-white"></i>  Upload</span><div class="alert alert-error upl_error"></div><input type="hidden" value="0"></input>
    </form>
  </li>
</div>
<div class="span3">
  <li class="span2">
  <li class="span2">
    <a class="thumbnail">
      <img src="http://placehold.it/150x180"  width="150px" height="180px" alt="">
    </a>
    <form action="page2_submit" method="get" accept-charset="utf-8">
     <input type="file" name="upload1" value=""  onchange="readURL(this);";>
     <p><span class="btn btn-danger"><i class="icon-upload icon-white"></i>  Upload</span></p>
    </form>
  </li>
</div>
<div class="span3">
  <li class="span2">
  <li class="span2">
    <a class="thumbnail">
      <img src="http://placehold.it/150x180"  width="150px" height="180px" alt="">
    </a>
    <form action="page2_submit" method="get" accept-charset="utf-8">
     <input type="file" name="upload1" value="" onchange="readURL(this);";>
     <p><span class="btn btn-danger"><i class="icon-upload icon-white"></i>  Upload</span></p>
    </form>
  </li>
</div>
<div class="span3">
  <li class="span2">
  <li class="span2">
    <a class="thumbnail">
      <img src="http://placehold.it/150x180"   width="150px" height="180px" alt="">
    </a>
    <form action="" method="get" accept-charset="utf-8">
     <input type="file" name="upload1" value="" onchange="readURL(this);";>
     <p><span class="btn btn-danger"><i class="icon-upload icon-white"></i>  Upload</span></p>
    </form>
  </li>
</div>
</ul>
</div>
</div>


 </div>
 </div>

 <input type="hidden" id="ordertype" value="Buy 1"></input>
<div style="clear:both"></div>