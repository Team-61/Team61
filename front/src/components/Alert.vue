<template>
  <div class="task-alert">
    <div class="-icon">
      <img :src="icon || 'https://via.placeholder.com/64x64'" alt="icone de notificação" />
    </div>
    <div class="-content">
      <div class="-title">{{title || "Sem título"}}</div>
      <div class="-description">{{description || "Sem descrição"}}</div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["icon", "title", "description"]
};
</script>

<style lang="stylus" scoped>
.task-alert {
  grid-area: alert;
  display: grid;
  min-height: 64px;
  grid-template-columns: 64px auto;
  align-items: center;
  background: #FFF;
  border: 1px solid #AF3636;
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.15);
  border-radius: 4px;
  cursor: pointer;

  > .-icon {
    display: flex;
    height: 100%;
    background: #F2F2F0;
    border-radius: 3px 0px 0px 3px;
    border-right: 1px solid #AF3636;
    align-items: center;
    align-items: center;
    justify-content: center;

    > img {
      display: block;
      width: 48px;
      height: 48px;
      background: #fff;
      border-radius: 50%;
    }
  }

  > .-content {
    display: inline-block;
    color: #16232E;
    font-size: 14px;
    padding: 4px 8px;

    > .-title {
      font-weight: bold;
      margin-bottom: 4px;
    }

    > .-description {
    }
  }
}
</style>