const { createApp } = Vue;

createApp({
  data() {
    return {
      show: false,
    };
  },

  methods: {
    showWord() {
      this.show = true;
    },

    prova() {
      this.show = false;
    },
  },
}).mount("#app");
