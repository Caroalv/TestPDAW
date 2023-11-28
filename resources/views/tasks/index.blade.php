<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.11/dist/sweetalert2.min.css">
  </head>
  <body>
    <h1>Tareas</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>

<form action="{{route('tasks.store')}}" method="POST" class="mb-3">
@csrf
<!-- Botón para redirigir a la página de gráficas -->
<a href="{{ route('graficas') }}" class="btn btn-primary">Ver Gráficas</a>

</div>
<table id="example"class="table">
  <thead>
    <tr>
      <th scope="col">Titulo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Estado</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($task as $task)
        <tr>
          <td>{{ $task->titulo }}</td>
          <td>{{ $task->descripcion }}</td>
          <td>{{ $task->estado ==1 ? 'activo' : 'inactivo'}}</td>
          
          <td>
            <div class="btn-group" role="group" aria-label="Basic example">
                  <div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verModal{{ $task->id }}">Actualizar</button>
                  </div>
</form>
<form action="{{ route('tasks.destroy', $task) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="button" class="btn btn-danger btn-sm eliminar-tarea">Eliminar</button>
</form>
            </div>
          </td>
        </tr>
        <div class="modal fade" id="verModal{{ $task->id }}" aria-labelledby="exampleModalLabel" aria-hidden="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detalles de la tarea</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    
                    <div class="modal-body">
                        <form action="{{ route('tasks.update', $task)}}" method='POST'>
                            @csrf
                            @method('PUT')
                            <div class="mb-3" hidden>
                                <label for="titulo" class="form-label">ID</label>
                                <input type="text" value="{{ $task->id }}" class="form-control" id="id" name="id">
                            </div>
                            <div class="mb-3">
                                <label for="titulo" class="form-label">Título de la tarea</label>
                                <input type="text" value="{{ $task->titulo }}" class="form-control" id="titulo" name="titulo">
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripción de la tarea</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="3">{{ $task->descripcion }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="estado" class="form-label">Estado</label>
                                <select class="form-select" id="estado" name="estado">
                                    <option value="1" {{ $task->estado == 1 ? 'selected' : '' }}>Activo</option>
                                    <option value="2" {{ $task->estado == 2 ? 'selected' : '' }}>Inactivo</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-info">Actualizar tarea</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        
    <div>
      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">
        Crear nueva tarea
      </button>
    </div>
  </div>
  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crear nueva tarea</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('tasks.store')}}" method='POST'>
            @csrf
            <div class="mb-3">
              <label for="titulo" class="form-label">Título de la tarea</label>
              <input type="text" class="form-control" id="titulo" name="titulo">
            </div>
            <div class="mb-3">
              <label for="descripcion" class="form-label">Descripción de la tarea</label>
              <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
            </div>
            <div class="mb-3" hidden>
              <label for="estado" class="form-label">Estado</label>
              <input type="text" class="form-control" id="ESTADO" name="estado" value="1">
            </div>            
            <button type="submit" class="btn btn-success">Crear tarea</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
      </tbody>

      <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.11/dist/sweetalert2.all.min.js"></script> 	 	
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.11/dist/sweetalert2.all.min.js"></script>



    <script>new DataTable('#example', {
    dom: 'Bfrtip',
    buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
});</script>

</table>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Selecciona todos los botones con la clase "delete-task"
        const deleteButtons = document.querySelectorAll('.eliminar-tarea');

        deleteButtons.forEach(button => {
            button.addEventListener('click', () => {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: 'Esta acción no se puede deshacer.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // El formulario se envía si el usuario confirma
                        button.closest('form').submit();
                    }
                });
            });
        });
    });
</script>
</html>

