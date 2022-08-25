const app = new Vue({
    el: '#app',
    data: {
      discs: [
 
      ],
    },

    methods: {
        // Attraverso la chiamata axios recupero la lista dei dischi dal controller del db
        getDiscs() {
           axios.get('http://localhost/php-ajax-dischi/calldb.php')  // Percorso relativo alla chiamata: '../calldb.php'
           .then(result => {
              this.discs = result.data;
              console.log(this.discs);
           });
        },
     },
 
    created: function() {
        this.getDiscs();
    },
 
  })