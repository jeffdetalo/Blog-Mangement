<template>
  <div class="side">
    <div class="d-flex" id="wrapper">
        <div class="bg-dark" id="sidebar-wrapper">
          <div class="sidebar-heading text-center py-4 text-white fs-4 fw-bold text-uppercase border-bottom"><i
                  class="fab fa-blogger fa-solid me-2"></i>Blog <br>Management</div>
          <div class="list-group list-group-flush my-3 text-white">
              <button  @click="$router.push('./dashboard').catch(()=>{})" type="button" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                      class="fas fa-tachometer-alt me-2"></i>Dashboard</button>
              <button  @click="$router.push('./writerlist').catch(()=>{})" type="button" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                      class="fas fa-pen-alt me-2"></i>Writer List</button>
              <button  @click="$router.push('./postlist').catch(()=>{})" type="button" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                      class="fas fa-paper-plane me-2"></i>Post List</button>
              <button  @click="$router.push('./commentlist').catch(()=>{})" type="button" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                      class="fa fa-comments me-2"></i>Comment List</button>
              <button  @click="$router.push('./alldata').catch(()=>{})" type="button" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fa fa-eye me-2"></i>View All Data</button>       
              <button  @click="$router.push('./').catch(()=>{})" type="button" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                    class="fas fa-power-off me-2"></i>Logout</button>
        </div>
      </div>
    </div>
  </div>    
</template>

<script>
export default {
}
</script>

<style scoped>

#sidebar-wrapper 
  {
    min-height: 100vh;
    margin-left: -15rem;
    -webkit-transition: margin 0.25s ease-out;
    -moz-transition: margin 0.25s ease-out;
    -o-transition: margin 0.25s ease-out;
    transition: margin 0.25s ease-out;
  }

#sidebar-wrapper .sidebar-heading 
  {
    padding: 0.875rem 1.25rem;
    font-size: 1.2rem;
  }


.list-group-item 
  {
    border: none;
    padding: 20px 30px;
  }

.list-group-item.active 
  {
    background-color: transparent;
    color: var(--main-text-color);
    font-weight: bold;
    border: none;
  }

@media (min-width: 768px) 
  {
    #sidebar-wrapper {
      margin-left: 0;
    }

    #wrapper.toggled #sidebar-wrapper {
      margin-left: -15rem;
    }
  }

.side
  {
      display: flex;
      flex-direction: column;
      position: absolute;
      position: fixed;
      left: 0;
      top: 0;
      bottom: 0;
  }
</style>