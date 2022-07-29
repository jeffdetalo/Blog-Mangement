<template>
  <div>
      <form @submit.prevent="addComment" class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-6 col-lg-3 col-xl-3">
              <div class="card bg-dark text-white" style="border-radius: 1rem;">
                <div class="card-body p-4 text-center">

                  <div class="mb-md-1 mt-md-1 pb-1">

                    <button type="submit" class="cancel" @click="$router.push('./commentlist').catch(()=>{})"><i class='fas fa-times' style='font-size: 20px;'></i></button>
                    <h3 class="fw-bold mb-2 text-uppercase">Add Comment</h3>

                    <div class="form-outline form-white mb-2">
                      <input type="text" v-model="comment.text" class="form-control form-control-lg" required/>
                      <label class="form-label">Text</label>
                    </div>

                    <div class="form-outline form-white mb-2">
                      <input type="time" v-model="comment.time" class="form-control form-control-lg" required/>
                      <label class="form-label" >Time</label>
                    </div>

                    <div class="form-outline form-white mb-2">
                      <input type="text" v-model="comment.writer_id" class="form-control form-control-lg" required/>
                      <label class="form-label" >Writer ID</label>
                    </div>
                  
                    <button type="submit" class= "btn btn-primary"><i class='fas fa-plus'> Add</i></button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
</div>
</template>

<script>
    export default 
    {
      data() 
      {
        return {
          comment: {}
        }
      },
        
      methods: 
      {
        addComment() 
        {
          this.axios
          .post(`api/addComment/${this.$route.params.id}`, this.comment)
          .then(response => (
            this.$router.push({ name: 'commentlist' })
            ))
          .catch(err => console.log(err))
          .finally(() => this.loading = false)

          alert('Comment has been added successfully!')
        }
      }
    }
</script>