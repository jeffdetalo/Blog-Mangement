<template>
  <div>
    <form @submit.prevent="updateComment" class="vh-100 gradient-custom">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-6 col-lg-3 col-xl-3">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
              <div class="card-body p-4 text-center">

                <div class="mb-md-1 mt-md-1 pb-1">

                  <button type="submit" class="cancel" @click="$router.push('/commentlist').catch(()=>{})"><i class='fas fa-times' style='font-size: 20px;'></i></button>
                  <h3 class="fw-bold mb-2 text-uppercase">Edit Comment</h3>


                  <div class="form-outline form-white mb-2">
                    <input type="text" v-model="comment.text" class="form-control form-control-lg" required/>
                    <label class="form-label">Text</label>
                  </div>

                  <div class="form-outline form-white mb-2">
                    <input type="time" v-model="comment.time" class="form-control form-control-lg" required/>
                    <label class="form-label" >Time</label>
                  </div>

                  <button type="submit" class= "btn btn-primary"><i class='fas fa-save'> Save</i></button>
                  
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
    export default {
        data() {
            return {
                comment: {}
            }
        },
        created() {
            this.axios
                .get(`api/showComment/${this.$route.params.id}`)
                .then((res) => {
                    this.comment = res.data;
                });
        },
        methods: {
            updateComment() {
                this.axios
                    .put(`api/updateComment/${this.$route.params.id}`, this.comment)
                    .then((res) => {
                        this.$router.push({ name: 'commentlist' });

                         alert('Comment has been updated')
                    });
            }
        }
    }
</script>