<template>
  <div class="container">
        <li> 
            <div class="level">
              <div class="level-left is-size-4"> Q: {{ faq.question }} </div>
                <div class="level-right">
                  <a class="button is-light">Edit</a>
                  <a class="button is-light">Delete</a>
                  <a class="button is-light" @click="toggleShow">{{ collapseButton() }}</a>
                </div>
            </div>
            <div v-show="showAnswer">A: {{ faq.answer}}</div>
        </li>
  </div>
</template>

<script>
	export default {
      props: [
          'faqone',
          'show'
      ],
      data() {
        return {
          faq: this.faqone,
          showAnswer: false
        }
      },
      mounted() {
        this.showAnswer = this.show;
      },
      computed: {
        this.showAnswer = this.show;
      },
      methods: {
          toggleShow(){
              console.log('toggleShow');
              this.showAnswer=this.showAnswer ? false : true;            
          },
          collapseButton() {
              return   this.showAnswer ? 'collapse' : 'expand';
          } 
      }

	};
</script>