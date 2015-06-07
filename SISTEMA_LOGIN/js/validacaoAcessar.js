$(document).ready(function(){
	$(".btAcessar").click(function(){
		
	//Defino as Variaveis	
	var email = $("#email").val();
	var senha = $("#senha").val();	
	
	//Caso os campos esteja vazio, apresenta um erro;
	if(email.trim() == ""){
		alert("O Campo E-MAIL deve ser Preenchido");
		$('#email').css({
			'background-color': '#FF0000',
			'color': '#FFFFFF'
			});
		return false;
	}
	else if(senha.trim() == ""  || senha.length < 6){
		alert("A SENHA esta incorreta");
		$('#senha').css({
			'background-color':'#FF0000',
			'color':'#FFFFFF'
			});
		return false;
	}
	
		
	});
	
	//Quando clicado no campo a cor branca é acionada
	$('#email').click(function(){
		$('#email').css({
			'background-color':'#FFFFFF',
			'color':'#333333'
		});
		return true;
	});
	
	$('#senha').click(function(){
		$('#senha').css({
			'background-color':'#FFFFFF',
			'color':'#333333'
		});
		return true;
	});
	
	
	//Essa parte de cima é apenas da INDEX.PHP
	
	//P7ARTE DA RECEBE.PHP
	$('.botaoSair').click(function(){
		alert("Deseja realmente sair?");
		return true;
	});
});

