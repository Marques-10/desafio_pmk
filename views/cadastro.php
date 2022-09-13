<div class="container">
    
    <hr>

    <h2>Página de cadastro</h2>
        
    <form action="cadastro/novo" method="post">
        <div class="form-row">
            <div class="form-group col-md-9">
                <label for="nome">Nome</label>
                <!-- <input type="text" class="form-control <?php // $erros['nome'] ? 'is-invalid' : '' ?>" id="nome" name="nome" placeholder="Nome" value="<?php // $_POST['nome']; ?>"> -->
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="">
                <div class="invalid-feedback">
                    <?php // $erros['nome'] ?>
                </div>
            </div>
            <div class="form-group col-md-3">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="cpf" value="">
                <div class="invalid-feedback">
                    <?php // $erros['nascimento'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="">
                <div class="invalid-feedback">
                    <?php // $erros['email'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="telefone" value="">
                <div class="invalid-feedback">
                    <?php // $erros['site'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nascimento">Data de nascimento</label>
                <input type="text" class="form-control" id="nascimento" name="nascimento" placeholder="Data de nascimento" value="">
                <div class="invalid-feedback">
                    <?php // $erros['filhos'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="data_cadastro">Data Cadastro</label>
                <input type="text" class="form-control" id="data_cadastro" name="data_cadastro" placeholder="Data cadastro" value="">
                <div class="invalid-feedback">
                    <?php // $erros['salario'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="intervalo_doacao">Intervalo de Doação</label>
                <select class="form-control" name="intervalo_doacao" id="intervalo_doacao">
                    <option value="1">Único</option>
                    <option value="2">Bimestral</option>
                    <option value="3">Semestral</option>
                    <option value="4">Anual</option>
                </select>
                <div class="invalid-feedback">
                    <?php // $erros['filhos'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="cadastro">Forma de Pagamento</label>
                <select class="form-control select_pagamento" name="forma_pagamento" id="forma_pagamento">
                    <option value="debito">Débito</option>
                    <option value="credito">Crédito</option>
                </select>
                <div class="invalid-feedback">
                    <?php // $erros['salario'] ?>
                </div>
            </div>
        </div>
        <div class="form-row form-debito">
            <div class="form-group col-md-6">
                <label for="agencia">Agência</label>
                <input type="text" class="form-control" id="agencia" name="agencia" placeholder="Agência" value="">
                <div class="invalid-feedback">
                    <?php // $erros['salario'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="conta">Conta</label>
                <input type="text" class="form-control" id="conta" name="conta" placeholder="Conta" value="">
                <div class="invalid-feedback">
                    <?php // $erros['salario'] ?>
                </div>
            </div>
        </div>
        <div class="form-row form-credito" style="display: none">
            <div class="form-group col-md-6">
                <label for="bandeira_cartao">Bandeira do Cartão</label>
                <select class="form-control" name="bandeira_cartao" id="bandeira_cartao">
                    <option value="1">Visa</option>
                    <option value="2">Elo</option>
                    <option value="3">Mastercard</option>
                </select>
                <div class="invalid-feedback">
                    <?php // $erros['filhos'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="numero_cartao">Número do cartão</label>
                <input type="text" class="form-control" id="numero_cartao" name="numero_cartao" placeholder="Conta" value="">
                <div class="invalid-feedback">
                    <?php // $erros['salario'] ?>
                </div>
            </div>
        </div>
        <button class="btn btn-primary btn-lg">Enviar</button>
    </form>
</div>