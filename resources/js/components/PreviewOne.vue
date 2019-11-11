<template>
  <div class="container">
        <li> 
            <div class="level">
              <div class="level-left is-size-4"> Q: {{ faq.id+" "+faq.question }} </div>
                <div class="level-right"> 
                  <a class="button is-light" @click="editItem">Edit</a>
                  <a class="button is-light" @click="deleteItem">Delete</a>
                  <a class="button is-light" @click="toggleShow">{{ collapseButton() }}</a>
                </div>
            </div>
            <div v-show="showAnswer">A: {{ faq.answer}}</div>
        </li>
  </div>
</template>

<script>
  import routes from '../routes';
	export default {
      props: [ 
          'faqone'
      ],
      data() {
        return {
          faq: this.faqone,
          showAnswer: false
        }
      },
      methods: {
          toggleShow(){
              this.showAnswer=this.showAnswer ? false : true;            
          },
          // reakcija na expand/collapse all
          setShowAnswer: function(value) {
              this.showAnswer = value;
          },
          // naziv gumba
          collapseButton() {
              return   this.showAnswer ? 'collapse' : 'expand';
          }, 
          editItem() {
            console.log('editItem');
            routes.push('/');
          },
          deleteItem() {
                console.log('delete Item', this.faq.id);
                let uri = `/faqs/${this.faq.id}`;
                this.axios.delete(uri)
                .then(response => {
                  console.log(response);
                  alert('faq deleted');
                  this.$emit('deleted');
                })
                .catch(error =>{
                  console.log(error);
                  alert('napaka pri delete', error);
                });
          }
      }

	};
</script>