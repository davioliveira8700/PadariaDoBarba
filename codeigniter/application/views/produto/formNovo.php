<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de um novo produto</title>
</head>

<section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Cadastro de Produtos</h5>

              <!-- Horizontal Form -->
              <form>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Nome </label>
                  <div class="col-sm-10">
                    <input type="text" name="nome" class="form-control" required>
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Valor</label>
                  <div class="col-sm-10">
                    <input type="text" name="valor" class="form-control" required>
                  </div>
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Tipo de Produto</label>
                  <div class="col-sm-10">
                    <input type="text" name="tipo_produto" class="form-control" required>
                  </div>
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Imagem</label>
                  <div class="col-sm-10">
                    <input type="text" name="imagem" class="form-control" required>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Salvar</button>
                  <button type="reset" class="btn btn-secondary">Cancelar</button>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>

          
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
               

                  <a class="btn btn-secondary" href="/index.php/produto">Voltar/Cancelar></a> 

                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>

        </div>

        
      </div>
    </section>


</html>