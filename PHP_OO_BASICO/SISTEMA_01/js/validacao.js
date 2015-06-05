$(document).ready(function(){
	$(".botao").click(function(){
		
	//Defino as Variaveis	
	var nome = $("#nome").val();
	var idade = $("#idade").val();
	var email = $("#email").val();
	
	//Caso os campos esteja vazio, apresenta um erro;
	if(nome.trim() == ""){
		alert("O Campo NOME deve ser Preenchido");
		$('#nome').css({
			'background-color': '#FF0000',
			'color': '#FFFFFF'
			});
		return false;
	}
	else if(idade.trim() == ""){
		alert("O Campo IDADE deve ser Preenchido");
		$('#idade').css({
			'background-color':'#FF0000',
			'color':'#FFFFFF'
			});
		return false;
	}
	else if(email.trim() == ""){
		alert("O Campo E-MAIL deve ser Preenchido");
		$('#email').css({
			'background-color':'#FF0000',
			'color':'#FFFFFF'
			});
		return false;
	}
		
	});
	
	//Quando clicado no campo a cor branca é acionada
	$('#nome').click(function(){
		$('#nome').css({
			'background-color':'#FFFFFF',
			'color':'#333333'
		});
		return true;
	});
	
	$('#idade').click(function(){
		$('#idade').css({
			'background-color':'#FFFFFF',
			'color':'#333333'
		});
		return true;
	});
	
	$('#email').click(function(){
		$('#email').css({
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

