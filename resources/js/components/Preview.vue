<template>
  <div class="container">
    <h1 class="title is-4">Preview</h1>


    <ul>
      <div v-for="faq in faqs">
         <preview-one  :faqone="faq" show></preview-one>
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
          faqs: []
        }
      },
  		created() {
            console.log('Component created.');
            let uri = `/faqs`;
            this.axios.get(uri).then(response => {
              console.log(response);
              this.faqs=response.data;
            })
            .catch(error =>{
              console.log(error);
            });
      }
	};
</script>