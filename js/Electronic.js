function AjaxFunction(str){
    var t="demo"+str;
    if((str == null)||(str == "")){
    document.getElementById("demo").innerHTML="";
       return;
   }
    
var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById(t).innerHTML = this.responseText;
       }
//       if(CategoryId==CategoryId){
//          show_result('SubcategoryName');
           
       
       };
        
        xmlhttp.open("GET","AjaxSubCategory.php?q="+str,true);
        xmlhttp.send(null);
        }
        //}
 