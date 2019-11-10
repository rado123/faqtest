<template>
  <div class="container">
    <h1 class="title is-4">Edit faq</h1>
    <form @submit.prevent="updateFaq">
      <div class="columns is-centered">
          <div class="column is-one-half">
              <div class="message">
                <div class="message-header">
                  id={{ faq.id}}
                </div>
                <div class="message-body">
                    <div class="form-group">
                     <label>Vprašanje</label>
                     <textarea class="textarea" v-model="faq.question" rows="2"></textarea>

                    </div>
                </div>
                <div class="message-body">
                    <div class="form-group">
                     <label>Odgovor</label>
                     <textarea class="textarea" v-model="faq.answer" rows="5"></textarea>

                    </div>
                </div>
              </div>

          </div>
      </div>
      <br />
      <div class="form-group">
          <button class="button">Shrani</button>
      </div>
    </form>
  </div>
  </div>
</template>

<script>
	export default {
      data() {
        return {
          faq: {
          }
        }
     },
	 mounted() {
            console.log('Component mounted.')
     },
     created(){
     		console.log('komponenta kreirana',this.$route.params.id)
     		// get faq po id

    		let id = this.$route.params.id;
    		let uri = `/faqs/${id}`;
	        this.axios.get(uri).then(response => {
	        	console.log(response);
	        	this.faq=response.data;
	        })
	        .catch(error =>{
	        	console.log(error);
	        });
	 },
     methods: {
        updateFaq()
              { 
                console.log('updateFaq',this.faq);
                let uri = `/faqs/${this.faq.id}`;
                this.axios.put(uri, this.faq)
                .then(response => {
	              console.log(response);
	              alert('faq shranjen');
	            })
	            .catch(error =>{
	              console.log(error);
	              alert('napaka', error);
	            });
               }
	     }

	};
</script>