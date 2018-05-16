//---------------------------- Reset Button ---------------------------------

"use strict",
function PageReset(){
	window.location.reload();
}
//---------------------------- contact section ------------------------------

function ckhformcontact(){
	if(document.getElementById("name").value==''){
		alert("Please Enter Your Name"); 
		document.getElementById("name").value='';
		document.getElementById("name").focus();
		return false;
	}
	if(document.getElementById("email").value==''){
		alert("Please Enter Your Email"); 
		document.getElementById("email").value='';
		document.getElementById("email").focus();
		return false;
	}
	if(!validateEmail("Email Address",document.getElementById("email").value))	
	{
		document.getElementById("email").click();
		document.getElementById("email").focus();
		return false;
	}
	if(document.getElementById("subject").value==''){
		alert("Please Enter Your Subject"); 
		document.getElementById("subject").value='';
		document.getElementById("subject").focus();
		return false;
	}
	if(document.getElementById("message").value==''){
		alert("Please Enter Your Message"); 
		document.getElementById("message").value='';
		document.getElementById("message").focus();
		return false;
	}
    return true;
}

function ajaxmailcontact(){
	
	if(ckhformcontact() == true){
			
	var form_data = $('#contactForm').serialize();
	
		$.ajax({
		url:"php/mailcontroller.php?mode=contact",
		data:form_data,
		cache:false,
		async:false,
		success: function(data) {
			//alert(data);
			if(data==1){
			$('#model2').click();
			$('#contactForm')[0].reset();
			}else if(data==0){
			alert('Please Enter Contact Name')
			document.getElementById("name").focus();
			}else if(data==2){
			alert('Please Enter Email Address')
			document.getElementById("email").focus();
			}else if(data==3){
			alert('Please Enter Valid Email Address')
			document.getElementById("email").focus();
			}else if(data==4){
			alert('Please Enter Subject')
			document.getElementById("subject").focus();
			}else if(data==5){
			alert('Please Enter Message')
			document.getElementById("message").focus();
			}
		}
		});
		
	}
}
//---------------------------- subscriber section ------------------------------

function ckhformsubscribe(){
	if(document.getElementById("subsemail").value==''){
		alert("Please Enter Your Email Address"); 
		document.getElementById("subsemail").value='';
		document.getElementById("subsemail").focus();
		return false;
	}
	if(!validateEmail("Email Address",document.getElementById("subsemail").value))	
	{
		document.getElementById("subsemail").click();
		document.getElementById("subsemail").focus();
		return false;
	}
    return true;
}

function ajaxmailsubscribe(){
	
if(ckhformsubscribe() == true){
	//alert(2);
	var form_data=$('#subsForm').serialize();
	//alert(form_data);
		 $.ajax({
		url:"php/mailcontroller.php?mode=subscriber",
		data:form_data,
		cache:false,
		async:false,
		success: function(data) {
			//alert(data);
			if(data==1){
			$('#model2').click();
			$('#subsForm')[0].reset();
			}else if(data==0){
			alert('Please Enter Subscription Email')
			document.getElementById("subsemail").focus();
			$('#subsForm')[0].reset();	
			}else if(data==2){
			alert('Please Enter Valid Email Address')
			document.getElementById("subsemail").focus();
			$('#subsForm')[0].reset();	
			}
		}
		});
}
}
//---------------------------- subscriber registration ------------------------------

function ckhrequestform(){

	if(document.getElementById("name").value==''){
		alert("Please Enter Your Full Name"); 
		document.getElementById("name").value='';
		document.getElementById("name").focus();
		return false;
	}
	if(document.getElementById("email").value==''){
		alert("Please Enter Your Email"); 
		document.getElementById("email").value='';
		document.getElementById("email").focus();
		return false;
	}
	if(!validateEmail("Email Address",document.getElementById("email").value))	
	{
		document.getElementById("email").click();
		document.getElementById("email").focus();
		return false;
	}
	if(document.getElementById("service_type").value==''){
		alert("Please Enter Your Service Type"); 
		document.getElementById("service_type").value='';
		document.getElementById("service_type").focus();
		return false;
	}
	if(document.getElementById("contact_no").value==''){
		alert("Please Enter Your Contact No."); 
		document.getElementById("contact_no").value='';
		document.getElementById("contact_no").focus();
		return false;
	}
	if(document.getElementById("message").value==''){
		alert("Please Enter Your Message"); 
		document.getElementById("message").value='';
		document.getElementById("message").focus();
		return false;
	}
    return true;
}

function ajaxmailrequest(){
	
if(ckhrequestform() == true){
	
	//alert(email);
	var form_data=$('#requestForm').serialize();
		 $.ajax({
		url:"php/mailcontroller.php?mode=requestForm",
		data:form_data,
		cache:false,
		async:false,
		success: function(data) {
			//alert(data);
			if(data==1){
			$('#model2').click();
			$('#requestForm')[0].reset();
			}else if(data==0){
			alert('Please Enter Your Full Name')
			document.getElementById("name").focus();
			}else if(data==2){
			alert('Please Enter Email Address')
			document.getElementById("email").focus();
			}
			else if(data==3){
			alert('Please Enter Valid Email Address')
			document.getElementById("email").focus();
			}
			else if(data==4){
			alert('Please Enter Service Type')
			document.getElementById("service_type").focus();
			}
			else if(data==5){
			alert('Please Enter Contact Number')
			document.getElementById("contact_no").focus();
			}
			else if(data==6){
			alert('Please Enter Message')
			document.getElementById("message").focus();
			}
		}
		
		});
}
}
//------------------------------ single page contact --------------------------------------

