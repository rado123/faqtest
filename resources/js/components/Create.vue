<template>
  <div class="container">
    <h1 class="title is-4">Nov faq</h1>
    <form @submit.prevent="addFaq">
      <div class="columns is-centered">
          <div class="column is-one-half">
              <div class="message">
                <div class="message-header">
                  FAQ
                </div>
                <div class="message-body">
                    <div class="form-group">
                     <label>Question</label>
                     <textarea class="textarea" v-model="faq.question" rows="1"></textarea>

                    </div>
                </div>
                <div class="message-body">
                    <div class="form-group">
                     <label>Answer</label>
                     <textarea class="textarea" v-model="faq.answer" rows="5"></textarea>
                    </div>
                </div>
              </div>

          </div>
      </div>
      <br />
      <div class="form-group">
          <button class="button">Save</button>
      </div>
    </form>
  </div>
</template>

<script>
	export default {
      data() {
        return {
          faq: {
            'question': '',
            'answer': ''
          }
        }
     },
     methods: {
          addFaq(){
            let uri = `/faqs`;
            this.axios.post(uri, this.faq).then(response => {
              console.log(response);
              console.log('faq',this.faq);
              alert('faq ustvarjen');
              // izbrišemo podatke v formi
              this.clearFaq();
            })
            .catch(error =>{
              console.log(error);
              alert('napaka', error);
            });
          },
          clearFaq(){
             this.faq.question='';
             this.faq.answer=''
          }

    }
  };
</script>