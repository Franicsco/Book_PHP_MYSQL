$(document).ready(function(){
	$(".btCadastrar").click(function(){
		
	//Defino as Variaveis	
	var nome = $("#txtNome").val();
	var email = $("#txtEmail").val();
	var senha = $("#txtSenha").val();
	
	//Caso os campos esteja vazio, apresenta um erro;
	if(nome.trim() == ""){
		alert("O Campo NOME deve ser Preenchido");
		$('#txtNome').css({
			'background-color': '#FF0000',
			'color': '#FFFFFF'
			});
		return false;
	}
	else if(email.trim() == ""){
		alert("O Campo E-MAIL deve ser Preenchido");
		$('#txtEmail').css({
			'background-color':'#FF0000',
			'color':'#FFFFFF'
			});
		return false;
	}
	else if(senha.trim() == "" || senha.length < 6){
		alert("O Campo SENHA deve ter no minimo 6 caracteres");
		$('#txtSenha').css({
			'background-color':'#FF0000',
			'color':'#FFFFFF'
			});
		return false;
	}
		
	});
	
	//Quando clicado no campo a cor branca é acionada
	$('#txtNome').click(function(){
		$('#txtNome').css({
			'background-color':'#FFFFFF',
			'color':'#333333'
		});
		return true;
	});
	
	$('#txtEmail').click(function(){
		$('#txtEmail').css({
			'background-color':'#FFFFFF',
			'color':'#333333'
		});
		return true;
	});
	
	$('#txtSenha').click(function(){
		$('#txtSenha').css({
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

