<template>
	<div>
		<p>About</p>
		<button class="btn btn-danger" @click.prevent="postFaq()">C PostFaq</button>
		<button class="btn btn-danger" @click.prevent="getFaq(1)">R getFaq</button>
		<button class="btn btn-danger" @click.prevent="updateFaq()">U updateFaq</button>
		<button class="btn btn-danger" @click.prevent="deleteFaq()">Delete</button>
	</div>
</template>

<script>
	export default {
      data() {
        return {
          faq: {
          	'id': 1,
          	'question': 'hardcoded!',
          	'answer': 'later will be answered.'
          }
        }
      },
      created() {

      	  console.log('pred created');
	      return;
	      let uri = '/faqs/1';
      	  console.log(uri,this.axios);
    	  this.axios.get(uri)
    	  .then(response => {
     		console.log('created', response);
        	this.faq = response.data.data;
      	  })
      	  .catch( error => {
      	  	console.log('catch get', error);
      	  });
    },
    methods: {
      deleteFaq()
      {
        let uri = `/faqs/${this.faq.id}`;
        console.log('deleteFlag', this.axios, uri,this );
        this.axios.delete(uri).then(response => {
        	console.log(response);
        })
        .catch(error =>{
        	console.log(error);
        });
      },
      getFaq(id)
      {
        let uri = `/faqs/${id}`;
        console.log('getFaq');
        this.axios.get(uri).then(response => {
        	console.log(response);
        	this.faq=response.data;
        })
        .catch(error =>{
        	console.log(error);
        });
      },
      updateFaq()
      {	
      	console.log('updateFaq',this.faq);
      	this.faq.answer='updated asd';
        let uri = `/faqs/${this.faq.id}`;
        this.axios.put(uri, this.faq).then(response => {
        	console.log(response);
        })
        .catch(error =>{
        	console.log(error);
        });
       /*
        */
      },
      postFaq()
      {	
     	console.log('postFaq',this.faq);
        let uri = `/faqs`;
        this.axios.post(uri, this.faq).then(response => {
        	console.log(response);
        })
        .catch(error =>{
        	console.log(error);
        });
       /*
        */
      }
    }
  };
</script>

