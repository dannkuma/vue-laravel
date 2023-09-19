<template>
    <draggable v-model="data" group="people" item-key="id" handle=".handle">
    <template #item="{ element }">
        <li class="handle">{{ element.id }} - {{ element.name }}</li>
    </template>
    </draggable>
</template>
  
  <script setup>
  import {defineProps } from "vue";
  import draggable from "vuedraggable";

  const props = defineProps({
    data: {
        type: Array,
        required: true,
        default: () => [],
      },
  });
  console.log(props);
  </script>
  
  <style scoped>
  </style>
  