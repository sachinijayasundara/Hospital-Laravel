<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Make an Appointment</h1>


        <form class="main-form" action="{{url('appointment')}}" method="POST">

            @csrf


            <div class=" row mt-5 ">
                <div class=" col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" name="name" class=" form-control" placeholder="Full name">
                </div>

                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="email" name="email" class=" form-control" placeholder="Email address..">
                </div>

                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="date" name="date" class="form-control" id="futureDate" required>
                </div>

                <script>
                    // Get today's date in the format YYYY-MM-DD
                    var today = new Date().toISOString().split('T')[0];

                    // Set the min attribute of the date input to today, which restricts selection of past dates
                    document.getElementById("futureDate").setAttribute("min", today);
                </script>



                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="doctor" id="departement" class="custom-select">

                        <option>--select option--</option>
                        @foreach($doctor as $doctors) <option value="{{$doctors->name}}">{{$doctors->name}} (speciality)->{{$doctors->speciality}}</option>

                        @endforeach
                    </select>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <input type="text" name="number" class="form-control" placeholder="Phone Number" pattern="[0-9]{10}" title="Please enter a 10-digit phone number" required>
                </div>

                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
        </form>
    </div>
</div> <!-- .page-section -->