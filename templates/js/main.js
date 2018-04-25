(function(){
function getData(form_inputs){
	var data = {};
	$(form_inputs).each(function(){
		data[this.name] = this.value;
	});
	return data;
}
function validateEmail(selector_email) {
	var email = $(selector_email).val();
  	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  	return re.test(email);
}
/*CHANGE PROFILE INFO*/
$(".btn-save").on("click",function(){
	if(validateEmail("div.profile>label>input[name='email']")){
		$.ajax({
			type:'POST',
			url:'?controller=user&action=update',
			dataType:'json',
			data: getData("div.profile>label>input"),
			success: function(data){
				if(data['success']){
					alert('Change Success!');
				}else{
					alert(data['message']);
				}
			},
			error:function(e){
				console.log(e);
			}
		});
	}else{
		alert('Email is not valid.');
		$("div.profile>label>input[name='email']").focus();
	}
});
/*CHANGE PASSWORD*/
$(".btn-change").on("click",function(){
	$.ajax({
		type:'POST',
		url:'?controller=user&action=update',
		dataType:'json',
		data: getData("div.change-pass>label>input"),
		success: function(data){
			if(data['success']){
				alert('Change Success!');
				$("div.change-pass>label>input").each(function(){
					this.value='';
				});
			}else{
				alert(data['message']);
			}
		},
		error:function(e){
			console.log(e);
		}
	});
});
})();