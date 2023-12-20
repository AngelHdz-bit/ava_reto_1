<template>
    <html lang="en">
        <div class="container">
            <a href="" class="btn btn-outline-primary mt-4"> Agregar</a>
            <table class="table table-bordered table-striped text-center mt-4">
                <thead>
                    <tr class="bg-primary text-white">
                        <th scope="col">ID</th>
                        <th scope="col" >Titulo</th>
                        <th scope="col" >Descripcion</th>
                        <th scope="col" >Completada</th>
                        <th scope="col" >Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="tarea in tareas" :key="tarea.id">
                        <td v-text="tarea.id"></td>
                        <td v-text="tarea.titulo"></td>
                        <td v-text="tarea.descripcion"></td>
                        <td v-text="tarea.completada"></td>
                        <td>
                            <a href="" class="btn btn-outline-info">editar</a>
                            <a href="" class="btn btn-outline-danger">borrar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </html>
</template>

<script>
    import axios from 'axios';

    export default {
        data() {
            return {
                tareas: null,
            };
        },
        mounted() {
            this.getTareas(); // Llama a la función getTareas
        },
        methods: {
            getTareas() {
                axios.get('http://127.0.0.1:8000/api/get-tareas')
                    .then(res => {
                        this.tareas = res.data;
                    })
                    .catch(error => {
                        console.error('Error al obtener las tareas', error);
                    });
            },
        },
    };
</script>
