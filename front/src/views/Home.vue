<template>
  <div class="home">
    <Header />
    <Tab title="Times" sub-title="Veja onde você se encaixa" />
    <Tab title="Participantes" sub-title="Encontra o melhor pra sua equipe" />
  </div>
</template>

<script>
// @ is an alias to /src
import Header from "@/components/Header.vue";
import Tab from "@/components/Tab.vue";

export default {
  name: "home",
  components: {
    Header,
    Tab
  }
};
</script>
