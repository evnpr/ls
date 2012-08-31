//variables declaration
orders_sc_name=new Array();
orders_quantity=new Array();
totalquantity=0;
timeoutisset=0;
ordertype="Buy 1";

//functions definition
function orderType(){
    ordertype = document.getElementById("ordertype").value;
}
//deactivated by yudho on 26/7
/*checkk = new Array();
function selectSchool(thisId){
    if(checkk[thisId] == null)
    {
        checkk[thisId]=0;
    }
   checkk[thisId] == 0 ? checkk[thisId] = 1 : checkk[thisId] = 0;
   if(checkk[thisId]==0)
   {
    document.getElementById(thisId).style.border = "";    
   }
   else
   {
    document.getElementById(thisId).style.border = "solid 1px blue";
   }
}*/


function plus_clicked(id){
	//display the new quantity
	var val=parseInt(document.getElementById(id).getElementsByTagName("span")[0].innerHTML);
	val++;
	totalquantity++;
	document.getElementById(id).getElementsByTagName("span")[0].innerHTML=val.toString();		
}
function minus_clicked(id){
	//display the new quantity
	var val=parseInt(document.getElementById(id).getElementsByTagName("span")[0].innerHTML);
	if(val>0){
		val--;
		totalquantity--;
		document.getElementById(id).getElementsByTagName("span")[0].innerHTML=val.toString();	
	}
}
function order_proceed(){
	//clearing the stack
	orders_sc_name.length=0;
	orders_quantity.length=0;
	//taking values
	var school_options=$(".thumbnail");	
	for(var i=0;i<school_options.length;i++){		
		var quantity=parseInt(school_options[i].childNodes[1].childNodes[3].innerHTML);
		if(quantity>0){
			orders_sc_name.push(school_options[i].id); //pay attention that school name is the id itself
			orders_quantity.push(quantity);
		}
	}
	if(orders_sc_name.length!=orders_quantity.length){
			alert("Something is wrong. We apologize. Please use other way to order.");
			return 0;
	}
	if(!order_validation()){
		return 0;
	}
	//to be replaced later with ajax
	/*for(var j=0;j<orders_sc_name.length;j++){
		alert(orders_sc_name[j]+"|"+orders_quantity[j]);
	}*/
	var main_str="";
	main_str=main_str+"ordertype="+ordertype;
	for(var y=0;y<orders_sc_name.length;y++){
		main_str=main_str+"&"+orders_sc_name[y]+"="+orders_quantity[y];
	}
	window.location="http://localhost/letspan/letspan/adrian_s/e/order?"+main_str;	
	//till here
}
function order_validation(){	
	if(ordertype=="Buy 3"){
		if(totalquantity==0){
			var message="You have not specified the quantity of the order yet. Please provide the order quantity by pressing the plus or minus button on top of the school icon.";
			alert_it(message);		
			return false;
		}		
		if((totalquantity%3)!=0){
			switch (Math.floor(totalquantity/3)){
				case 0:
					var message="You chose 'Buy 3' option. Please add your order so that the total quantity is 3. Change the quantity with plus or minus button on top of the school icon";
					alert_it(message);
					return false;
					break;
				case 1:
					var message="You chose 'Buy 3' option. Please change your order quantity so that the total quantity is 3 or 6. Change the quantity with plus or minus button on top of the school icon";
					alert_it(message);
					return false;
					break;
				case 2:
					var message="You chose 'Buy 3' option. Please change your order quantity so that the total quantity is 6 or 9.  Change the quantity with plus or minus button on top of the school icon";
					alert_it(message);
					return false;
					break;
				case 3:
					var message="You chose 'Buy 3' option. Please change your order quantity so that the total quantity is 9 or 12. Change the quantity with plus or minus button on top of the school icon";
					alert_it(message);
					return false;
					break;
				case 4:
					var message="You chose 'Buy 3' option. Please change your order quantity so that the total quantity is 12 or 15. Change the quantity with plus or minus button on top of the school icon";
					alert_it(message);
					return false;
					break;
				case 5:
					var message="You chose 'Buy 3' option. Please change your order quantity so that the total quantity is 15 or 18. Change the quantity with plus or minus button on top of the school icon";
					alert_it(message);
					return false;
					break;
				default:
					var message="You chose 'Buy 3' option. Please change your order quantity so that the total quantity has factor of 3. Change the quantity with plus or minus button on top of the school icon";
					alert_it(message);			
					return false;
					break;
			}			
		}
	}
	if(ordertype=="Buy 1"){
		if(totalquantity==0){
			var message="You have not specified the quantity of the order yet. Please provide the order quantity by pressing the plus or minus button on top of the school icon.";
			alert_it(message);		
			return false;
		}		
	}
	return true;
}
function alert_it(message){
	if(timeoutisset==1){
		clearTimeout(ultraman);
	}
	document.getElementById("alert_order").innerHTML=message;
	document.getElementById("alert_order").setAttribute("style","display:block");
	timeoutisset=1;
	ultraman=setTimeout("$(document.getElementById('alert_order')).fadeOut('slow');clearTimeout(ultraman);",4000);	
}










