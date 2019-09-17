<template>
  <header class="user-header">
    <div class="-photo">
      <img :src="user.photo || photoPlaceholder" :alt="`Foto de perfil de ${user.name}`" />
    </div>

    <div class="-name">Olá {{ user.name }}</div>

    <div class="-team">
      <Button>{{ user.team|| "criar time" }}</Button>
    </div>

    <button class="-config">
      <i class="fas fa-cog"></i>
    </button>

    <Alert
      :icon="notification.icon"
      :title="notification.title"
      :description="notification.description"
    />
  </header>
</template>

<script>
import Button from "./Button.vue";
import Alert from "./Alert.vue";

export default {
  name: "Header",
  components: { Button, Alert },

  data() {
    return {
      user: {
        name: null,
        photo: null,
        team: null
      },
      notification: {
        icon: null,
        title: null,
        description: null
      },
      photoPlaceholder:
        "data:image/jpeg;base64,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"
    };
  },
  mounted() {
    this.user.name = "John Doe";
  }
};
</script>

<style lang="stylus" scoped>
/* Header */
.user-header {
  display: grid;
  background: linear-gradient(112deg, #f24b4b 40%, #ce4040 100%);
  grid-template-columns: 52px auto 28px;
  grid-template-areas: 'photo name config' 'photo team config' 'alert alert alert';
  gap: 12px;
  padding: 12px;
  align-items: center;
  color: #fff;
  font-family: sans-serif;

  > .-photo {
    grid-area: photo;
    display: block;
    box-sizing: border-box;
    width: 52px;
    height: 52px;
    border-radius: 50%;
    box-shadow: inset 0 0 0 1px #fff, 0 0 0 1px #fff, 0px 1px 2px 1px #0002;
    overflow: hidden;
    cursor: pointer;

    > img {
      width: inherit;
      height: inherit;
    }
  }

  > .-name {
    grid-area: name;
    position: relative;
    top: 4px;
  }

  /* Team Button */
  > .-team {
    grid-area: team;
    position: relative;
    bottom: 2px;
  }

  /* Config */
  > .-config {
    grid-area: config;
    width: 28px;
    height: 28px;
    border-radius: 50%;
    cursor: pointer;
    outline: 0 !important;
    background: transparent;

    &:hover {
      background: rgba(0, 0, 0, 0.1);
    }

    &:active {
      background: rgba(0, 0, 0, 0.05);
    }

    >.fa-cog {
      width: 16px;
      height: 16px;
      line-height: 18px;
      font-size: 16px;
      color: white;
    }
  }
}
</style>
