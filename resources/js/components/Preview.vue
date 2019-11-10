<template>
  <div class="container">
    <h1 class="title is-4">Preview</h1>


    <ul>
      <div v-for="faq in faqs">
        <li> 
            <div class="level">
              <div class="level-left is-size-5"> Q: {{ faq.question }} </div>
                <div class="level-right">
                  <button type="button" class="button" :id="'btn-e-' + faq.id">Edit</button>
                  <button type="button" class="button" :id="'btn-d-' + faq.id">Delete</button>
                  <button type="button" class="button" 
                        data-toggle="collapse" :data-target="'#fid-' + faq.id">collapse</button>
                </div>
            </div>
            <div :id="'fid-' + faq.id" class="collapse">
              A: {{ faq.answer}}
            </div>
        </li>
      </div>
    </ul>
  </div>
</template>

<script>
	export default {
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