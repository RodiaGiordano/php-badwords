const { createApp } = Vue;

createApp({
  data() {
    return {
      show: false,
    };
  },

  methods: {
    showWord() {
      this.show = this.show ? false : true;
    },
  },
}).mount("#app");
