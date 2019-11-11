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
          } 
      }

	};
</script>