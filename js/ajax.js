$(document).ready(function(){
    $('#s_parent').bind('change',function(){
        var v = $('#s_parent option:selected').val();
        $('#loading').fadeIn("fast");
        $.ajax({
            type: "POST",
            url: url + "download_ajax/getChild/",
            data: {did:v},
            success:function(data)
            {
                $('#s_child').html(data);
                $("#loading").fadeOut("fast");
            }
        })
    })
})

function lienhe(){
    if ( document.contact.fullname.value == "" ) {
	 alert( "Hãy nhập tên của bạn vào!" );
	 document.contact.fullname.focus();
     return false;
    } else if ( document.contact.email.value == "" ) {
	 alert( "Hãy nhập email của bạn vào!" );		
	 document.contact.email.focus();
     return false;
    } else if (( document.contact.email.value.search("@") == -1 ) || ( document.contact.email.value.search("[.*]" ) == -1 )){
	 alert( "Địa chỉ Email không hợp lệ" );	
	 document.contact.email.focus();
     return false;
    } else if ( document.contact.subject.value == "" ) {
	 alert( "Hãy nhập tiêu đề vào!" );		
	 document.contact.subject.focus();
    } else if ( document.contact.content.value == "" ) {
	 alert( "Hãy nhập nội dung vào!" );		
	 document.contact.content.focus();
     return false;
    } else if (document.contact.code.value == "" ){
	 alert( "Hãy nhập mã xác nhận vào!" );	
	 document.contact.code.focus();
     return false;
    }
    
}
function guidathang(){
    if ( document.dathang.fullname.value == "" ) {
	 alert( "Hãy nhập tên của bạn vào!" );
	 document.dathang.fullname.focus();
    } else if ( document.dathang.email.value == "" ) {
	 alert( "Hãy nhập email của bạn vào!" );		
	 document.dathang.email.focus();
    } else if (( document.dathang.email.value.search("@") == -1 ) || ( document.dathang.email.value.search("[.*]" ) == -1 )){
	 alert( "Địa chỉ Email không hợp lệ" );	
	 document.dathang.email.focus();
    } else if ( document.dathang.diachi.value == "" ) {
	 alert( "Hãy nhập địa chỉ của bạn vào!" );		
	 document.dathang.diachi.focus();
    } else if ( document.dathang.phone.value == "" ) {
	 alert( "Hãy nhập số điện thoại của bạn vào!" );		
	 document.dathang.phone.focus();
    } else if (document.dathang.code.value == "" ){
	 alert( "Hãy nhập mã xác nhận vào!" );	
	 document.dathang.code.focus();
    } else {
    	 var fullname = encodeURIComponent(document.getElementById("fullname").value);
	 		 var email = encodeURIComponent(document.getElementById("email").value);
	     var phone = encodeURIComponent(document.getElementById("phone").value);
	     var diachi = encodeURIComponent(document.getElementById("diachi").value);
	     var content = encodeURIComponent(document.getElementById("content").value);
	     var code = encodeURIComponent(document.getElementById("code").value);
	     var linkid = document.getElementById("linkid").value;
	     var param = "fullname="+fullname+"&email="+email+"&phone="+phone+"&diachi="+diachi+"&content="+content+"&code="+code;
 	     if (linkid == ""){
 	        window.location.href='index.php?mod=giohang&submit=1&'+param;
 	     } else {
 	        // Chon cau hinh  	
 	        window.location.href='index.php?mod=choncauhinh&submit=1&'+linkid+'&'+param;
	     }
    }
    return false;
}
/****************  Tim kiem *****************/

function search(kwd){  
	 var kwd = document.getElementById("kwd").value;
	 if (kwd=="" || kwd.length<3){
	     alert('Từ khóa tìm kiếm phải lớn hơn 3 ký tự!');
	     window.location.href='#Cuongtan,timkiem';
	 } else {	
	     kwd = kwd.replace(/&/g,'%26');
	     kwd = kwd.replace(/"/g,'%22');	     	     
 	     window.location.href= url+ 'search/'+kwd;     
	 }
}

/************  Thu nho - Mo rong Gui don dat hang **********/

var ie45,ns6,ns4,dom;
if (navigator.appName=="Microsoft Internet Explorer") ie45=parseInt(navigator.appVersion)>=4;
else if (navigator.appName=="Netscape"){ns6=parseInt(navigator.appVersion)>=5;ns4=parseInt(navigator.appVersion)<5;}
dom=ie45 || ns6;
function showhide(id) {
         elb = document.all ? document.all[id] :   dom ? document.getElementById(id) :   document.layers[id];
         els = dom ? elb.style : elb;
         if (dom){
             if (els.display == "none") {
                 els.display = "";
                 window.status="Mở form gửi đơn hàng";
             } else {
                 els.display = "none";
                 window.status="Đóng form gửi đơn hàng";
             }
         } else if (ns4){
             if (els.display == "show") {
                 els.display = "hide";
                 window.status="Mở form gửi đơn hàng";
             } else {
                 els.display = "show";
                 window.status="Đóng form gửi đơn hàng";
             }
         }
}

