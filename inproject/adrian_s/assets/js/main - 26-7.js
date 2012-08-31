school = new Array();

function orderType(){
    ordertype = document.getElementById("ordertype").value;
}

function jajal(){
    alert(ordertype);
}

checkk = new Array();
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
}



//orderType();
//jajal();
