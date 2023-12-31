<x-layout>
    <div class="container mt-4">
        <div class="row col-lg-11 shadow p-3 m-auto">
           <div class="display-2 text-center fw-bolder mb-3 " >
            Ragester Now
           </div>
            <div class="col-lg-6">
                <img width="100%" height="400px" style="object-fit: cover;" src="https://media.istockphoto.com/id/1463013729/photo/online-registration-form-for-modish-form-filling.webp?b=1&s=170667a&w=0&k=20&c=iUOC7YLenExVDT9pfUtJyyIS-dlJvOPyJq1USG4lv5I=" alt="">
            </div>
            <div class="col-lg-6">
                <form action="/ragester" method="POST" enctype="multipart/form-data">
                    @csrf
                <label for="">Name</label>
                <input type="text" name="name" placeholder="enter your name" class="form-control" >

                <label for="">Age</label>
                <input type="number" name="age" placeholder="enter your Age" class="form-control" >
                <label for="">Phone</label>
                <input type="text" name="phone" placeholder="enter your number" class="form-control" >
                <label for="">Email</label>
                <input type="email" name="email" placeholder="enter your email" class="form-control" >
                <label for="">address</label>
                <input type="text" name="address" placeholder="enter your address" class="form-control" >
                <label for="">Password</label>
                <input type="text" name="password" placeholder="enter your address" class="form-control" >
                <label for="">image</label>
                <input type="file" name="image"  class="form-control" >
                <button class="fw-bolder btn btn-info w-100  mt-3">
                    Ragester
                </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>