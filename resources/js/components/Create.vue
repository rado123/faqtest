<template>
  <div class="container">
    <h1 class="title is-4">Nov faq</h1>
    <form @submit.prevent="addFaq">
      <div class="columns is-centered">
          <div class="column is-one-half">
              <div class="message">
                <div class="message-header">
                  Faq
                </div>
                <div class="message-body">
                    <div class="form-group">
                     <label>Vprašanje</label>
                     <textarea class="form-control" v-model="faq.question" rows="5"></textarea>

                    </div>
                </div>
                <div class="message-body">
                    <div class="form-group">
                     <label>Odgovor</label>
                     <textarea class="form-control" v-model="faq.answer" rows="5"></textarea>

                    </div>
                </div>
              </div>

          </div>
      </div>
      <br />
      <div class="form-group">
          <button class="button">Ustvari faq</button>
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
     methods: {
          addFaq(){
            let uri = `/faqs`;
            this.axios.post(uri, this.faq).then(response => {
              console.log(response);
              alert('faq ustvarjen');
            })
            .catch(error =>{
              console.log(error);
            });
          }
    }
	};
</script>