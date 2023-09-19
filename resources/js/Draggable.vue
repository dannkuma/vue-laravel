<template>
      <draggable v-model="data" group="people" item-key="id" handle=".handle">
        <template #item="{ element }">
          <div class="drag-item">
            <span class="handle">ここを押せば動かせます。</span>
            {{ element.id }} - {{ element.content }}
          </div>
        </template>
      </draggable>
  </template>
  
  <script setup>
  import { ref } from "vue";
  import draggable from "vuedraggable";
  
  const data = ref([
    {
      id: 1,
      content: "テスト1",
    },
    {
      id: 2,
      content: "テスト2",
    },
    {
      id: 3,
      content: "テスト3",
    },
  ]);
  </script>
  
  <style scoped>
  .drag-item {
    background: rgb(233, 249, 255);
    margin: 10px 0;
  }
  </style>
  