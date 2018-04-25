(function(){
/* SIGN UP MODAL, POP UP */
$(".signup").on("click",function(){
	$(".modal").show();
});

$(".close").on("click",hideModal);

window.onclick=function(event){
	if(event.target == document.getElementById('modal')){
		hideModal();
	};
};

function hideModal(){
	let check=false;
    $("div.modal-signup>label>input").each(function(){
		if(this.value!==''){
			check=true;
		}
	});
	if(!check){
		$(".modal").hide();
	}else{
		if(confirm("Input not empty ! Quit anyway?")){
			$("div.modal-signup>label>input").each(function(){
				this.value='';
			});
			$(".modal").hide();
		}
	}
}
/*END SIGN UP MODAL*/

/* REGISTRY , Functions*/
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

$(".btn-signup").on("click",function(){
	if(validateEmail("div.modal-signup>label>input[name='email']")){
		$.ajax({
			type:'POST',
			url:'?controller=user&action=registry',
			data:getData("div.modal-signup>label>input"),
			dataType:'json',
			success: function(data){
				if(data['success']){
					alert('Registration Success!');
					$("div.modal-signup>label>input").each(function(){
						this.value='';
					});
					$('.modal').hide();
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
		$("div.modal-signup>label>input[name='email']").focus();
	}
});
/*END REGISTRY*/
})();