function ckhformfaq(){
	if(document.getElementById("name").value==''){
		alert("Please Enter Your Name"); 
		document.getElementById("name").value='';
		document.getElementById("name").focus();
		return false;
	}
	if(document.getElementById("topic").value==''){
		alert("Please Enter Your Topic"); 
		document.getElementById("topic").value='';
		document.getElementById("topic").focus();
		return false;
	}
	if(document.getElementById("country").value==''){
		alert("Please Enter Your Country"); 
		document.getElementById("country").value='';
		document.getElementById("country").focus();
		return false;
	}
	if(document.getElementById("email").value==''){
		alert("Please Enter Your Email"); 
		document.getElementById("email").value='';
		document.getElementById("email").focus();
		return false;
	}
	if(document.getElementById("question").value==''){
		alert("Please Enter Your Question"); 
		document.getElementById("question").value='';
		document.getElementById("question").focus();
		return false;
	}
    return true;
}

function ajaxmailfaq(){
	
	if(ckhformfaq() == true){
			
	var form_data=$('#faqForm').serialize();
		$.ajax({
		url:"php/mailcontroller.php?mode=faqForm",
		data:form_data,
		cache:false,
		async:false,
		success: function(data) {
			//alert(data);
			if(data==1){
			$('#model2').click();
			$('#faqForm')[0].reset();
			}else if(data==0){
			alert('Please Enter Your Name')
			document.getElementById("name").focus();
			}else if(data==2){
			alert('Please Enter Topic')
			document.getElementById("topic").focus();
			}else if(data==3){
			alert('Please Enter Country')
			document.getElementById("country").focus();
			}else if(data==4){
			alert('Please Enter Email Address')
			document.getElementById("email").focus();
			}else if(data==5){
			alert('Please Enter Valid Email Address')
			document.getElementById("email").focus();
			}else if(data==6){
			alert('Please Enter Question')
			document.getElementById("question").focus();
			}
		}
		});
		
	}
}
//------------------------------ blog detail ---------------------------------------

function ckhformblog(){
	if(document.getElementById("name").value==''){
		alert("Please Enter Your Name"); 
		document.getElementById("name").value='';
		document.getElementById("name").focus();
		return false;
	}
	if(document.getElementById("email").value==''){
		alert("Please Enter Your Email"); 
		document.getElementById("email").value='';
		document.getElementById("email").focus();
		return false;
	}
	if(!validateEmail("Email Address",document.getElementById("email").value))	
	{
		document.getElementById("email").click();
		document.getElementById("email").focus();
		return false;
	}
	if(document.getElementById("message").value==''){
		alert("Please Enter Your Message"); 
		document.getElementById("message").value='';
		document.getElementById("message").focus();
		return false;
	}
    return true;
}

function ajaxmailblog(){
	
	if(ckhformblog() == true){
			
	var form_data = $('#blogForm').serialize();
	
		$.ajax({
		url:"php/mailcontroller.php?mode=blog",
		data:form_data,
		cache:false,
		async:false,
		success: function(data) {
			//alert(data);
			if(data==1){
			$('#model2').click();
			$('#blogForm')[0].reset();
			}else if(data==0){
			alert('Please Enter Your Name')
			document.getElementById("name").focus();
			
			}else if(data==2){
			alert('Please Enter Email')
			document.getElementById("email").focus();
			
			}else if(data==3){
			alert('Please Enter Valid Email Address')
			document.getElementById("email").focus();
			
			}else if(data==4){
			alert('Please Enter Message')
			document.getElementById("message").focus();
			
			}
		}
		});
		
	}
}
//---------------------------- subscriber middle section ------------------------------

function ckhformmiddlesubscribe(){
	if(document.getElementById("subsmiddleemail").value==''){
		alert("Please Enter Your Email Address"); 
		document.getElementById("subsmiddleemail").value='';
		document.getElementById("subsmiddleemail").focus();
		return false;
	}
	if(!validateEmail("Email Address",document.getElementById("subsmiddleemail").value))	
	{
		document.getElementById("subsmiddleemail").click();
		document.getElementById("subsmiddleemail").focus();
		return false;
	}
    return true;
}

function ajaxmailmiddlesubscribe(){
	//alert(2);
if(ckhformmiddlesubscribe() == true){
	
	var form_data=$('#subsMiddleForm').serialize();
	//alert(form_data);
		 $.ajax({
		url:"php/mailcontroller.php?mode=middlesubscriber",
		data:form_data,
		cache:false,
		async:false,
		success: function(data) {
			//alert(data);
			if(data==1){
			$('#model2').click();
			$('#subsMiddleForm')[0].reset();
			}else if(data==0){
			alert('Please Enter Subscription Email')
			document.getElementById("subsmiddleemail").focus();
			$('#subsMiddleForm')[0].reset();	
			}else if(data==2){
			alert('Please Enter Valid Email Address')
			document.getElementById("subsmiddleemail").focus();
			$('#subsMiddleForm')[0].reset();	
			}
		}
		});
}
}
