<div class="row">
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Cadastro de Alunos</h6>
            </div>
            <div class="card-body">
            <form class="row g-3" method="post" action="index.php?r=cadAluno">
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">Nome</label>
                    <input type="text" name="nome" class="form-control" id="inputEmail4">
                </div>

                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Sexo</label>
                    <select class="form-control">
                        <option value="">-</option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="inputEmail4" class="form-label">CPF</label>
                    <input type="text" name="cpf" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">CEP</label>
                    <input type="text" name="cep" id="cep"  onblur="pesquisacep(this.value);"   class="form-control">
                </div>

                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Rua</label>
                    <input type="text" name="rua" id="rua" readonly class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Cidade</label>
                    <input type="text" name="cidade" id="cidade" readonly class="form-control">
                </div>

                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Bairro</label>
                    <input type="text" name="bairro" readonly class="form-control" id="bairro">
                </div>

                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Estado</label>
                    <input type="text" name="estado" readonly class="form-control" id="uf">
                </div>

                <div class="col-md-12">
                    <label for="inputPassword4"  class="form-label">Observação</label>
                    <textarea name="obs"  rows= 7 class="form-control"></textarea>
                </div>


                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

<?php
if(empty($_POST['nome'])){
    echo "<script>alert('oi')</script>";
}

?>