<template>
  <div>
    <div class="item">
      <input type="checkbox" @change="updateCheck()" v-model="item.completed" />
      <span :class="[item.completed ? 'completed' : '', 'itemText']">
        {{ item.name }}
      </span>
      <button @click="removeItem()" class="trashcan">
        <font-awesome-icon icon="trash" />
      </button>
    </div>
  </div>
</template>

<script>
export default {
  props: ["item"],
  methods:{
      updateCheck(){
          axios.put('api/item/' + this.item.id, {
              item: this.item
          })
          .then(response => {
              if(response.status == 200){
                  this.$emit('itemChanged');
              }
          })
          .catch(error =>{
              console.log(error);
          })
      }
  }
};
</script>
<style scoped>
.completed {
  text-decoration: line-through;
  color: #999999;
}
.itemText {
  width: 100%;
  margin-left: 20px;
}
.item {
  width: 97%;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.trashcan {
  background: #e6e6e6;
  border: none;
  color: lightcoral;
  outline: none;
}
.trashcan:hover {
  color: red;
}
</style>