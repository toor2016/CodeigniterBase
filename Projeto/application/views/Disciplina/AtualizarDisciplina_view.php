<?php
    $this->load->view('uteis/cabecalho');
    $this->load->view('login/menu_unico');
    $situacao =  $disciplina[0]->situacaodisciplina;
    if($situacao == 1){
        $textoSituacao = "ativo";
    } else {
        $textoSituacao = "inativo";
    }
?>

<div class="container-fluid" xmlns="http://www.w3.org/1999/html">

    <div class="row-fluid">
        <?php echo validation_errors(); ?>
        <h2>Atualização da Disciplina de <?php echo $disciplina[0]->nome; ?></h2>
        <form action="<?php echo base_url('Disciplina/AtualizarDisciplina'); ?>" method="post">
            <input type="hidden" name="disciplinaid" value="<?php echo $disciplina[0]->disciplinaid; ?>">
            <div class="form-group">
                <label>Nome Disciplina</label>
                <input type="text" name="nome" value="<?php echo $disciplina[0]->nome; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Professor</label>
                <input type="text" name="professor" value="<?php echo $disciplina[0]->professor; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Carga horária</label>
                <input type="text" name="cargahoraria" value="<?php echo $disciplina[0]->cargahoraria; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Data de Cadastro</label>
                <input type="text" name="datacadastro" value="<?php echo $disciplina[0]->datacadastro; ?>" class="form-control">
            </div>
            <div class="form-group col-md-12">
                <label>Conceito</label>
                <textarea class="form-control" name="conceito"><?php echo $disciplina[0]->conceito; ?></textarea>
            </div>

            <div class="form-group">
                <label>Ementa</label>
                <input type="text" name="ementa" value="<?php echo $disciplina[0]->ementa; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Data de Inicio</label>
                <input type="date" name="datainicio" value="<?php echo $disciplina[0]->datainicio; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Situação</label><br>
                <label>Ativo</label>
                <input type="radio" name="situacao" value="ativo">
                <label>Inativo</label>
                <input type="radio" name="situacao" value="inativo">
            </div>
            <div class="form-group">
                <label>Universidade</label>
                <input type="text" name="universidade" value="<?php echo $disciplina[0]->universidade; ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Modalidade</label>
                <input type="text" name="modalidade" value="<?php echo $disciplina[0]->modalidade; ?>" class="form-control">
            </div>
            <div class="">
                <input type="submit" value="Atualizar" class="btn btn-default">
            </div>
        </form>
        <div class="col-md-6">
            <a href="<?php echo base_url('Login'); ?>" class="alert-link">Logout</a>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            i = 0;
            //
            var radiosSituacao = document.getElementsByName("situacao");
            for(var i = 0; i < radiosSituacao.length; i++) {
                if(radiosSituacao[i].value == "ativo") {
                    if ("<?php echo $textoSituacao; ?>" == "ativo")
                    {
                        radiosSituacao[i].checked = true;
                    }
                }

                if(radiosSituacao[i].value == "inativo")
                {
                    if ("<?php echo $textoSituacao; ?>" == "inativo")
                    {
                        radiosSituacao[i].checked = true;
                    }
                }
            }
        })

    </script>
</div>

<?php $this->load->view('uteis/rodape')?>