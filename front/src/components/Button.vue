<template>
  <button>
    <slot />
  </button>
</template>

<style lang="stylus" scoped>
button {
  $button-color = #1e3040;
  cursor: pointer;
  box-sizing: border-box;
  background: $button-color;
  border-radius: 4px;
  padding: 6px 8px;
  color: #fff;
  text-transform: uppercase;
  outline: none;

  &:hover {
    background: lighten($button-color, 3%);
  }

  &:active {
    background: darken($button-color, 5%);
  }
}
</style>