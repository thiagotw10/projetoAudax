function deletarUsuario(c){
    var usuario = document.getElementById('usuario'+c)
    var modal = document.getElementById('modal')
    var card = document.getElementById('card')
    modal.style.display = 'flex';
    var nomes = [];
    

        nomes.push({
            nome: usuario,
            contador: c
        })

        console.log(nomes)
        nomes.map(function(val){
            
        card.innerHTML+=`
        <div class="conteudo-modal">
        <!-- menu hamburguer-->
    <div class="hamburguer" id="hamburguer" onclick="celular()">
            <div></div>
            <div></div>
            <div></div>
        </div>
    <!-- menu hamburguer-->
        <h2>Tem certeza que deseja deletar: <p> <b> `+val.nome.outerText+`</b> </p></h2>
        <div class='botoes-modal'>
            <button class="fechar" onclick='modalFechar()'>Cancelar</button>
            <form action='' method='post'> <input type='submit' value='Deletar' name='`+val.contador+`'>  </form>
        </div>
        </div>
       
        
        `
        console.log(val.nome.outerText)
        console.log(val.contador)
        })
    }
    

    function modalFechar(){
        var modal = document.getElementById('modal')
        var card = document.getElementById('card')
        card.innerHTML = '';
        modal.style.display = 'none';
    }


    function trocaTelas(){
        let telaUsuarioA = document.getElementById('trocaTelaA');
        let telaUsuarioB = document.getElementById('trocaTelaB');
        let telaUsuarioC = document.getElementById('trocaTelaC');
        let mostrarTela = document.getElementById('listaUsuario');
        telaUsuarioA.style.display = 'none';
        telaUsuarioB.style.display = 'none';
        telaUsuarioC.style.display = 'none';

        mostrarTela.innerHTML +=`<div class='container-modal-cadastro'>
        <!-- menu hamburguer-->
    <div class="hamburguer" id="hamburguer" onclick="celular()">
            <div></div>
            <div></div>
            <div></div>
        </div>
    <!-- menu hamburguer-->
                                <div class='container-modal-h1'>
                                    <h1> Cadastrar usuário </h1>
        
                                 </div>
                                 
                                 <form action='' method='post' class='container-modal-form'>
                                    <div class='modal-input-nomes'> 
                                    <label> Nome <input type='text' name='nome'> </label>
                                    <label> Função <select name="funcao">
                                        <option value="" selected>selecione</option>
                                        <option value="aprovador">aprovador</option>
                                        <option value="solicitador">solicitador</option>
                                    </select> 
                                    </label>
                                    <label> E-mail <input type='email' name='email'> </label>
                                    <label> Senha <input type='password' name='senha'> </label>
                                    </div>

                                    <div class='modal-input-botoes'>
                                        <div>
                                        <button onclick='cancelarUsuario()'> Cancelar </button>
                                        <input style='background-color: #1473E6;' type='submit' value='Cadastrar usuário' name='cadastrarUsuario'>
                                        </div>
                                    </div>
                                 </form>
                                 
                                 </div>
                                 `

    }


    
    function trocaTelasMaterial(){
        let telaUsuarioA = document.getElementById('trocaTelaA');
        let telaUsuarioB = document.getElementById('trocaTelaB');
        let telaUsuarioC = document.getElementById('trocaTelaC');
        let mostrarTela = document.getElementById('listaUsuario');
        telaUsuarioA.style.display = 'none';
        telaUsuarioB.style.display = 'none';
        telaUsuarioC.style.display = 'none';

        mostrarTela.innerHTML +=`<div class='container-modal-cadastro'>
        <!-- menu hamburguer-->
    <div class="hamburguer" id="hamburguer" onclick="celular()">
            <div></div>
            <div></div>
            <div></div>
        </div>
    <!-- menu hamburguer-->
                                <div class='container-modal-h1'>
                                    <h1> Cadastrar Material </h1>
        
                                 </div>
                                 
                                 <form action='' method='post' class='container-modal-form'>
                                    <div class='modal-input-nomes-material'> 
                                    <label> Material <input type='text' name='material'> </label>
                                    </div>

                                    <div class='modal-input-botoes'>
                                        <div>
                                        <button onclick='cancelarUsuario()'> Cancelar </button>
                                        <input style='background-color: #1473E6;' type='submit' value='Cadastrar material' name='cadastrarMaterial'>
                                        </div>
                                    </div>
                                 </form>
                                 
                                 </div>
                                 `

    }


    function trocaTelasSolicitacoes(){

        
        location.href = '../nova-solicitacao'
    

     }

     

       

    


    function cancelarUsuario(){
        var telaUsuarioA = document.getElementById('trocaTelaA');
        var telaUsuarioB = document.getElementById('trocaTelaB');
        var telaUsuarioC = document.getElementById('trocaTelaC');
        telaUsuarioA.style.display = 'flex';
        telaUsuarioB.style.display = 'flex';
        telaUsuarioC.style.display = 'flex';
        
        
    }


    function visualizarSolicitacao(c){
        let nome = document.getElementById('nome'+c).value
        let data = document.getElementById('data'+c).value
        let status = document.getElementById('status'+c).value
        let id = document.getElementById('id'+c).value
        let materiais = document.getElementById('materiais'+c).value
        let observacao = document.getElementById('observacao'+c).value
        localStorage.setItem('nome', nome)
        localStorage.setItem('data', data)
        localStorage.setItem('status', status)
        localStorage.setItem('id', id)
        localStorage.setItem('materiais', materiais)

        if(status == 'reprovado'){
            var cor = 'red'
        }else if(status == 'aprovado'){
            var cor = 'green'
        }else{
            var cor = 'black'
        }

        document.getElementById('listaUsuario').innerHTML =`<div class='container-modal-cadastro'>
        <!-- menu hamburguer-->
    <div class="hamburguer" id="hamburguer" onclick="celular()">
            <div></div>
            <div></div>
            <div></div>
        </div>
    <!-- menu hamburguer-->
        <div class='container-modal-h1-aprovador'>
            <h1> Cadastrar Material </h1>

         </div>
         
         <form action='' method='post' class='container-modal-form'>
            <div class='modal-input-nomes-material-aprovador'>
                <div class="input-aprovador">
                    <label> <b>Solicitador</b> <input type='text' name='material' value='`+nome+`'> </label>
                    <label> <b>Data da solicitação</b> <input type='text' name='material' value='`+data+`'> </label> 
                </div>
                <div class="modal-label-aprovador-check">
                        <label> <b>Materiais solicitados:</b></label>
                        <label> <div> `+materiais+` </div> <input type='checkbox' name='material' checked> </label>
                        <label> <div> Status: </div> <p style='color: `+cor+`; margin-left: 5px;'> `+status+` </p> </label>
                        <label class='textArea'> Observação:  <textarea  name='observacao' id="" cols='100' rows='7'>`+observacao+`</textarea></label>
                      
                </div>
            </div>

            <div class='modal-input-botoes'>
                <div>
                <input type='hidden' name='id' value="`+id+`">

                <input style='background-color: #FB2B3F;' type='submit' value='Reprovar' name='reprovarMaterial'>
                <input type='submit' value='Aprovar' name='aprovarMaterial'>
                
                </div>
            </div>
         </form>
         
         </div>
         `

        
    }



    
    function visualizarSolicitacaoDetalhes(c){
        let nome = document.getElementById('nome'+c).value
        let data = document.getElementById('data'+c).value
        let status = document.getElementById('status'+c).value
        let id = document.getElementById('id'+c).value
        let materiais = document.getElementById('materiais'+c).value
        let observacao = document.getElementById('observacao'+c).value
        localStorage.setItem('nome', nome)
        localStorage.setItem('data', data)
        localStorage.setItem('status', status)
        localStorage.setItem('id', id)
        localStorage.setItem('materiais', materiais)
        localStorage.setItem('observacao', observacao)

        if(status == 'reprovado'){
            var cor = 'red'
        }else if(status == 'aprovado'){
            var cor = 'green'
        }else{
            var cor = 'black'
        }

        document.getElementById('listaUsuario').innerHTML =`<div class='container-modal-cadastro'>
        <!-- menu hamburguer-->
    <div class="hamburguer" id="hamburguer" onclick="celular()">
            <div></div>
            <div></div>
            <div></div>
        </div>
    <!-- menu hamburguer-->
        <div class='container-modal-h1-aprovador'>
            <h1> Sua solicitação </h1>

         </div>
         
         <form action='' method='post' class='container-modal-form'>
            <div class='modal-input-nomes-material-aprovador'>
                <div class="input-aprovador">
                </div>
                <div class="modal-label-aprovador-check">
                        <label> <b>Materiais solicitados:</b></label>
                        <label> <div> `+materiais+` </div> <input type='checkbox' name='material' checked> </label>
                        <label> <div> Status: </div> <p style='color: `+cor+`; margin-left: 5px;'> `+status+` </p> </label>
                        <label class='textArea'> Observação:  <textarea  name='' id="" cols='100' rows='7'>`+observacao+`</textarea></label>
                        
                </div>
            </div>

            <div class='modal-input-botoes'>
                <div>
                <input type='hidden' name='id' value="`+id+`">

                
                <input style='background-color: #1473E6;' type='submit' value='Voltar' name='aprovarMaterial'>
                
                </div>
            </div>
         </form>
         
         </div>
         `

        
    }





    document.getElementById('pesquisar').addEventListener('keyup', function(val){
        val.preventDefault();
    let busca = document.getElementById('pesquisar').value
    let url = document.getElementById('url').value
    let rodar = document.getElementById('rodar')
    localStorage.setItem('paginacao', url)
    if(busca ==  ''){
        localStorage.removeItem('busca')
        
          location.href = `../`+localStorage.getItem('paginacao')+``
           
        
         
    }else{
        rodar.click();
        localStorage.setItem('busca', busca);
    }
       
        
    })



    function pesquisar(){
        document.getElementById('pesquisar').value = localStorage.getItem('busca')
        document.getElementById('pesquisar').focus();
    }



    function celular(){
        let menu = document.getElementById('menuCelular')
        if(menu.style.display != 'flex'){
            menu.style.display = 'flex'
        }else if(menu.style.display != 'none'){
            menu.style.display = 'none'
        }
    }