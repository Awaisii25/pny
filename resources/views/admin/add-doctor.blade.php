<x-layout>
    <x-flash></x-flash>
    <div class="row">
        <x-admin_sidebar></x-admin_sidebar>
        <div class="col-lg-6 card m-auto p-3">
             <form action="/add-doctors" method="POST">
                
                @csrf
                
            <h1 class="text-center">
                Add Doctor
            </h1>

            <label for="">Doctor Name</label>
            <input type="text" class="form-control" name="drname" placeholder="please enter Doctor name">

            <label for="">Doctor Specilication</label>
            <input type="text" class="form-control" name="drspec" placeholder="please enter Doctor Spec">

            <label for=""></label>
            <button class="btn btn-success">
                Submit
             </button>
        </form>
    </div>
        </div>
    </div>
</x-layout>