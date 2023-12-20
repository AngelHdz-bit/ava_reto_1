<template>
    <div class="container mt-4">
      <div class="card border-secondary">
        <div class="card-header">Nueva Tarea</div>
        <div class="card-body">
          <form @submit.prevent="guardarTarea">
            <div class="mb-3">
              <label for="titulo" class="form-label">Nombre de la tarea</label>
              <input v-model="titulo" type="text" class="form-control" id="titulo" name="titulo" tabindex="1">
            </div>
            <div class="mb-3">
              <label for="descripcion" class="form-label">Descripción</label>
              <input v-model="descripcion" type="text" class="form-control" id="descripcion" name="descripcion" tabindex="2">
            </div>
            <div class="mb-3">
              <label for="completada" class="form-label">Completada</label>
              <input v-model="completada" type="text" class="form-control" id="completada" name="completada" tabindex="3">
            </div>
            <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
            <router-link to="/" class="btn btn-secondary">Cancelar</router-link>
          </form>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        titulo: '',
        descripcion: '',
        completada: '',
      };
    },
    methods: {
      async guardarTarea() {
        try {
          const tareaData = {
            titulo: this.titulo,
            descripcion: this.descripcion,
            completada: this.completada,
          };
          const response = await axios.post('http://127.0.0.1:8000/api/create-tareas', tareaData);
          console.log(response.data);
          this.$router.push({ name: 'view' }); 
        } catch (error) {
          console.error('Error al crear la tarea:', error);
          if (error.response && error.response.data) {
            console.error('Detalles del error:', error.response.data);
          }
        }
      },
    },
  };
  </script>
  