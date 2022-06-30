<!-- MODAL CONTACT -->
<div class="modal fade" id="modalContact" tabindex="-1" role="dialog" aria-labelledby="modalContactLabel" aria-hidden="true">
  <div class="modal mostrar" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Contactanos</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="../cnx/send_comment.php" method="POST">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <input type="text" name="user_name" class="form-control" placeholder="Nombre" required>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <input type="email" name="user_email" class="form-control" placeholder="Email" required>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <input type="text" name="user_phone" class="form-control" placeholder="Telefono" required>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <textarea name="user_comment" class="form-control" id="" cols="30" rows="10" placeholder="Mensaje" required></textarea>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-info">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>