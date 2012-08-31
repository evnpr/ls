//variables declarations
validity=false;
from_where=1;
ordertype="Buy 1";
from_where=1;
orders=new Array();
//initial functions
function my_obj(name,quantity){
	this.name=name;
	this.quantity=quantity;
}

//logic after page finished loaded
var myurl=window.location.toString();
if(myurl.match("Buy")){
	from_where=2;
}
if(myurl.match("Buy%201")){
	ordertype="Buy 1";
}else{
	if(myurl.match("Buy%203")){
		ordertype="Buy 3";
		document.getElementById("ordertype").value="Buy 3";
	}
}
if(from_where==1){
	document.getElementById("form_header").setAttribute("style","display:block");	
}
if(from_where==2){	
	var init=myurl.match("&").index+1;
	var i=init;
	var j=0;
	var temp_="";
	while(myurl[i]!=null){		
		if(myurl[i]!="="){
			temp_=temp_+myurl[i];
		}else{
			var obj=new my_obj(temp_,0);
			orders[j]=obj;
			temp_="";
			i++;
			while(myurl[i]!=null){
				if(myurl[i]!="&"){
					temp_=temp_+myurl[i];
					if(myurl[i+1]==null){
						orders[j].quantity=parseInt(temp_);
						j++;
						temp_="";
						break;
					}					
				}else{
					orders[j].quantity=parseInt(temp_);
					j++;
					temp_="";
					break;
				}
				i++;
			}
		}
		i++;
	}
	orders[0].quantity--;
	document.getElementById("data1").childNodes[1].childNodes[1].childNodes[5].childNodes[1].childNodes[1].childNodes[4].childNodes[3].childNodes[1].value=orders[0].name;
	for(var g=0;g<orders.length;g++){
		var quantity_exist=$("[name='data']").length-1;
		for(var i=0;i<orders[g].quantity;i++){
			var the_clone=document.getElementById("data0").cloneNode(true);
			the_clone.setAttribute("id","data"+(quantity_exist+i+1));
			the_clone.setAttribute("number",(quantity_exist+i+1));
			the_clone.setAttribute("style","display:block;");					
			document.getElementById("data0").parentNode.appendChild(the_clone);
			the_clone.childNodes[1].childNodes[1].childNodes[5].childNodes[1].childNodes[1].childNodes[4].childNodes[3].childNodes[1].value=orders[g].name;	
		}		
	}
}

	
//functions declaration
function orderType(element){
	ordertype=element.value;
	if(ordertype=="Buy 3"){ // to avoid cheat
		document.getElementById("quantity").value="3";
		change_quantity(document.getElementById("quantity"));
	}
}
function change_quantity(element){
	var quantity=element.value;
	var numerical_filter=new RegExp("[^0-9]");
	if(quantity.match(numerical_filter)){
		var message="Please input numerical value";
		alert_it(message,document.getElementById("wrong_quantity"));
		return;
	}
	if(parseInt(quantity)>1000){
		var message="Quantity must be between 1 and 1000 ";
		alert_it(message,document.getElementById("wrong_quantity"));
		return;
	}
	if(parseInt(quantity)==0){
		var message="Quantity must be between 1 and 1000 ";
		alert_it(message,document.getElementById("wrong_quantity"));
		return;
	}
	if(ordertype=="Buy 1"){
		hide_it(document.getElementById("wrong_quantity"));
		var quantity_=parseInt(quantity);		
		var quantity_exist=$("[name='data']").length-1;
		if(quantity_>quantity_exist){
			for(var i=0;i<(quantity_-quantity_exist);i++){
				var the_clone=document.getElementById("data0").cloneNode(true);
				the_clone.setAttribute("id","data"+(quantity_exist+i+1));
				the_clone.setAttribute("number",(quantity_exist+i+1));
				the_clone.setAttribute("style","display:block;");
				document.getElementById("data0").parentNode.appendChild(the_clone);
			}		
		}
		if((quantity_<quantity_exist)&&(quantity_>0)){
			for(var i=0;i<(quantity_exist-quantity_);i++){
				var target=document.getElementById("data0").parentNode;
				target.removeChild(target.lastChild);
			}		
		}
	}
	if(ordertype=="Buy 3"){
		if(parseInt(quantity)%3!=0){
			var message="Quantity must be multiple factor of 3 ";
			alert_it(message,document.getElementById("wrong_quantity"));
			return;
		}
		hide_it(document.getElementById("wrong_quantity"));
		var quantity_=parseInt(quantity);		
		var quantity_exist=$("[name='data']").length-1;
		if(quantity_>quantity_exist){
			for(var i=0;i<(quantity_-quantity_exist);i++){
				var the_clone=document.getElementById("data0").cloneNode(true);
				the_clone.setAttribute("id","data"+(quantity_exist+i+1));
				the_clone.setAttribute("number",(quantity_exist+i+1));
				the_clone.setAttribute("style","display:block;");
				document.getElementById("data0").parentNode.appendChild(the_clone);
			}		
		}
		if((quantity_<quantity_exist)&&(quantity_>0)){
			for(var i=0;i<(quantity_exist-quantity_);i++){
				var target=document.getElementById("data0").parentNode;
				target.removeChild(target.lastChild);
			}		
		}
	}
	
	
}
function upload_it(el){
	//this part is to make sure the file will be uploaded by user	
	if(el.previousSibling.previousSibling.previousSibling.previousSibling.value!=""){
		el.nextSibling.nextSibling.setAttribute("value","1");
	}
}
function readURL(input){	//this funciton is used to display the preview image, must be run in server
	 if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
			input.parentNode.parentNode.childNodes[1].childNodes[1].setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }		
}
function verify_email(element){	
	var target=element.parentNode.parentNode.parentNode.childNodes[6].childNodes[3].childNodes[1].value;
	var reference=element.parentNode.parentNode.parentNode.childNodes[8].childNodes[3].childNodes[1].value;
	
	if(element.parentNode.parentNode.childNodes[5].childNodes[0].getAttribute("style")=="display:block"){
		if(target==reference){
			message="<i class='icon-ok'></i>  Correct!";
			hide_it(element.parentNode.parentNode.childNodes[5].childNodes[0]);
			hide_it(element.parentNode.parentNode.childNodes[5].childNodes[2]);
			correct_it(message,element.parentNode.parentNode.childNodes[5].childNodes[1]);
			return 0;
		}
	}
	if(target!=reference){		
		if(element.parentNode.parentNode.childNodes[5].childNodes[1].getAttribute("style")=="display:block"){
			hide_it(element.parentNode.parentNode,"correct_email_ver");			
		}		
		hide_it(element.parentNode.parentNode.childNodes[5].childNodes[2]);
		message="<i class='icon-remove'></i>  Invalid email address";
		alert_it(message,element.parentNode.parentNode.childNodes[5].childNodes[0]);
	}
}
function alert_it(message,target){	
	target.innerHTML=message;
	target.setAttribute("style","display:block");	
}
function hide_it(target){
	target.setAttribute("style","display:none");	
}
function correct_it(message,target){
	target.innerHTML=message;
	target.setAttribute("style","display:block");	
}
function form_object(name,male,female,school,email,verify_email,year){
	this.name=name;
	this.male=male;
	this.female=female;
	this.school=school;
	this.email=email;
	this.verify_email=verify_email;
	this.year=year;
}
function check_each(form_obj){
	var prevs=$(".prev");
	for(var j=1;j<prevs.length;j++){
		hide_it(prevs[j].nextSibling.nextSibling);
		hide_it(prevs[j].nextSibling.nextSibling.nextSibling.nextSibling.nextSibling);
	}
	hide_it(form_obj.name.parentNode.parentNode.childNodes[5].childNodes[0]);
	hide_it(form_obj.male.parentNode.parentNode.childNodes[5].childNodes[0]);
	hide_it(form_obj.school.parentNode.parentNode.childNodes[5].childNodes[0]);
	hide_it(form_obj.email.parentNode.parentNode.childNodes[5].childNodes[0]);
	hide_it(form_obj.verify_email.parentNode.parentNode.childNodes[5].childNodes[0]);
	hide_it(form_obj.verify_email.parentNode.parentNode.childNodes[5].childNodes[1]);
	hide_it(form_obj.verify_email.parentNode.parentNode.childNodes[5].childNodes[2]);
	hide_it(form_obj.year.parentNode.parentNode.childNodes[5].childNodes[0]);
	var temp_validity=true;
	if(form_obj.name.value==""){
		var message="You must have a name, right?";
		alert_it(message,form_obj.name.parentNode.parentNode.childNodes[5].childNodes[0]);
		temp_validity=false;
	}
	if((form_obj.male.checked==false)&&(form_obj.female.checked==false)){
		var message="Please indicate your gender";
		alert_it(message,form_obj.male.parentNode.parentNode.childNodes[5].childNodes[0]);
		temp_validity=false;
	}
	if(form_obj.school.value==""){
		var message="What is your school in NTU?";
		alert_it(message,form_obj.school.parentNode.parentNode.childNodes[5].childNodes[0]);
		temp_validity=false;
	}
	if(form_obj.email.value==""){
		var message="Where can we send the order information?";
		alert_it(message,form_obj.email.parentNode.parentNode.childNodes[5].childNodes[0]);
		temp_validity=false;
	}
	if(form_obj.verify_email.value==""){
		var message="Where can we send the order information?";
		alert_it(message,form_obj.verify_email.parentNode.parentNode.childNodes[5].childNodes[0]);
		temp_validity=false;
	}
	if(form_obj.year.value==""){
		var message="When will you graduate?";
		alert_it(message,form_obj.year.parentNode.parentNode.childNodes[5].childNodes[0]);
		temp_validity=false;
	}
	if((form_obj.email.value!="")&&(form_obj.verify_email.value!="")&&(form_obj.email.value!=form_obj.verify_email.value)){
		var message="<i class='icon-remove'></i>  Invalid email address";
		hide_it(form_obj.verify_email.parentNode.parentNode.childNodes[5].childNodes[0]);
		alert_it(message,form_obj.verify_email.parentNode.parentNode.childNodes[5].childNodes[0]);
		temp_validity=false;
	}
	for(var j=1;j<prevs.length;j++){
		if(prevs[j].value==""){
			var message="Please insert photo and upload it."
			alert_it(message,prevs[j].nextSibling.nextSibling);
			temp_validity=false;
		}else{
			if(prevs[j].nextSibling.nextSibling.nextSibling.nextSibling.nextSibling.nextSibling.value=="0"){
				var message="Please upload the photo."
				alert_it(message,prevs[j].nextSibling.nextSibling.nextSibling.nextSibling.nextSibling);
				temp_validity=false;
			}
		}
	}
	if(temp_validity==false){
		return false;
	}else{
		return true;
	}
}
function check_(my_form){
	var name=my_form.childNodes[1].childNodes[1].childNodes[0].childNodes[3].childNodes[1];
	var male=my_form.childNodes[1].childNodes[1].childNodes[2].childNodes[3].childNodes[1];
	var female=my_form.childNodes[1].childNodes[1].childNodes[2].childNodes[3].childNodes[3];
	var school=my_form.childNodes[1].childNodes[1].childNodes[4].childNodes[3].childNodes[1];
	var email=my_form.childNodes[1].childNodes[1].childNodes[6].childNodes[3].childNodes[1];
	var verify_email=my_form.childNodes[1].childNodes[1].childNodes[8].childNodes[3].childNodes[1];
	var year=my_form.childNodes[1].childNodes[1].childNodes[10].childNodes[3].childNodes[1];
	var form_obj=new form_object(name,male,female,school,email,verify_email,year);
	validity=check_each(form_obj); //setting the validity
}
//event handlers
$('#submit_my_order').click(function(event){ //event handler for the submit button
	//validate
	var mother_forms=$("[ilove='you']");
	for(var i=1;i<mother_forms.length;i++){
		var mother_form=mother_forms[i];
		check_(mother_form);
	}
});




