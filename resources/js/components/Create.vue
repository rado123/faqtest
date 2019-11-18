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
                      <p v-if="!questionIsValid" class="help is-danger">question is not valid</p>
                     </div>
                </div>
                <div class="message-body">
                    <div class="form-group">
                     <label>Answer</label>
                     <textarea class="textarea" v-model="faq.answer" rows="5"></textarea>
                      <p v-if="!answerIsValid" class="help is-danger">answer is not valid</p>
                    </div>
                </div>
              </div>

          </div>
      </div>
      <br />
      <div class="form-group">
          <button :disabled="!faqIsValid"class="button">Save</button>
      </div>
      <div v-if="!!error" class="help is-danger">Error: {{ error }}</div>
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
          },
          error:null
        }
     },
     computed: {
        questionIsValid() {
          console.log('q is val', this.faq);
          return !!this.faq.question;
        },
        answerIsValid() {
          return true;  //
        },
        faqIsValid(){
          return this.questionIsValid && this.answerIsValid;
        }
     },
     methods: {
          addFaq(){
            if (!this.faqIsValid) {
              console.log(" faq is not valid");
              return;            } 
            let uri = `/faqs`;
            this.axios.post(uri, this.faq)
            .then(response => {
              console.log(response);
              // alert('faq ustvarjen');
              // izbrišemo podatke v formi
              this.clearFaq();
            })
            .catch(error =>{
              console.log(error.response.data);
              // alert('napaka'+error.response.data.message);
              this.error=error.response.data;
            });
          },
          clearFaq(){
             this.faq.question='';
             this.faq.answer=''
             this.error=null;
            }
    }
  };
</script>