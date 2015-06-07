<?php 
function menu(){	
	@$formAcessar = $_GET["acesse"];
	
	if($formAcessar == "acessar"){
		echo "<div id='escolhaFormAcesse'>
         		<div class='formAcesse'>
              	<h1>Acesse sua conta</h1>
                  <form action='logado' method='post'>
                      <input type='email' id='email' value='' placeholder='E-mail:' autofocus /><br />
                      <input type='password' id='senha' value='' placeholder='Senha:' /><br />
                      <input type='submit' value='Acessar' class='btAcessar'/>
                  </form>
              </div>
       </div>";
	}
	elseif($formAcessar == ""){
		echo "<div id='escolhaFormAcesse'>
         		<div class='formAcesse'>
              	<h1>Acesse sua conta</h1>
                  <form action='logado' method='post'>
                      <input type='email' value='' id='email' placeholder='E-mail:' autofocus /><br />
                      <input type='password' id='senha' value='' placeholder='Senha:' /><br />
                      <input type='submit' value='Acessar' class='btAcessar'/>
                  </form>
              </div>
       </div>";
	}
	else{
		echo "<div id='escolhaFormCadastrese'>

           <div class='formAcesse'>
                  <h1>Cadastrar conta</h1>
                  <form action='logado' method='post'>
                        <input type='nome' id='txtNome' value='' placeholder='Nome:' autofocus /><br />
                        <input type='email' id='txtEmail' value='' placeholder='E-mail:' /><br />
                        <input type='password' id='txtSenha' value=''  placeholder='Senha:' /><br />
                        <input type='submit' value='Cadastrar' class='btCadastrar'/>
                  </form>
            </div>
        </div>";
	}
	
}

?>