<template>
  <div class="container">
    <h1 class="title is-4">Preview</h1>
    <a class="button is-light" @click="expandAll">Expand all</a>
    <a class="button is-light" @click="collapseAll">Collapse all</a>
    <ul>
      <div v-for="faq in faqs">
         <preview-one  :faqone="faq" ref="previewOne"></preview-one>
      </div>
    </ul>
  </div>
</template>

<script>
  import PreviewOne from './PreviewOne'
	export default {
      components: {
        PreviewOne
      },
      data() {
        return {
          faqs: [],
          showAll: true
        }
      },
      computed: {
            showAllStatus () {
                return this.showAll;
            }
      },
  		created()          {
            console.log('Component created.');
            let uri = `/faqs`;
            this.axios.get(uri).then(response => {
              console.log(response);
              this.faqs=response.data;
            })
            .catch(error =>{
              console.log(error);
            });
      },
      methods: {
            expandAll() {
                this.setShowAnswerAll(true);

            },
            collapseAll() {
                this.setShowAnswerAll(false);
            },
            setShowAnswerAll(value) {
                const arrayLength = this.$refs.previewOne.length;
                for (var i = 0; i < arrayLength; i++) {
                    console.log(i);
                    this.$refs.previewOne[i].setShowAnswer(value);
                }  
            }
      }
	};
</script>