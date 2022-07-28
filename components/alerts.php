<!-- Comment form success -->
<?php if (isset($_GET['ok'])) : ?>
  <div class="alert alert-success comment alert-dismissible fade show p-5" role="alert">
    <h3 class="text-success">
      <?php switch ($_GET['ok']) {
        case 'comment':
          echo "Mensaje enviado !";
          break;
        case 'register':
          echo "Registro exitoso !";
          break;
        case 'add-product':
          echo "Producto cargado";
          break;
        case 'delete-product':
          echo "Producto eliminado";
          break;
        default:
          echo "Aceptado";
          break;
      } ?>
    </h3>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php endif; ?>
<!-- Comment form success -->

<!-- Comment form success -->
<?php if (isset($_GET['error'])) : ?>
  <div class="alert alert-danger comment alert-dismissible fade show p-5" role="alert">
    <h3 class="text-danger">
      <?php switch ($_GET['error']) {
        case 'comment':
          echo "Error al enviar el mensaje !";
          break;
        case 'email':
          echo "Correo ya registrado !";
          break;
        case 'register':
          echo "Error al registrarse !";
          break;
        case 'login':
          echo "Error al iniciar sesión !";
          break;
        case 'add-product':
          echo "Error al cargar el producto !";
          break;
        case 'delete-product':
          echo "Error al eliminar el producto !";
          break;
        default:
          echo "Error desconocido";
          break;
      } ?>
    </h3>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php endif; ?>
<!-- Comment form success -->