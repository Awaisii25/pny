<x-layout>
    <x-navbar></x-navbar>
    {{-- <x-banner></x-banner> --}}
    <style>
        .banner{
            background-image: url('https://media.geeksforgeeks.org/wp-content/uploads/20210724024414/135deg2-660x322.png');
            background-position: center;
            background-size: cover;
    
        }
    </style>
    <x-layout>
        <div class="container-fluid banner">
            <div class="container p-2">
                <div class="row align-items-center">
            <div class="col-lg-6 mb-3">
                <h1 class="fw-bolder display-4 ">Making Health $ <br> Care Better Together</h1>
                <p class="text-secondary">
                    A hospital alone shows what war is. A hospital is no place to be sick. The power of community to create health is far greater than any physician, clinic or hospital. A hospital bed is a parked taxi with the meter running.
                </p>
               <!-- Button trigger modal -->
    <button type="button" class="btn d-flex gap-2 align-items-center btn-dark px-4 py-2 fw-bold rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Book Now <i class="bi bi-chevron-right"></i>
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 m-auto fw-bold  fs-2 " id="exampleModalLabel">PHY Hospital 6th Road</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h3 class="text-info">Book an Appointment</h3>
    
                
                <form action="/book-appointment" method="POST" class="px-3 py-4">
                  @csrf
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Please enter your name">
                    @error('name')
                    <p class="text-danger fw-bold">
                      {{$message }}   
                    </p>
                        
                    @enderror
                    <label for="">Age</label>
                    <input type="text" name="age" class="form-control" placeholder="Please enter your age">
                    @error('name')
                        {{$message}}
                    @enderror
                    <label for="">Contact</label>
                    <input type="text" name="contact" class="form-control" placeholder="Please enter your number">
                     @error('contact')
                        {{$message}}
                    @enderror
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Please enter your email">
                    @error('email')
                    {{$message}}
                @enderror
                    <label for="">Disease</label>
                    <input type="text" name="disease" class="form-control" placeholder="Please enter your disease">
                    @error('disease')
                    {{$message}}
                @enderror
                    <label for="">Time</label>
                    <input type="datetime-local" name="datetime" class="form-control" placeholder="Please enter your number">
                    @error('datetime')
                    {{$message}}
                @enderror
                    <label for="">Doctors</label>
                    <select name="doc_id"  class="form-control" id="">
                     
                        
                    </select>
                    @error('doctors')
                    {{$message}}
                @enderror
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
           
          </div>
        </div>
      </div>
            </div>
            <div class="col-lg-6">
                <img width="100%" src="https://www.freepnglogos.com/uploads/doctor-png/doctor-bulk-billing-doctors-chapel-hill-health-care-medical-3.png" alt="">
            </div>
        </div>
    </div>
    </div>
    
    </x-layout>
    
    </x-layout>