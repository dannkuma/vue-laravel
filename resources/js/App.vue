<template>
    <div class="page">
      <p class="text-danger">{{ counter }}</p>
      <button @click="counter += 1">
        click!
      </button>
    </div>
   </template>
  
   <script>
   export default {
    data () {
      return {
        counter: 0,
      }
    },
   }
   </script>
  