<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <?php $this->load->view('validation_messages'); ?>

  <section id="main">

    <div class="row" id="btn-row">
      <div class="col-lg-4 col-lg-offset-4">
        <button class="btn btn-primary btn-lg btn-block" id="target" style="margin-left:15px">Click me!</button>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-lg-2">
        <h4>Forma</h4>
        <textarea id="one" class="form-control" rows="10" readonly></textarea>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="keepA"> Guardar
          </label>
        </div>
      </div>
      <div class="col-lg-2">
        <h4>Função</h4>
        <textarea id="two" class="form-control" rows="10" readonly></textarea>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="keepB"> Guardar
          </label>
        </div>
      </div>
      <div class="col-lg-2">
        <h4>Tecnologia</h4>
        <textarea id="three" class="form-control" rows="10" readonly></textarea>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="keepC"> Guardar
          </label>
        </div>
      </div>
      <div class="col-lg-2">
        <h4>Modelo de Negócio</h4>
        <textarea id="four" class="form-control" rows="10" readonly></textarea>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="keepD"> Guardar
          </label>
        </div>
      </div>
      <div class="col-lg-2">
        <h4>Público Alvo</h4>
        <textarea id="five" class="form-control" rows="10" readonly></textarea>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="keepE"> Guardar
          </label>
        </div>
      </div>
      <div class="col-lg-2">
        <h4>Brainstorm</h4>
        <textarea id="six" class="form-control" rows="10" readonly></textarea>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="keepF"> Guardar
          </label>
        </div>
      </div>
    </div>
  </section>
  <section id="option">
    <div class="row">
      <div class="checkbox">
        <label>
          <input id="viewCheck" type="checkbox" name="viewAll"> Exibir todas as opções
        </label>
      </div>
    </div>
  </section>
  <section id="lists" class="hidden">
    <div class="row">

      <div class="col-lg-2">

        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Forma</th>
            </tr>
          </thead>
          <tbody id="table-a">
            
          </tbody>
        </table>

      </div>

      <div class="col-lg-2">

        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Função</th>
            </tr>
          </thead>
          <tbody id="table-b">
            
          </tbody>
        </table>

      </div>

      <div class="col-lg-2">

        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Tecnologia</th>
            </tr>
          </thead>
          <tbody id="table-c">
            
          </tbody>
        </table>

      </div>

      <div class="col-lg-2">

        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Modelo de Negócio</th>
            </tr>
          </thead>
          <tbody id="table-d">
            
          </tbody>
        </table>

      </div>

      <div class="col-lg-2">

        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Público Alvo</th>
            </tr>
          </thead>
          <tbody id="table-e">
            
          </tbody>
        </table>

      </div>

      <div class="col-lg-2">

        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Brainstorm</th>
            </tr>
          </thead>
          <tbody id="table-f">
            
          </tbody>
        </table>

      </div>

    </div>
  </section>

  <div id="addWords" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Cadastrar</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="<?= site_url('home/addOptions') ?>">
            <div class="form-group">
              <label for="exampleInputEmail1">Qual a categoria?</label>
              <select class="form-control" name="column">
                <option value="a">Forma</option>
                <option value="b">Função</option>
                <option value="c">Tecnologia</option>
                <option value="d">Modelo de Negócio</option>
                <option value="e">Público Alvo</option>
                <option value="f">Brainstorm</option>
              </select>
            </div>
            <div class="form-group">
              <textarea name="word" class="form-control" rows="3"></textarea>
            </div>
            <input type="hidden" name="url" value="<?php echo current_url(); ?>" />
            
            <button type="submit" class="btn btn-primary">Vai!</button>
          </form>
        </div>
        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->