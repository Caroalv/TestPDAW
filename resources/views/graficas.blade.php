<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gráfica de Estado de Tareas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <!-- Botón para volver a la Página de Inicio -->
        <a href="{{ route('tasks.index') }}" class="btn btn-primary btn-sm mb-3">Volver a la Página de Inicio</a>

        <!-- Código del gráfico de barras para el estado de las tareas -->
        <canvas id="estadoChart" width="50" height="50"></canvas>

        <!-- Código de Chart.js -->
        <script>
          // Datos de estado de las tareas (puedes obtener estos datos desde tu controlador)
          const estadoData = {
            activo: {{ $tasks->where('estado', 1)->count() }},
            inactivo: {{ $tasks->where('estado', 2)->count() }},
          };

          // Código del gráfico de barras
          const ctx = document.getElementById('estadoChart').getContext('2d');
          new Chart(ctx, {
              type: 'bar', // Tipo de gráfico de barras
              data: {
                  labels: ['Activo', 'Inactivo'],
                  datasets: [{
                      label: 'Estado de Tareas', // Etiqueta de la barra
                      data: [estadoData.activo, estadoData.inactivo], // Datos de las barras
                      backgroundColor: ['green', 'red'], // Colores de las barras
                  }]
              },
              options: {
                  scales: {
                      y: {
                          beginAtZero: true // Eje Y comienza en cero
                      }
                  }
              }
          });
        </script>
      </div>
    </div>
  </div>
</body>
</html>
