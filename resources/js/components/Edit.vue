<template>
  <div class="container">
    <h1 class="title is-4">Edit faq</h1>
    <form @submit.prevent="updateFaq">
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
  </div>
</template>

<script>
	export default {
      data() {
       return {
          faq() 
                  {
                    // postavimo default vrednosti, da nimamo pri render probleme z undefined
                    let arr=[];
                    arr.push({
                          id:"",
                          question:"",
                          answer:""
                      })
                    return arr;
                  }
        }
     },
     created(){
    		let id = this.$route.params.id;
    		let uri = `/faqs/${id}`;
	        this.axios.get(uri)
          .then(response => {
	        	console.log('edit get rsp',response);
	        	this.faq=response.data;
	        })
	        .catch(error =>{
	        	console.log(error);
	        });
	   },
     methods: {
        updateFaq()
              { 
                let uri = `/faqs/${this.faq.id}`;
                this.axios.put(uri, this.faq)
                .then(response => {
  	              console.log(response);
                  this.$router.push({ name: 'preview'});
  	            })
  	            .catch(error =>{
  	              console.log(error);
  	              alert('napaka', error);
  	            });
               }
	     }

	};
</script>