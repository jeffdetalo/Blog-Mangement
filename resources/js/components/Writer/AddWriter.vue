<template>
  <div>
    <form @submit.prevent="addWriter" class="vh-100 gradient-custom">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-6 col-lg-3 col-xl-3">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
              <div class="card-body p-4 text-center">

                <div class="mb-md-1 mt-md-1 pb-1">

                  <button type="submit" class="cancel" @click="$router.push('./writerlist').catch(()=>{})"><i class='fas fa-times' style='font-size: 20px;'></i></button>
                  <h3 class="fw-bold mb-2 text-uppercase">Add Writer</h3>


                  <div class="form-outline form-white mb-2">
                    <input type="text" v-model="writer.first_name" class="form-control form-control-lg" required/>
                    <label class="form-label" for="typeEmailX">First Name</label>
                  </div>

                  <div class="form-outline form-white mb-2">
                    <input type="text" v-model="writer.middle_name" class="form-control form-control-lg" required/>
                    <label class="form-label">Middle Name</label>
                  </div>

                  <div class="form-outline form-white mb-2">
                    <input type="text" v-model="writer.last_name" class="form-control form-control-lg" required/>
                    <label class="form-label">Last Name</label>
                  </div>

                  <select class="form-select" v-model="writer.gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                  <label>Select Gender</label><br><br>

                  <div class="form-outline form-white mb-2">
                    <input type="text" v-model="writer.email" class="form-control form-control-lg" required/>
                    <label class="form-label" >Email</label>
                  </div>

                  <div class="form-outline form-white mb-2">
                    <input type="password" v-model="writer.password" class="form-control form-control-lg" required/>
                    <label class="form-label" >Password</label>
                  </div>

                  <select class="form-select" v-model="writer.writer_restriction">
                    <option value="0">0</option>
                    <option value="1">1</option>
                  </select>
                  <label>Select Restriction</label><br><br>
                
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
  export default {
        data() {
            return {
                writer: {}
            }
        },
        methods: {
            addWriter() {
                this.axios
                    .post('api/addWriter', this.writer)
                    .then(response => (
                        this.$router.push({ name: 'writerlist' })
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)

                    alert('Writer has been added successfully!')
            }
        }
    }
</script>

<style>
  .cancel
  {
        margin-left: 332px
  }
</style>