<template>
    <html lang="en">    
        <div class="container mt-4">
            <div class="card border-secondary">
                <div class="card-header">Editar tarea</div>
                <div class="card-body">
                    <form action="/update" method="POST">
                        <input id="id" name="id" value="<%= producto.id  %>" hidden>
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre de la tarea</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<%= producto.nombre  %>" tabindex="1">
                            </div>
                            <div class="mb-3">
                                <label for="tipo" class="form-label">Descripción</label>
                                <input type="text" class="form-control" id="tipo" name="tipo" value="<%= producto.descripcion %>" tabindex="1">
                            </div>
                            <div class="mb-3">
                                <label for="precio" class="form-label">Completada</label>
                                <input type="text" class="form-control" id="precio" name="precio" value="<%= producto.precio  %>" tabindex="1">
                            </div>
                        <button type="submit" class="btn btn-primary" tabindex="5" >Guardar</button>
                        <a href="/" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </html>
</template>
  