<style>
      @media(max-width:700px){
        .right{
            display: none
        }
        .manu{
            display: block;
        } 
      }
      .manu i{
        display: none
      }


</style>

<x-layout>
    <div class="container-fluid p-3" >
        <div class="row">
        <div class="left col-lg-6">
            <div class="d-flex gap-2">
                <div class="img">
                    <img width="100px" src="https://i.pinimg.com/736x/2e/02/bf/2e02bf2de46b5cbddf3cfbc16e83e822.jpg" alt="">
                </div>
                <div class="text">
                    <h5>PNY Hospital 6th Road</h5>
                    <p class="text-secondary">
                        HEALTH SOLUTION
                    </p>
                </div>
            </div>
        </div>
        <div class="right col-lg-6 m-auto">
            <ul class="list-unstyled align-items-center d-flex gap-3  text-center">
                <li class="fw-bold fs-5">Home</li>
                <li class="fw-bold fs-5">About</li>
                <li class="fw-bold fs-5">Department</li>
                <li class="fw-bold fs-5">Doctors</li>
                <li class="fw-bold fs-5">Blog</li>
                <li class="fw-bold fs-5">Contact</li>
            </ul>
          {{ auth()->user()->name}}
          
    </div>
    </div>
</x-layout>